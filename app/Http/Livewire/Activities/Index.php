<?php

namespace App\Http\Livewire\Activities;

use App\Models\Club;
use App\Models\Date;
use App\Models\Location;
use App\Models\Reservation;
use App\Models\Time;
use App\Models\Type;
use App\Models\TypeAwards;
use App\Models\UrlActivity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

//   Search && Filter

    public $title = 'title';
    public $type_id = 'type_id';
    public $clubs_id = 'club_id';
    public $from = 'date';
    public $to = 'date';
    public $location_id = 'location_id';
    public $status = 'status';
    public $share = 'is_share';

    public $titleIsNull;
    public $typeIsNull;
    public $locationIsNull;
    public $statusIsNull;

    public $titleSearch;

    public $clubsIsNull;
    public $shareIsNull;
    public $fromIsNull;
    public $tosIsNull;

    public $clubsSearch;
    public $shareSearch;
    public $fromSearch;
    public $toSearch;

    public $typeSearch;
    public $locationSearch;
    public $statusSearch;
    public $Search;
    public $status_attend;

    public $activityCount;

//   Actions

    public $showActivity = false;
    public $editActivity = false;
    public $addActivity = false;
    public $indexActivity = true;
    public $filterNull = false;

//   Listeners

    protected $listeners = ['indexActivity'];

//   Index Action

    public function indexActivity()
    {
        $this->indexActivity = true;
        $this->showActivity = false;
        $this->addActivity = false;
        $this->editActivity = false;
    }

//   Show Action

    public function ShowActivity($id)
    {
        $this->showActivity = true;
        $this->addActivity = false;
        $this->indexActivity = false;
        $this->editActivity = false;

        $this->emit('ShowActivity', $id);
    }

//   Edit Action

    public function editActivity($id)
    {
        $this->editActivity = true;
        $this->showActivity = false;
        $this->indexActivity = false;
        $this->addActivity = false;

        $this->emit('EditActivity', $id);
    }

//   Add Action

    public function addActivity()
    {
        $this->addActivity = true;
        $this->editActivity = false;
        $this->showActivity = false;
        $this->indexActivity = false;
    }

//   Delete Action

    public function willDeleteActivity($id)
    {
        Reservation::find($id)->delete();
        session()->flash('message', 'تم حذف الحجز بنجاح!');

    }

    public function status_attend($id)
    {
        $activity_url = UrlActivity::where('activity_id', $id)->first();

        if($this->status_attend == true)
        {
            Reservation::find($id)->update(
                [
                    'is_attend' => true,
                ]
            );

            if($activity_url){
                $activity_url->update([
                    'is_open' => true,
                ]);
            }else{
                $url = Str::random(40);
                UrlActivity::create([
                    'url' => $url,
                    'activity_id' => $id,
                    'is_open' => true,
                ]);
            }
        }else{
            Reservation::find($id)->update(
                [
                    'is_attend' => false,
                ]
            );

            if($activity_url){
                $activity_url->update([
                    'is_open' => false,
                ]);
            }else{
                $url = Str::random(40);
                UrlActivity::create([
                    'url' => $url,
                    'activity_id' => $id,
                    'is_open' => false,
                ]);
            }
        }
    }

