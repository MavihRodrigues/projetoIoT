<?php

namespace App\Livewire;

use App\Livewire\SensorDashboard\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    protected $rules = [
        'codigo' => 'unique:sensor,codigo',
        'tipo' => 'required'
    ];

    protected $messages = [
        'codigo.unique' => 'Código incorreto',
        'tipo.required' => 'O campo código é obrigatório'
    ];

    public function store()
    {
        $this->validate();

        Sensor::create([
            'ambiente_id' => $this->ambiente_id,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);

        session()->flash('success', 'Sensor cadastrado');
    }

    public function render()
    {
        return view('livewire.sensor-create');
    }
}
