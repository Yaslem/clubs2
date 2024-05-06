<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IconNotivications extends Component
{
    public $notify_count;

    protected $listeners = ['IconNotifications' => 'notify'];

    public function mount(){
        $this->notify_count = Auth::user()->unreadNotifications->count();
    }

    public function notify(){
        $this->notify_count = Auth::user()->unreadNotifications->count();
    }

    public function render()
    {
        return view('livewire.icon-notivications');
    }
}
