<?php

namespace App\Http\Livewire\Tools\Date;

use App\Models\Date;
use Livewire\Component;

class Index extends Component
{
    public $dates;

    protected $listeners = [
        'showDate' => 'mount',
        'indexDate' => 'indexDate',
    ];

    public function mount()
    {
        $this->dates = Date::all();
    }

    public $indexDate = true;
    public $showDate = false;
    public $addDate = false;
    public $editDate = false;

    public function indexTools()
    {
        $this->emit('indexTools');
    }

    public function date()
    {
        $this->emit('showDate');
    }

    public function indexDate()
    {
        $this->indexDate = true;
        $this->showDate = false;
        $this->editDate = false;
        $this->addDate = false;
    }

    public function addDate()
    {
        $this->addDate = true;
        $this->indexDate = false;
        $this->showDate = false;
        $this->editDate = false;
    }

    public function editDate($id)
    {
        $this->editDate = true;
        $this->indexDate = false;
        $this->showDate = false;
        $this->addDate = false;

        $this->emit('editDate', $id);
    }

    public function render()
    {
        return view('livewire.tools.date.index');
    }
}
