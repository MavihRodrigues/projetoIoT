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

    protected $rules = [
        'nome' => 'required',
    ];

    protected $messages = [
        'nome.required' => 'Este campo é obrigatório',
    ];

    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }

    public function store()
    {
        $this->validate();
        Ambiente::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);

        session()->flash('success', 'Cadastro Realizado, espere aprovação para entrar');

        return redirect()->route('ambientes.index');
    }
    
    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }
}
