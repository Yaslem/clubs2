<?php

namespace App\Http\Livewire\Attendees;

use App\Models\Attende;
use App\Models\Club;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

//   Actions

    public $indexAttendes = true;
    public $addAttende = false;
    public $showAttende = false;
    public $editAttende = false;
    public $showExport = false;

    public $filterNull = false;

//   Listeners

    protected $listeners = ['indexAttendees'];

    public function indexAttendees()
    {
        $this->indexAttendes = true;
        $this->addAttende = false;
        $this->showAttende = false;
        $this->showExport = false;
        $this->editAttende = false;

    }

//   Add Action

    public function addAttende($id)
    {
        $this->addAttende = true;
        $this->indexAttendes = false;
        $this->showAttende = false;
        $this->showExport = false;
        $this->editAttende = false;

        $this->emit('addAttende', $id);
    }

    public function showAttende()
    {
        $this->showAttende = true;
        $this->addAttende = false;
        $this->indexAttendes = false;
        $this->showExport = false;
        $this->editAttende = false;
    }

    public function showExport(){
        $this->showExport = true;
        $this->showAttende = false;
        $this->addAttende = false;
        $this->indexAttendes = false;
        $this->editAttende = false;
    }

    //   Delete Action

    public function willDeleteAttende($id)
    {
        Attende::find($id)->delete();
        session()->flash('message', 'تم حذف التقييم بنجاح!');
        $this->showAttende();

    }

    public function render()
    {
        if (Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            return view('livewire.attendees.index',
                [
                    'reservations' => Reservation::with('club', 'attendees', 'user')->where('is_attend', true)->paginate(4),
                ]
            )
                ->extends('layouts.side')
                ->section('content');
        }else{
            return view('livewire.attendees.index',
                [
//                    'reservations' => Reservation::with('club', 'attendees', 'user')->whereHas('club', function (Builder $query) {
//                        $club_id = 1;
//                        foreach (Auth::user()->club as $value){
//                            if($club_id === $value->id){
//                                break;
//                            }
//                            $club_id = $value->id + 1;
//                        }
////                        dd($club_id);
//                        $query->where('id', $club_id);
//                    })->where('is_attend', true)->paginate(4),
                      'reservations' => Reservation::with('club', 'attendees', 'user')->where('club_id', Auth::user()->ClubStatus->id)->where('is_attend', true)->paginate(4),

                ]
            )
                ->extends('layouts.side')
                ->section('content');
        }
    }
}
