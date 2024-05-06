<?php

namespace App\Http\Livewire\Attendees;

use App\Exports\ReservationAttendeExport;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Exports extends Component
{
    use WithPagination;

    public $titme;

    public function indexAttendees()
    {
        $this->emit('indexAttendees');

    }



    public function reservationsSearch()
    {
        if (Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            return Reservation::whereHas('attendees')->orderByDesc('date')->paginate(6);
        } elseif (Auth::user()->role === 'مدير')
        {
            return Reservation::whereHas('attendees')->whereHas('club', function (Builder $query) {
                $query->where('manager_id', Auth::user()->id);
            })->orderByDesc('date')->paginate(6);
        }

    }

    public function export($id, $title){
        return (new ReservationAttendeExport($id, $title))->download("activity.xlsx");
    }

//   Views

    public function render()
    {
        if (Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            $reservationsCount = Reservation::whereHas('attendees')->count();
        }else{
            $reservationsCount = Reservation::whereHas('attendees')->whereHas('club', function (Builder $query) {
                $query->where('manager_id', Auth::user()->id);
            })->count();

        }

        return view('livewire.attendees.exports',
            [
                'reservations' => $this->reservationsSearch(),
                'reservationsCount' => $reservationsCount,
            ]
        )
            ->extends('layouts.side')
            ->section('content');

    }
}
