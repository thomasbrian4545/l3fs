<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class RegisterForm extends Form
{
    #[Rule("required", message:"Nama wajib diisi.")]
    public $name;
    #[Rule("required|unique:users,email|email")]
    public $email;
    #[Rule("required|min:5")]
    public $password;
}
