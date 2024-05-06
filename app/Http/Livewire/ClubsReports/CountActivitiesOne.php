<?php

namespace App\Http\Livewire\ClubsReports;

use App\Models\Club;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class CountActivitiesOne extends Component
{
    public $activities_one;
    public $activities_attendees;

    public function index(){
        $this->emit('index');
    }

    public function mount(Club $club){
        $this->activities_one = $club->where('id', '!=', '1')->get();
        $this->activities_attendees = Reservation::whereHas('attendees')->count();
    }
    public function render()
    {
        return view('livewire.clubs-reports.count-activities-one',
        [
           'activities_one' => $this->activities_one,
        ]);
    }
}
