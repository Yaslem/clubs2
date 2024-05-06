<?php

namespace App\Http\Livewire\Tools;

use Livewire\Component;

class Index extends Component
{
    public $indexTools = true;
    public $Showdate = false;
    public $showYear = false;
    public $ShowAdministrative = false;
    public $ShowTime = false;
    public $showResults = false;
    public $ShowType = false;
    public $ShowLocation = false;
    public $ShowAward = false;
    public $ShowCountry = false;
    public $ShowCollege = false;
    public $ShowLevel = false;

    protected $listeners = ['indexTools' => 'indexTools'];


    public function Showdate()
    {
        $this->Showdate = true;
        $this->indexTools = false;
        $this->ShowTime = false;
        $this->ShowType = false;
        $this->ShowLocation = false;
        $this->ShowAward = false;
        $this->showResults = false;
        $this->ShowCountry = false;
        $this->ShowCollege = false;
        $this->ShowLevel = false;
        $this->ShowAdministrative = false;
        $this->showYear = false;
        $this->emit('showDate');
    }

    public function time()
    {
        $this->ShowTime = true;
        $this->Showdate = false;
        $this->indexTools = false;
        $this->showResults = false;
        $this->ShowType = false;
        $this->ShowLocation = false;
        $this->ShowAward = false;
        $this->ShowCountry = false;
        $this->ShowCollege = false;
        $this->ShowLevel = false;
        $this->showYear = false;
        $this->ShowAdministrative = false;
        $this->emit('Showtime');
    }

    public function award()
    {
        $this->ShowAward = true;
        $this->ShowTime = false;
        $this->showYear = false;
        $this->Showdate = false;
        $this->indexTools = false;
        $this->ShowType = false;
        $this->ShowLocation = false;
        $this->ShowCountry = false;
        $this->showResults = false;
        $this->ShowCollege = false;
        $this->ShowLevel = false;
        $this->ShowAdministrative = false;
        $this->emit('showAward');
    }

    public function country()
    {
        $this->ShowCountry = true;
        $this->ShowAward = false;
        $this->ShowTime = false;
        $this->Showdate = false;
        $this->indexTools = false;
        $this->ShowType = false;
        $this->ShowLocation = false;
        $this->ShowCollege = false;
        $this->showResults = false;
        $this->ShowLevel = false;
        $this->showYear = false;
        $this->ShowAdministrative = false;
        $this->emit('showAward');
    }

    public function level()
    {
        $this->ShowLevel = true;
        $this->ShowCountry = false;
        $this->showYear = false;
        $this->ShowAward = false;
        $this->ShowTime = false;
        $this->Showdate = false;
        $this->indexTools = false;
        $this->ShowType = false;
        $this->showResults = false;
        $this->ShowLocation = false;
        $this->ShowCollege = false;
        $this->ShowAdministrative = false;
        $this->emit('showLevel');
    }

    public function college()
    {
        $this->ShowCollege = true;
        $this->ShowLevel = false;
        $this->ShowCountry = false;
        $this->ShowAward = false;
        $this->ShowTime = false;
        $this->Showdate = false;
        $this->indexTools = false;
        $this->ShowType = false;
        $this->ShowLocation = false;
        $this->showResults = false;
        $this->showYear = false;
        $this->ShowAdministrative = false;
        $this->emit('showLevel');
    }

    public function type()
    {
        $this->ShowType = true;
        $this->ShowTime = false;
        $this->Showdate = false;
        $this->showYear = false;
        $this->indexTools = false;
        $this->ShowLocation = false;
        $this->ShowAward = false;
        $this->ShowCountry = false;
        $this->showResults = false;
        $this->ShowCollege = false;
        $this->ShowLevel = false;
        $this->ShowAdministrative = false;
        $this->emit('showType');
    }

    public function location()
    {
        $this->ShowLocation = true;
        $this->ShowType = false;
        $this->ShowTime = false;
        $this->Showdate = false;
        $this->indexTools = false;
        $this->ShowAward = false;
        $this->ShowCountry = false;
        $this->showYear = false;
        $this->ShowCollege = false;
        $this->showResults = false;
        $this->ShowLevel = false;
        $this->ShowAdministrative = false;
        $this->emit('showLocation');
    }

    public function Administrative()
    {
        $this->ShowAdministrative = true;
        $this->ShowLocation = false;
        $this->showYear = false;
        $this->ShowType = false;
        $this->ShowTime = false;
        $this->Showdate = false;
        $this->indexTools = false;
        $this->ShowAward = false;
        $this->ShowCountry = false;
        $this->ShowCollege = false;
        $this->showResults = false;
        $this->ShowLevel = false;
        $this->emit('showAdministrative');
    }

    public function showYear(){
        $this->indexTools = false;
        $this->ShowLocation = false;
        $this->ShowType = false;
        $this->ShowTime = false;
        $this->Showdate = false;
        $this->ShowAward = false;
        $this->ShowCountry = false;
        $this->ShowCollege = false;
        $this->ShowLevel = false;
        $this->showResults = false;
        $this->showYear = true;
        $this->ShowAdministrative = false;

        $this->emit('showYear');
    }
    public function showResults(){
        $this->indexTools = false;
        $this->ShowLocation = false;
        $this->ShowType = false;
        $this->ShowTime = false;
        $this->Showdate = false;
        $this->ShowAward = false;
        $this->ShowCountry = false;
        $this->ShowCollege = false;
        $this->ShowLevel = false;
        $this->showYear = false;
        $this->showResults = true;
        $this->ShowAdministrative = false;

        $this->emit('showResults');
    }

    public function indexTools()
    {
        $this->indexTools = true;
        $this->ShowLocation = false;
        $this->ShowType = false;
        $this->ShowTime = false;
        $this->Showdate = false;
        $this->ShowAward = false;
        $this->ShowCountry = false;
        $this->ShowCollege = false;
        $this->ShowLevel = false;
        $this->showYear = false;
        $this->showResults = false;
        $this->ShowAdministrative = false;
    }

    public function render()
    {
        return view('livewire.tools.index')
            ->extends('layouts.side')
            ->section('content');
    }
}
