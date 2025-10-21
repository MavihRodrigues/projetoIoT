<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensorIndex extends Component
{
    public $ambiente_id;
    public $nome;
    public $tipo;
    public $status;

    use WithPagination;
    public $perPage = 15;

    protected $queryString = [
        'perPage' => ['except' => '15']
    ];

    public function render()
    {
        $sensores = Sensor::all();
        return view(
            'livewire.sensor.sensor-index',
            ['sensores' => Sensor::paginate(15),],
            compact('sensores')
        );
    }

    public function abrirModalExclusao($ambiente_id)
    {
        $this->$ambiente_id = $ambiente_id;
    }

    public function abrirModalEdicao($ambiente_id)
    {
        $this->dispatch('editarAmbiente', ambiente_id: $ambiente_id);
    }

    public function excluir()
    {
        if ($this->ambiente_id) {
            Sensor::find($this->ambiente_id)->delete();
        }
    }
}
