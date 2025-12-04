<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{

    public $ambiente_id;
    public $nome;
    public $descricao;
    public $status;

    public function mount($ambiente_id)
    {
        $ambiente = Ambiente::findOrFail($ambiente_id);
        if ($ambiente == null) {
            session()->flash('error', 'Ambiente não encontrado!');
            return redirect()->route('ambientes.edit');
        } else {
            $ambiente = Ambiente::find($ambiente_id);

            $this->ambiente_id = $ambiente->id;
            $this->nome = $ambiente->nome;
            $this->descricao = $ambiente->descricao;
            $this->status = $ambiente->status;
        }
    }

    public function abrirModalVisualizar($ambiente_id)
    {
        $ambiente = Ambiente::find($ambiente_id);

        if ($ambiente) {
            $this->nome = $ambiente->nome;
            $this->descricao = $ambiente->descricao;
            $this->status = $ambiente->status;
        }
    }

    public function abrirModalExclusao($ambiente_id)
    {
        $this->$ambiente_id = $ambiente_id;
    }

    public function abrirModalEdicao($ambiente_id)
    {
        $this->dispatch('editarAmbiente', ambiente_id: $ambiente_id);
    }

    public function update()
    {
        $ambiente = Ambiente::find($this->ambiente_id);
        if ($ambiente) {
            $ambiente->nome = $this->nome;
            $ambiente->descricao = $this->descricao;
            $ambiente->status = $this->status;
            $ambiente->save();

            session()->flash('success', 'Ambiente atualizado com sucesso!');
            return redirect()->route('ambientes.index');
        }
        session()->flash('notUpdate', 'Ambiente não encontrado!');
    }

    public function render()
    {
        $ambiente = Ambiente::all();
        return view('livewire.ambiente.ambiente-edit');
        return view('livewire.ambiente.edit', compact('ambiente'));
    }
    public function excluir()
    {
        if ($this->ambiente_id) {
            Ambiente::find($this->ambiente_id)->delete();
        }
    }
}