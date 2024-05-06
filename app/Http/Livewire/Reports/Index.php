<?php

namespace App\Http\Livewire\Reports;

use App\Models\Club;
use App\Models\Location;
use App\Models\Report;
use App\Models\Type;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $reports, $reportCount;

//   Search && Filter

    public $titleIsNull;
    public $club_idIsNull;
    public $location_idIsNull;
    public $type_idIsNull;

    public $titleSearch;
    public $club_idSearch;
    public $location_idSearch;
    public $type_idSearch;

//   Actions

    public $editReport = false;
    public $addReport = false;
    public $indexReports = true;
    public $filterNull = false;

//   Listeners

    protected $listeners = ['indexReports'];


//   Index Action

    public function mount(Report $report)
    {
        $this->reports = $report;
    }

    public function indexReports()
    {
        $this->indexReports = true;
        $this->addReport = false;
        $this->editReport = false;
    }

//   Edit Action

    public function editReport($id)
    {
        $this->editReport = true;
        $this->indexReports = false;
        $this->addUser = false;

        $this->emit('EditReport', $id);
    }

//   Add Action

    public function addReport()
    {
        $this->addReport = true;
        $this->editReport = false;
        $this->indexReports = false;
    }


//   Delete Action

    public function willDeleteReport($id)
    {
        Report::find($id)->delete();
        session()->flash('message', 'تم حذف التقرير بنجاح!');

    }

    public function reportSearch()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            if ($this->titleSearch != null){

                $this->titleIsNull = false;
                $this->club_idIsNull = true;
                $this->location_idIsNull = true;
                $this->type_idIsNull = true;

                $this->location_idSearch = null;
                $this->club_idSearch = null;
                $this->type_idSearch = null;

                return  $this->reports->whereLike('title',  $this->titleSearch)
                    ->latest()->paginate(5);

            }elseif ($this->club_idSearch != null){

                $this->club_idIsNull = false;
                $this->location_idIsNull = true;
                $this->type_idIsNull = true;
                $this->titleIsNull = true;

                $this->location_idSearch = null;
                $this->titleSearch = null;
                $this->type_idSearch = null;
                return  $this->reports->where('club_id',  $this->club_idSearch)
                    ->latest()->paginate(5);

            }elseif ($this->location_idSearch != null){

                $this->location_idIsNull = false;
                $this->club_idIsNull = true;
                $this->type_idIsNull = true;
                $this->titleIsNull = true;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->type_idSearch = null;
                return  $this->reports->where('location_id',  $this->location_idSearch)
                    ->latest()->paginate(5);

            }elseif ($this->type_idSearch != null){

                $this->type_idIsNull = false;
                $this->location_idIsNull = true;
                $this->club_idIsNull = true;
                $this->titleIsNull = true;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->location_idSearch = null;
                return  $this->reports->where('type_id',  $this->type_idSearch)
                    ->latest()->paginate(5);

            }else{

                $this->location_idIsNull = false;
                $this->club_idIsNull = false;
                $this->type_idIsNull = false;
                $this->titleIsNull = false;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->location_idSearch = null;
                $this->type_idSearch = null;
                return $this->reports->latest()->paginate(5);
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

                return  $this->reports->whereLike('title',  $this->titleSearch)->whereHas('club', function (Builder $query) {
                    $query->where('id', Auth::user()->ClubStatus->id);
                })->where('user_id', Auth::user()->id)->latest()->paginate(5);

            }elseif ($this->club_idSearch != null){

                $this->club_idIsNull = false;
                $this->location_idIsNull = true;
                $this->type_idIsNull = true;
                $this->titleIsNull = true;

                $this->location_idSearch = null;
                $this->titleSearch = null;
                $this->type_idSearch = null;
                return  $this->reports->where('club_id',  $this->club_idSearch)->whereHas('club', function (Builder $query) {
                    $query->where('id', Auth::user()->ClubStatus->id);
                })->where('user_id', Auth::user()->id)->latest()->paginate(5);

            }elseif ($this->location_idSearch != null){

                $this->location_idIsNull = false;
                $this->club_idIsNull = true;
                $this->type_idIsNull = true;
                $this->titleIsNull = true;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->type_idSearch = null;
                return  $this->reports->where('location_id',  $this->location_idSearch)->whereHas('club', function (Builder $query) {
                    $query->where('id', Auth::user()->ClubStatus->id);
                })->where('user_id', Auth::user()->id)->latest()->paginate(5);

            }elseif ($this->type_idSearch != null){

                $this->type_idIsNull = false;
                $this->location_idIsNull = true;
                $this->club_idIsNull = true;
                $this->titleIsNull = true;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->location_idSearch = null;
                return  $this->reports->where('type_id',  $this->type_idSearch)->whereHas('club', function (Builder $query) {
                    $query->where('id', Auth::user()->ClubStatus->id);
                })->where('user_id', Auth::user()->id)->latest()->paginate(5);

            }else{

                $this->location_idIsNull = false;
                $this->club_idIsNull = false;
                $this->type_idIsNull = false;
                $this->titleIsNull = false;

                $this->club_idSearch = null;
                $this->titleSearch = null;
                $this->location_idSearch = null;
                $this->type_idSearch = null;
                return $this->reports->whereHas('club', function (Builder $query) {
                    $query->where('id', Auth::user()->ClubStatus->id);
                })->where('user_id', Auth::user()->id)->latest()->paginate(5);
            }
        }

    }


//   Views

    public function render()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            $reportCount = $this->reports->count();

            $this->reportCount = $reportCount;
        }else
        {
            $reportCount = $this->reports->whereHas('club', function (Builder $query) {
                $query->where('id', Auth::user()->ClubStatus->id);
            })->count();

            $this->reportCount = $reportCount;
        }

        if($this->reportSearch()->count() >= 1)
        {
            $this->filterNull = false;

            return view('livewire.reports.index',
                [
                    'clubs' => Club::where('id', '!=', '1')->get(),
                    'locations' => Location::all(),
                    'types' => Type::all(),
                    'reportsAll' => $this->reportSearch(),
                    'reportCount' => $this->reportCount,
                ]
            )
                ->extends('layouts.side')
                ->section('content');


        }else{
            $this->resetPage();
            $this->filterNull = true;
            return view('livewire.reports.index',
                [
                    'clubs' => Club::where('id', '!=', '1')->get(),
                    'locations' => Location::all(),
                    'types' => Type::all(),
                    'reportsAll' => $this->reportSearch(),
                    'reportCount' => $this->reportCount,
                ]
            )
                ->extends('layouts.side')
                ->section('content');

        }
    }
}
