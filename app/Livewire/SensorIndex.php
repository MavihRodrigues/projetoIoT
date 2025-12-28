<?php

namespace App\Livewire;

use App\Livewire\SensorDashboard\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensorIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 15;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15],
    ];

    public function render()
    {
        return view('livewire.sensor-index');
    }

    public function delete($id)
    {
        Sensor::FindOrFail($id)->delete();
        session()->flash('message', 'Sensor deletado');
    }
}