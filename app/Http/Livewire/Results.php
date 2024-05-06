<?php

namespace App\Http\Livewire;

use App\Models\ActivityYear;
use Livewire\Component;

class Results extends Component
{
    public $years;

    public function mount(ActivityYear $activityYear){
        $this->years = $activityYear->with('results')->get();
    }

    public function render()
    {
        return view('livewire.results')->extends('layouts.side')
            ->section('content');
    }
}
