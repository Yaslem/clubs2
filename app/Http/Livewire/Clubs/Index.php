<?php

namespace App\Http\Livewire\Clubs;

use App\Models\Club;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['indexClubs'];

    public $indexClubs = true;
    public $ShowSubscribe = false;
    public $clubManagement = false;

    public function indexClubs()
    {
        $this->indexClubs = true;
        $this->ShowSubscribe = false;
        $this->clubManagement = false;


    }

    public function ShowSubscribe($id)
    {
        $this->ShowSubscribe = true;
        $this->indexClubs = false;
        $this->clubManagement = false;

        $this->emit('ShowSubscribe', $id)->component('clubs.subscribe');
    }

    public function subscribe($clubId, $userId)
    {
        $club = Club::find($clubId);
        $club->users()->attach($userId);
        $this->ShowSubscribe = true;
        $this->indexClubs = false;
        $this->clubManagement = false;

        $this->emit('ShowSubscribe', $userId)->component('clubs.subscribe');
        session()->flash('message', ' تم التسجيل في نادي '.$club->name.' بنجاح ');
    }

    public function unsubscribe($clubId, $userId)
    {
        $club = Club::find($clubId);
        $club->users()->detach($userId);
        session()->flash('message', ' تم إلغاء التسجيل في نادي '.$club->name.' بنجاح ');
        $this->indexClubs = true;
        $this->ShowSubscribe = false;
        $this->clubManagement = false;
    }

    public function clubManagement()
    {
        $this->clubManagement = true;
        $this->ShowSubscribe = false;
        $this->indexClubs = false;
    }

    public function willDeleteClub($id)
    {
        Club::find($id)->delete();
        session()->flash('message', 'تم حذف النادي بنجاح!');
        $this->clubManagement();
    }

    public function restoreAll()
    {
        Club::onlyTrashed()->restore();
        session()->flash('message', 'تمت استعادة جميع المحذوفين بنجاح!');
        $this->emit('indexClub');

    }

    public function forceDeleteAll()
    {
        Club::onlyTrashed()->forceDelete();
        session()->flash('message', 'تمت حذف الجميع بنجاح!');
        $this->emit('indexClub');

    }

    public function render()
    {
        if(Auth::user()){
            return view('livewire.clubs.index',
                [
                    'clubs' => Club::whereDoesntHave('users', function (Builder $query) {
                        $query->where('user_id', Auth::user()->id);
                    })->where('id', '!=', '1')->get(),
                ]
            )
                ->extends('layouts.side')
                ->section('content');
        }else{
            return view('livewire.clubs.index',
                [
                    'clubs' => Club::where('id', '!=', '1')->get(),
                ]
            )
                ->extends('layouts.side')
                ->section('content');
        }
    }
}
