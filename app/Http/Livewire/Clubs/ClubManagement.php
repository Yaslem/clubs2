<?php

namespace App\Http\Livewire\Clubs;

use App\Models\Club;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ClubManagement extends Component
{

    use WithPagination;

    protected $listeners = ['indexClub'];

    public function indexClubs()
    {
        $this->emit('indexClubs');
    }

    public $indexClub = true;
    public $editClub = false;
    public $addClub = false;
    public $onlyTrashed = false;
    public $addManagement = false;

    public function indexClub()
    {
        $this->indexClub = true;
        $this->editClub = false;
        $this->addClub = false;
        $this->onlyTrashed = false;
        $this->addManagement = false;
    }

    public function editClub($id)
    {
        $this->editClub = true;
        $this->indexClub = false;
        $this->addClub = false;
        $this->onlyTrashed = false;
        $this->addManagement = false;


        $this->emit('editClub', $id);
    }

    public function onlyTrashed()
    {
        $this->onlyTrashed = true;
        $this->editClub = false;
        $this->indexClub = false;
        $this->addClub = false;
        $this->addManagement = false;


        $this->emit('onlyTrashed');
    }

    public function addClub()
    {
        $this->addClub = true;
        $this->indexClub = false;
        $this->editClub = false;
        $this->addManagement = false;

        $this->emit('addClub');
    }

    public function addManagement($id)
    {
        $this->addManagement = true;
        $this->addClub = false;
        $this->indexClub = false;
        $this->editClub = false;

        $this->emit('addManagements', $id);
    }

    public function render()
    {
        if (Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            return view('livewire.clubs.club-management',
                [
                    'clubs' => Club::where('id', '!=', '1')->paginate(5),
                    'clubCount' => Club::where('id', '!=', '1')->count(),
                    'countTrashed' => Club::where('id', '!=', '1')->onlyTrashed()->count(),
                ]);

        }else
        {
            return view('livewire.clubs.club-management',
                [
                    'clubs' => Club::where('id', '!=', '1')->where('id', Auth::user()->ClubStatus->id)->paginate(5),
                    'clubCount' => Club::where('id', '!=', '1')->where('id', Auth::user()->ClubStatus->id)->count(),
                    'countTrashed' => Club::where('id', '!=', '1')->where('id', Auth::user()->ClubStatus->id)->onlyTrashed()->count(),
                ]);
        }
    }
}
