<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $nome;
    public $descricao;
    public $status;
    
    public function salvar()
    {
        $aluno = Ambiente::find();

        if ($aluno) {
            $aluno->update([
                'nome' => $this->nome,
                'descricao' => $this->descricao,
                'status' => $this->status
            ]);

            $aluno->save();
            session()->flash('success', 'Dados Atualizados');
        }
    }

    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}
