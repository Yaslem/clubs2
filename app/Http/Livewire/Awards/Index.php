<?php

namespace App\Http\Livewire\Awards;

use App\Models\Award;
use App\Models\Reservation;
use App\Models\ReservationAward;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $showAwardId;

    //   Actions

    public $showAward = false;
    public $editAward = false;
    public $addAward = false;
    public $indexAward = true;
    public $addAwardIndex = false;

//   Listeners

    protected $listeners = [
        'indexAward' => 'indexAward',
        'showAwards' => 'showAward'
    ];


//   Index Action

    public function addAwardIndex()
    {
        $this->addAwardIndex = true;
        $this->indexAward = false;
        $this->showAward = false;
        $this->addAward = false;
        $this->editAward = false;
    }

    public function indexAward()
    {
        $this->indexAward = true;
        $this->showAward = false;
        $this->addAward = false;
        $this->editAward = false;
        $this->addAwardIndex = false;
    }

//   Show Action

    public function showAward($id)
    {
        $this->showAwardId = $id;
        $this->showAward = true;
        $this->indexAward = false;
        $this->addAward = false;
        $this->editAward = false;
        $this->addAwardIndex = false;

        $this->emit('showAward', $this->showAwardId);
    }

//   Edit Action



//   Delete Action

    public function willDeleteAward($id)
    {
        Award::find($id)->delete();
        session()->flash('message', 'تمت حذف جائزة الطالب بنجاح!');
        $this->showAward($this->showAwardId);
    }

    public function willDeleteAwards($id)
    {
        ReservationAward::where('reservation_id', $id)->delete();
        session()->flash('message', 'تم حذف الجائزة بنجاح!');

    }


//   Views

    public function render()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            return view('livewire.awards.index',
                [
                    'reservations' => Reservation::has('Award')->latest()->paginate(6),
                ]
            )
                ->extends('layouts.side')
                ->section('content');

        }else
        {
            return view('livewire.awards.index',
                [
                    'reservations' => Reservation::has('Award')->whereHas('club', function (Builder $query) {
                        $query->where('id', Auth::user()->ClubStatus->id);
                    })->latest()->paginate(6),
                ]
            )
                ->extends('layouts.side')
                ->section('content');
        }

    }
}
