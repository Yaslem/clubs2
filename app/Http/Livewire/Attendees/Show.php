<?php

namespace App\Http\Livewire\Attendees;

use App\Models\Attende;
use App\Models\Club;
use App\Models\Location;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;
    public $attendees, $attendeesCount;

//   Search && Filter

    public $titleIsNull;
    public $club_idIsNull;
    public $location_idIsNull;
    public $type_idIsNull;

    public $titleSearch;

    public $editAttende = false;
    public $showAttende = true;
    public $club_idSearch;
    public $location_idSearch;
    public $type_idSearch;

//   Actions

    protected $listeners = ['showAttendees'];
    public $indexAttendes = true;
    public $addAttende = false;
    public $filterNull = false;

//   Index Action

    public function mount(Attende $attende)
    {
        $this->attendees = $attende;
    }

    public function indexAttendees()
    {
        $this->emit('indexAttendees');

    }

    public function showAttendees(){
        $this->showAttende = true;
        $this->editAttende = false;
    }

    public function editAttende($id){
        $this->editAttende = true;
        $this->showAttende = false;

        $this->emit('updateAttendees', $id);
    }



    public function attendeSearch()
    {
        if (Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            if ($this->titleSearch != null) {

                $this->titleIsNull = false;
                $this->club_idIsNull = true;
                $this->location_idIsNull = true;
                $this->type_idIsNull = true;

                $this->location_idSearch = null;
                $this->club_idSearch = null;
                $this->type_idSearch = null;

                return $this->attendees->whereHas('reservation', function (Builder $query) {
                    $query->whereLike('title', $this->titleSearch);
                })->latest()->paginate(5);

            } elseif ($this->club_idSearch != null) {

                $this->club_idIsNull = false;
                $this->location_idIsNull = true;
                $this->type_idIsNull = true;
                $this->titleIsNull = true;

                $this->location_idSearch = null;
                $this->titleSearch = null;
                $this->type_idSearch = null;

                return $this->attendees->whereHas('reservation', function (Builder $query) {
                    $query->where('club_id', $this->club_idSearch);
                })->latest()->paginate(5);

            } elseif ($this->location_idSearch != null) {

                $this->location_idIsNull = false;
                $this->club_idIsNull = true;
                $this->type_idIsNull = true;
                $this->titleIsNull = true;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->type_idSearch = null;

                return $this->attendees->whereHas('reservation', function (Builder $query) {
                    $query->where('location_id', $this->location_idSearch);
                })->latest()->paginate(5);

            }elseif ($this->type_idSearch != null) {

                $this->type_idIsNull = false;
                $this->location_idIsNull = true;
                $this->club_idIsNull = true;
                $this->titleIsNull = true;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->location_idSearch = null;

                return $this->attendees->whereHas('reservation', function (Builder $query) {
                    $query->where('type_id', $this->type_idSearch);
                })->latest()->paginate(5);

            } else {

                $this->location_idIsNull = false;
                $this->club_idIsNull = false;
                $this->type_idIsNull = false;
                $this->titleIsNull = false;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->location_idSearch = null;
                $this->type_idSearch = null;
                return $this->attendees->latest()->paginate(5);
            }
        } elseif (Auth::user()->role === 'مدير')
        {
            if ($this->titleSearch != null) {

                $this->titleIsNull = false;
                $this->club_idIsNull = true;
                $this->location_idIsNull = true;
                $this->type_idIsNull = true;

                $this->location_idSearch = null;
                $this->club_idSearch = null;
                $this->type_idSearch = null;

                return $this->attendees->whereHas('reservation', function (Builder $query) {
                    $query->whereLike('title', $this->titleSearch);
                })->whereHas('reservation', function (Builder $query) {
                    $query->where('club_id', Auth::user()->ClubStatus->id);
                })->latest()->paginate(5);

            } elseif ($this->club_idSearch != null) {

                $this->club_idIsNull = false;
                $this->location_idIsNull = true;
                $this->type_idIsNull = true;
                $this->titleIsNull = true;

                $this->location_idSearch = null;
                $this->titleSearch = null;
                $this->type_idSearch = null;

                return $this->attendees->whereHas('reservation', function (Builder $query) {
                    $query->where('club_id', $this->club_idSearch);
                })->whereHas('reservation', function (Builder $query) {
                    $query->where('club_id', Auth::user()->ClubStatus->id);
                })->latest()->paginate(5);

            } elseif ($this->location_idSearch != null) {

                $this->location_idIsNull = false;
                $this->club_idIsNull = true;
                $this->type_idIsNull = true;
                $this->titleIsNull = true;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->type_idSearch = null;

                return $this->attendees->whereHas('reservation', function (Builder $query) {
                    $query->where('location_id', $this->location_idSearch);
                })->whereHas('reservation', function (Builder $query) {
                    $query->where('club_id', Auth::user()->ClubStatus->id);
                })->latest()->paginate(5);

            }elseif ($this->type_idSearch != null) {

                $this->type_idIsNull = false;
                $this->location_idIsNull = true;
                $this->club_idIsNull = true;
                $this->titleIsNull = true;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->location_idSearch = null;

                return $this->attendees->whereHas('reservation', function (Builder $query) {
                    $query->where('type_id', $this->type_idSearch);
                })->whereHas('reservation', function (Builder $query) {
                    $query->where('club_id', Auth::user()->ClubStatus->id);
                })->latest()->paginate(5);

            } else {

                $this->location_idIsNull = false;
                $this->club_idIsNull = false;
                $this->type_idIsNull = false;
                $this->titleIsNull = false;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->location_idSearch = null;
                $this->type_idSearch = null;
                return $this->attendees->whereHas('reservation', function (Builder $query) {
                    $query->where('club_id', Auth::user()->ClubStatus->id);
                })->latest()->paginate(5);
            }
        }else
        {
            if ($this->titleSearch != null){

                $this->titleIsNull = false;
                $this->club_idIsNull = true;
                $this->location_idIsNull = true;
                $this->type_idIsNull = true;

                $this->location_idSearch = null;
                $this->club_idSearch = null;
                $this->type_idSearch = null;

                return  $this->attendees->whereHas('reservation', function (Builder $query) {
                    $query->whereLike('title', $this->titleSearch);
                })->whereHas('user', function (Builder $query) {
                    $query->where('id', Auth::user()->id);
                })->latest()->paginate(5);

            }elseif ($this->club_idSearch != null){

                $this->club_idIsNull = false;
                $this->location_idIsNull = true;
                $this->type_idIsNull = true;
                $this->titleIsNull = true;

                $this->location_idSearch = null;
                $this->titleSearch = null;
                $this->type_idSearch = null;

                return  $this->attendees->whereHas('reservation', function (Builder $query) {
                    $query->where('club_id', $this->club_idSearch);
                })->whereHas('user', function (Builder $query) {
                    $query->where('id', Auth::user()->id);
                })->latest()->paginate(5);

            }elseif ($this->location_idSearch != null){

                $this->location_idIsNull = false;
                $this->club_idIsNull = true;
                $this->type_idIsNull = true;
                $this->titleIsNull = true;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->type_idSearch = null;

                return  $this->attendees->whereHas('reservation', function (Builder $query) {
                    $query->where('location_id', $this->location_idSearch);
                })->whereHas('user', function (Builder $query) {
                    $query->where('id', Auth::user()->id);
                })->latest()->paginate(5);

            }elseif ($this->type_idSearch != null){

                $this->type_idIsNull = false;
                $this->location_idIsNull = true;
                $this->club_idIsNull = true;
                $this->titleIsNull = true;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->location_idSearch = null;

                return  $this->attendees->whereHas('reservation', function (Builder $query) {
                    $query->where('type_id', $this->type_idSearch);
                })->whereHas('user', function (Builder $query) {
                    $query->where('id', Auth::user()->id);
                })->latest()->paginate(5);

            }else{

                $this->location_idIsNull = false;
                $this->club_idIsNull = false;
                $this->type_idIsNull = false;
                $this->titleIsNull = false;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->location_idSearch = null;
                $this->type_idSearch = null;
                return $this->attendees->whereHas('user', function (Builder $query) {
                    $query->where('id', Auth::user()->id);
                })->latest()->paginate(5);
            }

        }

    }


//   Views

    public function render()
    {
        $attendeesCount = $this->attendees->count();

        $this->attendeesCount = $attendeesCount;

        if($this->attendeSearch()->count() >= 1)
        {
            $this->filterNull = false;

            return view('livewire.attendees.show',
                [
                    'clubs' => Club::all(),
                    'locations' => Location::all(),
                    'types' => Type::all(),
                    'users' => User::all(),
                    'attendeesAll' => $this->attendeSearch(),
                    'attendeesCount' => $this->attendeesCount,
                ]
            )
                ->extends('layouts.side')
                ->section('content');


        }else{
            $this->resetPage();
            $this->filterNull = true;
            return view('livewire.attendees.show',
                [
                    'clubs' => Club::all(),
                    'locations' => Location::all(),
                    'types' => Type::all(),
                    'users' => User::all(),
                    'attendeesAll' => $this->attendeSearch(),
                    'attendeesCount' => $this->attendeesCount,
                ]
            )
                ->extends('layouts.side')
                ->section('content');

        }
    }
}
