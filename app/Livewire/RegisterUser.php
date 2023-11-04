<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class RegisterUser extends Component
{
    #[Rule("required", message:"Nama wajib diisi.")]
    public $name;
    #[Rule("required|unique:users|email")]
    public $email;
    #[Rule("required|min:5")]
    public $password;

    public function render()
    {
        return view('livewire.register-user');
    }

    public function save()
    {
        $this->validate();
        dd(123);
    }
}
