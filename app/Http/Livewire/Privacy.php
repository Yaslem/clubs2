<?php

namespace App\Http\Livewire;

use App\Models\Club;
use Livewire\Component;

class Privacy extends Component
{
    public function render()
    {
        return view('livewire.privacy',
        [
            'clubs' => Club::where('id', '!=', '1')->get(),
        ])->extends('layouts.side')
            ->section('content');
    }
}
