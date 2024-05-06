<?php

namespace App\Http\Livewire\Tools\Year;

use App\Models\ActivityYear;
use Livewire\Component;

class Index extends Component
{
    public $years;

    protected $listeners = [
        'showYear' => 'mount',
        'indexYear' => 'indexYear',
    ];

    public function mount()
    {
        $this->years = ActivityYear::all();
    }

    public $indexYear = true;
    public $showYear = false;
    public $addYear = false;

    public function indexTools()
    {
        $this->emit('indexTools');
    }

    public function Year()
    {
        $this->emit('showYear');
    }

    public function indexYear()
    {
        $this->indexYear = true;
        $this->showYear = false;
        $this->editYear = false;
        $this->addYear = false;
    }

    public function addYear()
    {
        $this->addYear = true;
        $this->indexYear = false;
        $this->showYear = false;
        $this->editYear = false;
    }

    public function render()
    {
        return view('livewire.tools.year.index');
    }
}
