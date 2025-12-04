<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Livewire\Component;

class UserEdit extends Component
{
    public $user_id;
    public $nome;
    public $email;
    public $password;

    // public function mount()
    // {
    //     if ($user = User::find(Auth::user()->id)) {
    //         $this->user_id = $user->id;
    //         $this->nome = $user->nome;
    //         $this->email = $user->email;
    //         $this->password = $user->senha;
    //     }
    // }

    public function salvar()
    {
        $user = User::find($this->user_id);

        if ($user) {
            $user->update([
                'nome' => $this->nome,
                'email' => $this->email,
                'password' => $this->password
            ]);

            $user->save();
            session()->flash('success', 'Dados Atualizados');
        }
    }

    public function render()
    {
        return view('livewire.user.user-edit');
    }
}
