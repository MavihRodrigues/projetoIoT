<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $ambiente_id;
    public $nome;
    public $tipo;
    public $status;

    public function mount($ambiente_id)
    {
        $sensor = Sensor::find($ambiente_id);
        if ($sensor == null) {
            session()->flash('error', 'Sensor não encontrado!');
            return redirect()->route('sensores.index');
        } else {
            $sensor = Sensor::find($ambiente_id);

            $this->ambiente_id = $sensor->id;
            $this->nome = $sensor->nome;
            $this->tipo = $sensor->tipo;
            $this->status = $sensor->status;
        }
    }

    public function abrirModalVisualizar($ambiente_id)
    {
        $sensor = Sensor::find($ambiente_id);
        
        if ($sensor) {
            $this->nome = $sensor->nome;
            $this->tipo = $sensor->tipo;
            $this->status = $sensor->status;
        }
    }

    public function abrirModalExclusao($ambiente_id)
    {
        $this->$ambiente_id = $$ambiente_id;
    }

    public function abrirModalEdicao($ambiente_id)
    {
        $this->dispatch('editarSensor', ambiente_id: $ambiente_id);
    }

    public function update()
    {
        $sensor = Sensor::find($this->ambiente_id);
        if ($sensor) {
            $sensor->nome = $this->nome;
            $sensor->tipo = $this->tipo;
            $sensor->status = $this->status;
            $sensor->save();

            session()->flash('success', 'Sensor atualizado com sucesso!');
            return redirect()->route('sensores.index');
        }
        session()->flash('notUpdate', 'Sensor não encontrado!');
    }

    public function render()
    {
        $sensor = Sensor::all();
        return view('livewire.sensor.sensor-edit');
        return view('livewire.sensor.index', compact('sensor'));
    }

    public function excluir()
    {
        if ($this->ambiente_id) {
            Sensor::find($this->ambiente_id)->delete();
        }
    }
}
