<?php

namespace App\Livewire;

use App\Models\Ambiente;
use App\Models\Sensor;
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
        'tipo' => 'required',
        'descricao' => 'required',
        'status' => 'required'
    ];

    protected $messages = [
        'codigo.unique' => 'Código incorreto',
        'tipo.required' => 'O campo código é obrigatório',
        'descricao.required' => 'O campo descrição é obrigatório',
        'status.required' => 'O campo status é obrigatório'
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
        $ambientes = Ambiente::all();
        return view('livewire.sensor-create', compact('ambientes'));
    }
}
