<?php

namespace App\Http\Livewire\Tools\Award;

use App\Models\TypeAwards;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'showAward' => 'render',
        'indexAward' => 'indexAward',
    ];

    public $indexAward = true;
    public $showAward = false;
    public $addAward = false;
    public $editAward = false;

    public function indexTools()
    {
        $this->emit('indexTools');
    }


    public function indexAward()
    {
        $this->indexAward = true;
        $this->showAward = false;
        $this->editAward = false;
        $this->addAward = false;
    }

    public function addAward()
    {
        $this->addAward = true;
        $this->indexAward = false;
        $this->showAward = false;
        $this->editAward = false;
    }

    public function editAward($id)
    {
        $this->editAward = true;
        $this->indexAward = false;
        $this->showAward = false;
        $this->addAward = false;

        $this->emit('editAward', $id);
    }

    public function render()
    {
        return view('livewire.tools.award.index',
        [
            'awards' => TypeAwards::all(),
        ]);
    }
}
