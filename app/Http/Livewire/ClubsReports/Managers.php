<?php

namespace App\Http\Livewire\ClubsReports;

use App\Models\User;
use Livewire\Component;

class Managers extends Component
{
    public $users;

    public function index(){
        $this->emit('index');
    }

    public function mount(User $user){
        $this->users = $user->where('role', 'مدير')->get();
    }

    public function render()
    {
        return view('livewire.clubs-reports.managers');
    }
}
