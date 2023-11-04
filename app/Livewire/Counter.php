<?php

namespace App\Livewire;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $limit = 5;
    #[Layout('components.layouts.app')]
    #[Title('My Counter page')]

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment()
    {
        if ($this->count < $this->limit) {
            $this->count++;
        } else {
            session()->flash('status', 'The count is too high');
        }
    }

    public function decrement()
    {
        if ($this->count > 0) {
            $this->count--;
        } else {
            session()->flash('status', 'The count is too low');
        }
    }
}
