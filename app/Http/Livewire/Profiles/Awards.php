<?php

namespace App\Http\Livewire\Profiles;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Awards extends Component
{
    public function render()
    {
        return view('livewire.profiles.awards',
        [
            'user' => User::with('awards')->where('id', Auth::user()->id)->first(),
        ])
            ->extends('layouts.side')
            ->section('content');
    }
}
