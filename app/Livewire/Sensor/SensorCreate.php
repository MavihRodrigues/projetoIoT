<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $nome;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    protected $rules = [
        'nome' => 'required',
        'tipo' => 'required',
        'status' => 'required',
    ];

    protected $messages = [
        'nome.required' => 'Este campo é obrigatório',
        'status.required' => 'Este campo é obrigatório',
        'tipo.required' => 'Este campo é obrigatório',
    ];

    public function store()
    {
        $this->validate();
        Sensor::create([
            'nome' => $this->nome,
            'tipo' => $this->tipo,
            'status' => $this->status
        ]);
        return redirect()->route('sensor.index');
    }

    public function render()
    {
        return view('livewire.sensor.sensor-create');
    }
}