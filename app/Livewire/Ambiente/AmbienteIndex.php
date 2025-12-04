<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;
use Livewire\WithPagination;

class AmbienteIndex extends Component
{
    public $ambiente_id;
    public $nome;
    public $descricao;
    public $status;

    use WithPagination;
    public $perPage = 15;

    protected $queryString = [
        'perPage' => ['except' => '15']
    ];

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
        $this->ambiente_id = $ambiente_id;
    }

    public function abrirModalEdicao($ambiente_id)
    {
        $this->dispatch('editarAmbiente', ambiente_id: $ambiente_id);
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view(
            'livewire.ambiente.ambiente-index',
            ['ambientes' => Ambiente::paginate(15),],
            compact('ambientes')
        );
    }
}
