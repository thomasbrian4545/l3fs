<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Livewire\Forms\RegisterForm;

class RegisterUser extends Component
{
    public RegisterForm $form;

    public function render()
    {
        return view('livewire.register-user');
    }

    public function save()
    {
        $this->form->validate();
        dd(123);
    }
}
