<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorStatus extends Component
{
    public $sensorId;
    public $valor;
    public $unidade;
    public $status;

    protected $rules = [
        'valor' => 'required',
    ];

    protected $messages = [
        'valor.required' => 'Este campo é obrigatório',
    ];

    /**  para buscar todos os sensores: 
     * 1 - buscar todos os sensores utilzando a função all() e atribuir o resultado a uma variavel sensores
     * 2 - passar o resultado da pesquisa (variavel sensores) via compact para a sua view
     * 3 - na sua view, criar um foreach para preencher a tabela de sensores
     * 4 - criar o botão para ligar e desligar o led
     * 5 - buscar todos os sensores dentro da função render
     * */
    
    public function render()
    {
        $sensores = Sensor::all();
        return view('livewire.sensor.sensor-status', compact('sensores'));
    }
}
