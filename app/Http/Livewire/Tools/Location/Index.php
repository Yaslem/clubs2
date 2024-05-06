<?php

namespace App\Http\Livewire\Tools\Location;

use App\Models\Location;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'showLocation' => 'render',
        'indexLocation' => 'indexLocation',
    ];

    public $indexLocation = true;
    public $showLocation = false;
    public $addLocation = false;
    public $editLocation = false;

    public function indexTools()
    {
        $this->emit('indexTools');
    }


    public function indexLocation()
    {
        $this->indexLocation = true;
        $this->showLocation = false;
        $this->editLocation = false;
        $this->addLocation = false;
    }

    public function addLocation()
    {
        $this->addLocation = true;
        $this->indexLocation = false;
        $this->showLocation = false;
        $this->editLocation = false;
    }

    public function editLocation($id)
    {
        $this->editLocation = true;
        $this->indexLocation = false;
        $this->showLocation = false;
        $this->addLocation = false;

        $this->emit('editLocation', $id);
    }

    public function render()
    {
        return view('livewire.tools.location.index',
        [
            'Locations' => Location::all(),
        ]);
    }
}
