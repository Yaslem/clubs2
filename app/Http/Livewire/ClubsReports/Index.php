<?php

namespace App\Http\Livewire\ClubsReports;

use App\Models\ClubsReports;
use Livewire\Component;

class Index extends Component
{
    public $index = true;
    public $edit = false;
    public $add = false;
    public $showActivitesCountOne = false;
    public $managers = false;
    public $clubPlans = false;

    protected $listeners = ['index'];

    public function switchAction($id){
        switch ($id){
            case 4:
                $this->showActivitesCountOne();
                break;
            case 8:
                $this->managers();
                break;
            case 7:
                $this->clubPlans();
                break;
        }
    }

    public function index(){
        $this->index = true;
        $this->edit = false;
        $this->add = false;
        $this->managers = false;
        $this->showActivitesCountOne = false;
        $this->clubPlans = false;
    }

    public function edit(){
        $this->index = false;
        $this->edit = true;
        $this->add = false;
        $this->managers = false;
        $this->showActivitesCountOne = false;
        $this->clubPlans = false;

        $this->emit('edit');
    }

    public function add(){
        $this->index = false;
        $this->edit = false;
        $this->add = true;
        $this->managers = false;
        $this->showActivitesCountOne = false;
        $this->clubPlans = false;

    }

    public function showActivitesCountOne(){
        $this->index = false;
        $this->edit = false;
        $this->add = false;
        $this->managers = false;
        $this->clubPlans = false;
        $this->showActivitesCountOne = true;
    }
    public function managers(){
        $this->managers = true;
        $this->index = false;
        $this->edit = false;
        $this->add = false;
        $this->clubPlans = false;
        $this->showActivitesCountOne = false;
    }

    public function clubPlans(){
        $this->managers = false;
        $this->index = false;
        $this->edit = false;
        $this->add = false;
        $this->clubPlans = true;
        $this->showActivitesCountOne = false;
    }

    public function render()
    {
        return view('livewire.clubs-reports.index',
        [
            'reports' => ClubsReports::all(),
        ])->extends('layouts.side')->section('content');
    }
}
