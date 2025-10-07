<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;

class RegistroCreate extends Component
{
    public $sensorId;
    public $valor;
    public $unidade;

    protected $rules = [
        'valor' => 'required',
    ];

    protected $messages = [
        'valor.required' => 'Este campo é obrigatório',
    ];

    public function render()
    {
        return view('livewire.registro.registro-create');
    }

    public function store()
    {
        $this->validate();
        Registro::create([
            'sensorId' => $this->sensorId,
            'valor' => $this->valor,
            'unidade' => $this->unidade
        ]);
    }
}
