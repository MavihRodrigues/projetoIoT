<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorStatus extends Component
{
    public $sensorId;
    public $codigo;
    public $tipo;
    public $status;

    protected $rules = [
        'valor' => 'required',
    ];

    protected $messages = [
        'valor.required' => 'Este campo é obrigatório',
    ];
    
    public function render()
    {
        $sensores = Sensor::all();
        return view('livewire.sensor.sensor-status', compact('sensores'));
    }
}
