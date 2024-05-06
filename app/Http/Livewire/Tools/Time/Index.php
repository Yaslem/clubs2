<?php

namespace App\Http\Livewire\Tools\Time;

use App\Models\Time;
use Livewire\Component;

class Index extends Component
{
    public $Times;

    protected $listeners = [
        'Showtime' => 'mount',
        'indexTime' => 'indexTime',
    ];

    public function mount()
    {
        $this->Times = Time::all();
    }

    public $indexTime = true;
    public $showTime = false;
    public $addTime = false;
    public $editTime = false;

    public function indexTools()
    {
        $this->emit('indexTools');
    }

    public function Time()
    {
        $this->emit('showTime');
    }

    public function indexTime()
    {
        $this->indexTime = true;
        $this->showTime = false;
        $this->editTime = false;
        $this->addTime = false;
    }

    public function addTime()
    {
        $this->addTime = true;
        $this->indexTime = false;
        $this->showTime = false;
        $this->editTime = false;
    }

    public function editTime($id)
    {
        $this->editTime = true;
        $this->indexTime = false;
        $this->showTime = false;
        $this->addTime = false;

        $this->emit('editTime', $id);
    }

    public function render()
    {
        return view('livewire.tools.time.index');
    }
}
