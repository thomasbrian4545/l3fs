<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class AllUsers extends Component
{
    use WithPagination;
    public $q;
    public $perPage = 10;
    public function render()
    {
        if (!$this->q) {
            $users = User::Paginate($this->perPage);
        } else {
            $users = User::where('name', 'like', '%' . $this->q . '%')
                ->orWhere('email', 'like', '%' . $this->q . '%')
                ->Paginate($this->perPage);
        }
        return view('livewire.all-users', [
            // 'users'=>User::paginate(5),
            // 'users'=>User::cursorPaginate(5),
            'users' => $users,
        ]);
    }

    public function updatedQ(){
        $this->resetPage();
    }
}
