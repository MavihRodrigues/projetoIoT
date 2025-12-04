<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public $user;
    public $user_id;
    public $nome;
    public $email;
    public $password;

    // 
    protected $listeners = [
        'editarUser',
        'userAtualizado' => 'render'
    ];

    public function abrirModalVisualizar($user_id){
        $user = User::find($user_id);

        if($user_id) {
            $this->nome = $user_id->nome;
            $this->email = $user_id->email;
            $this->password = $user_id->password;
        }
    }
    public function abrirModalExclusao($user_id){
        $this->user_id = $user_id; 
    }
    
    public function abrirModalEdicao($user_id){
        $this->dispatch('editarUser', user_id: $user_id);
    }

    public function excluir(){
        if($this->user_id){
            User::find($this->user_id)->delete(); 
        }
    }

    public function render()
    {
        return view('livewire.user.user-index');
    }
}
