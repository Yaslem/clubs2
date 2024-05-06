<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notivications extends Component
{
    public $notifications;
    public $Unotifications;
    public $Rnotifications;

    protected $listeners = ['notification' => 'notificationAll'];

    public function mount(){
        $this->notifications = Auth::user()->notifications->count();
        $this->Unotifications = Auth::user()->unreadNotifications->all();
        $this->Rnotifications = Auth::user()->readNotifications->all();
    }

    public function notificationAll(){
        $this->Unotifications = Auth::user()->unreadNotifications->all();
        $this->notifications = Auth::user()->notifications->count();
        $this->Rnotifications = Auth::user()->readNotifications->all();
    }

    public function markAsRead($id){
        $noti = Auth::user()->notifications->find($id);
        $noti->markAsRead();
        $this->mount();
        $this->emit('IconNotifications');
    }


    public function render()
    {
        return view('livewire.notivications');
    }
}
