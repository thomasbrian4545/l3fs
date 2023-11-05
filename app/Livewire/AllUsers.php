<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class AllUsers extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.all-users',[
            // 'users'=>User::paginate(5),
            // 'users'=>User::cursorPaginate(5),
            'users'=>User::simplePaginate(5),
        ]);
    }
}
