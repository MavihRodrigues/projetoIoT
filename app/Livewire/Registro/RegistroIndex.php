<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;

class Index extends Component
{
    public $sensorId;
    public $valor;
    public $unidade;
    public $data_hora;

    public function render()
    {
        $registro = Registro::all();
        return view('livewire.registro.index', compact('registro'));
    }

    public function abrirModalVisualizar($registroId){
        $registro = Registro::find($registroId);

        if($registro) {
            $this->valor = $registro->valor;
            $this->unidade = $registro->unidade;
        }
    }
    public function abrirModalExclusao($registroId){
        $this->registroId = $registroId; 
    }
    
    public function abrirModalEdicao($registroId){
        $this->dispatch('editarRegistro', registroId: $registroId);
    }

    public function excluir(){
        if($this->registroId){
            Registro::find($this->registroId)->delete(); 
        }
    }
}
