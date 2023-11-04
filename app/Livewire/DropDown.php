<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\County;
use App\Models\Subcounty;

class DropDown extends Component
{
    public $counties;
    public $selectedCounty = null;
    public $subCounties;

    public function mount()
    {
        $this->counties = County::all();
    }

    public function render()
    {
        return view('livewire.drop-down');
    }

    public function updatedSelectedCounty()
    {
        // dd($this->selectedCounty);
        $this->subCounties = Subcounty::where('county_code', $this->selectedCounty)->get();
    }
}
