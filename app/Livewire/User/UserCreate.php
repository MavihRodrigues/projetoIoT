<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserCreate extends Component
{
    public $nome;
    public $email;
    public $password;

    public function store()
    {
        $user = User::create([
            'name' => $this->nome,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'user'
        ]);

        User::create([
            'user_id' => $user->id
        ]);

        session()->flash('success', 'Cadastro Realizado, espere aprovação para entrar');
    }

    public function render()
    {
        return view('livewire.user.user-create');
    }
}