// Search

    public function searchActivity()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            if ($this->titleSearch != null)
            {
                return Reservation::query()
                    ->whereLike($this->title, $this->titleSearch ?? '')->orderByDesc('date')->paginate(10);

            }elseif ($this->clubsSearch != null)
            {
                return Reservation::query()
                    ->where($this->clubs_id, $this->clubsSearch ?? '')->orderByDesc('date')->paginate(10);
            }elseif ($this->fromSearch != null)
            {
                if($this->toSearch != null){
                    return Reservation::query()
                        ->where($this->from, '>=', $this->fromSearch ?? '')
                        ->where($this->to, '<=', $this->toSearch ?? '')
                        ->orderByDesc('date')->paginate(10);
                }else{
                    return Reservation::query()
                        ->where($this->from, '>=', $this->fromSearch ?? '')
                        ->where($this->to, '<=', '2023-06-03' ?? '')
                        ->orderByDesc('date')->paginate(10);
                }
            }elseif ($this->toSearch != null)
            {
                if($this->fromSearch != null){
                    return Reservation::query()
                        ->where($this->to, '<=', $this->toSearch ?? '')
                        ->where($this->from, '>=', $this->from ?? '')
                        ->orderByDesc('date')->paginate(10);
                }else{
                    return Reservation::query()
                        ->where($this->to, '<=', $this->toSearch ?? '')
                        ->where($this->from, '>=', '2022-10-03' ?? '')
                        ->orderByDesc('date')->paginate(10);
                }
            }elseif ($this->typeSearch != null)
            {
                return Reservation::query()
                    ->where($this->type_id, $this->typeSearch ?? '')->orderByDesc('date')->paginate(10);
            }elseif ($this->locationSearch != null)
            {
                return Reservation::query()
                        ->where($this->location_id, $this->locationSearch ?? '')->orderByDesc('date')->paginate(10);
            }elseif ($this->statusSearch != null)
            {
                return Reservation::query()
                    ->where($this->status,  $this->statusSearch ?? '')->orderByDesc('date')->paginate(10);
            }elseif ($this->shareSearch != null)
            {
                return Reservation::query()
                    ->where($this->share,  $this->shareSearch ?? '')->orderByDesc('date')->paginate(10);
            }else
            {
                return Reservation::query()
                    ->whereLike($this->title, $this->titleSearch ?? '')
                    ->whereLike($this->type_id, $this->typeSearch ?? '')
                    ->whereLike($this->clubs_id, $this->clubsSearch ?? '')
                    ->whereLike($this->location_id, $this->locationSearch ?? '')
                    ->whereLike($this->status,  $this->statusSearch ?? '')
                    ->whereLike($this->share,  $this->shareSearch ?? '')
                    ->orderByDesc('date')->paginate(10);
            }
        }else
        {
            if ($this->titleSearch != null)
            {
                $this->titleIsNull = false;
                $this->locationIsNull = true;
                $this->clubsIsNull = true;
                $this->typeIsNull = true;
                $this->statusIsNull = true;
                $this->shareIsNull = true;

                return Auth::user()->ClubStatus->reservations()
                    ->whereLike($this->title, $this->titleSearch ?? '')->orderByDesc('date')->paginate(10);

            }elseif ($this->typeSearch != null)
            {
                $this->typeIsNull = false;
                $this->titleIsNull = true;
                $this->clubsIsNull = true;
                $this->locationIsNull = true;
                $this->statusIsNull = true;
                $this->shareIsNull = true;

                return Auth::user()->ClubStatus->reservations()
                    ->where($this->type_id, $this->typeSearch ?? '')->orderByDesc('date')->paginate(10);
            }elseif ($this->locationSearch != null)
            {
                $this->locationIsNull = false;
                $this->typeIsNull = true;
                $this->titleIsNull = true;
                $this->statusIsNull = true;
                $this->clubsIsNull = true;
                $this->shareIsNull = true;

                return Auth::user()->ClubStatus->reservations()
                        ->where($this->location_id, $this->locationSearch ?? '')->orderByDesc('date')->paginate(10);
            }elseif ($this->statusSearch != null)
            {
                $this->statusIsNull = false;
                $this->locationIsNull = true;
                $this->typeIsNull = true;
                $this->titleIsNull = true;
                $this->clubsIsNull = true;
                $this->shareIsNull = true;

                return Auth::user()->ClubStatus->reservations()
                    ->where($this->status,  $this->statusSearch ?? '')->orderByDesc('date')->paginate(10);
            }elseif ($this->shareSearch != null)
            {
                $this->statusIsNull = true;
                $this->locationIsNull = true;
                $this->typeIsNull = true;
                $this->titleIsNull = true;
                $this->clubsIsNull = true;
                $this->shareIsNull = false;

                return Auth::user()->ClubStatus->reservations()
                    ->where($this->share,  $this->shareSearch ?? '')->orderByDesc('date')->paginate(10);
            }else
            {
                $this->locationIsNull = false;
                $this->typeIsNull = false;
                $this->titleIsNull = false;
                $this->statusIsNull = false;
                $this->clubsIsNull = false;
                $this->shareIsNull = false;

                return Auth::user()->ClubStatus->reservations()->orderByDesc('date')->paginate(10);
            }
        }
    }

//   Views

    public function render()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            $activitycount = Reservation::all();
            $this->activityCount = $activitycount->count();
        }else{
            $activitycount = Auth::user()->ClubStatus->reservations()->get();
            $this->activityCount = $activitycount->count();
        }

        if($this->searchActivity()->count() >= 1)
        {
            $this->filterNull = false;

            return view('livewire.activities.index',
                [
                    'types' => Type::all(),
                    'clubs' => Club::all(),
                    'locations' => Location::all(),
                    'activities' => $this->searchActivity(),
                    'dates' => Date::all(),
                    'times' => Time::all(),
                    'activityCount' => $this->activityCount,
                ]
            )
                ->extends('layouts.side')
                ->section('title', 'Show Posts')
                ->section('style')
                ->section('content');


        }else{
            $this->resetPage();
            $this->filterNull = true;
            return view('livewire.activities.index',
                [
                    'types' => Type::all(),
                    'clubs' => Club::all(),
                    'locations' => Location::all(),
                    'activities' => $this->searchActivity(),
                    'dates' => Date::all(),
                    'times' => Time::all()
                ]
            )
                ->extends('layouts.side')
                ->section('title', 'Show Posts')
                ->section('style')
                ->section('content');

        }
    }
}
