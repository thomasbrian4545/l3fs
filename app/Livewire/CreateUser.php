<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateUser extends Component
{
    // public $users;
    public $name = 'Awesome Name';

    /*
    public function mount()
    {
        $this->users = User::all();
    }
    */
    public function render()
    {
        return view('livewire.create-user')->with([
            'email' => 'brian@gmail.com','users'=>User::all()
        ]);
    }
}
