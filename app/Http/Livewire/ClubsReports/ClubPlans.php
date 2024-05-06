<?php

namespace App\Http\Livewire\ClubsReports;

use App\Models\Club;
use Livewire\Component;

class ClubPlans extends Component
{
    public $club_idSearch = 2;

    public $index = true;
    public $addclubPlans = false;

    protected $listeners = ['clubPlans' => 'index'];

    public function back(){
        $this->emit('index');
    }

    public function index(){
        $this->index = true;
        $this->addclubPlans = false;
    }

    public function add(){
        $this->index = false;
        $this->addclubPlans = true;
    }

    public function club_idSearch(){
        return $club = Club::whereHas('clubplans')->where('id', $this->club_idSearch)->first();
    }

    public function render()
    {
        return view('livewire.clubs-reports.club-plans', [
            'club' => $this->club_idSearch(),
            'clubsAll' => Club::whereHas('clubplans')->get()
        ]);
    }
}
