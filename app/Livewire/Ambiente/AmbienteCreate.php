<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use App\Models\User;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;

    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }

    public function store(){
        $user = User::create([
            'name' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);

        AmbienteCreate::create([
            'nome' =>$this->nome,
            'descricao' =>$this->descricao,
            'status' =>$this->status,
        ]);
    }
}
