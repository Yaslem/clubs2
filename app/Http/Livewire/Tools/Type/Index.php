<?php

namespace App\Http\Livewire\Tools\Type;

use App\Models\Type;
use Livewire\Component;

class Index extends Component
{
    public $Types;

    protected $listeners = [
        'showType' => 'mount',
        'indexType' => 'indexType',
    ];

    public function mount()
    {
        $this->Types = Type::all();
    }

    public $indexType = true;
    public $showType = false;
    public $addType = false;
    public $editType = false;

    public function indexTools()
    {
        $this->emit('indexTools');
    }


    public function indexType()
    {
        $this->indexType = true;
        $this->showType = false;
        $this->editType = false;
        $this->addType = false;
    }

    public function addType()
    {
        $this->addType = true;
        $this->indexType = false;
        $this->showType = false;
        $this->editType = false;
    }

    public function editType($id)
    {
        $this->editType = true;
        $this->indexType = false;
        $this->showType = false;
        $this->addType = false;

        $this->emit('editType', $id);
    }
    public function render()
    {
        return view('livewire.tools.type.index');
    }
}
