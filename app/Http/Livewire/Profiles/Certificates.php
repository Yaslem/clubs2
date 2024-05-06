<?php

namespace App\Http\Livewire\Profiles;

use App\Models\certificate;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Certificates extends Component
{
    use WithPagination;

    public function downloadCertificate($certificate)
    {
        return Storage::disk('files')->download($certificate);
    }

    public function render()
    {
        return view('livewire.profiles.certificates',
        [
            'user' => User::with('certificate')->where('id', Auth::user()->id)->first(),
        ])
            ->extends('layouts.side')
            ->section('content');
    }
}
