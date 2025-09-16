<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;
use Livewire\WithPagination;

class AmbienteIndex extends Component
{
    use WithPagination;
    public $perPage = 15;

    protected $queryString = [
        'perPage' => ['except' => '15']
    ];

    public function render()
    {
        $ambientes = Ambiente::all();
        return view(
            'livewire.ambiente.ambiente-index',
            ['ambientes' => Ambiente::paginate(15),],
            compact('ambientes')
        );
    }
}
