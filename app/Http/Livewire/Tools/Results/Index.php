<?php

namespace App\Http\Livewire\Tools\Results;

use App\Models\Results;
use App\Models\Type;
use Livewire\Component;

class Index extends Component
{
    public $results;

    protected $listeners = [
        'showResults' => 'mount',
        'indexResults' => 'indexResults',
    ];

    public function mount()
    {
        $this->results = Results::all();
    }

    public $indexResults = true;
    public $showResults = false;
    public $addResults = false;
    public $editResults = false;

    public function indexTools()
    {
        $this->emit('indexTools');
    }


    public function indexResults()
    {
        $this->indexResults = true;
        $this->showResults = false;
        $this->editResults = false;
        $this->addResults = false;
    }

    public function addResults()
    {
        $this->addResults = true;
        $this->indexResults = false;
        $this->showResults = false;
        $this->editResults = false;
    }

    public function editResults($id)
    {
        $this->editResults = true;
        $this->indexResults = false;
        $this->showResults = false;
        $this->addResults = false;

        $this->emit('editResults', $id);
    }
    public function render()
    {
        return view('livewire.tools.results.index');
    }
}
