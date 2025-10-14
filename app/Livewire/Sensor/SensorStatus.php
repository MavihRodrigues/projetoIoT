<?php

namespace App\Livewire\Sensor;

use Livewire\Component;

class SensorStatus extends Component
{
    public $ambiente_id;
    public $nome;
    public $descricao;
    public $status;

    public function
    if ($status == 0) {
        echo "ON";

    } else {
     echo "OFF";

    public function render()
    {
        return view('livewire.sensor.sensor-status');
    }
}
