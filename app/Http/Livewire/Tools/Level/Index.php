<?php

namespace App\Http\Livewire\Tools\Level;

use App\Models\Level;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'showLevel' => 'render',
        'indexLevel' => 'indexLevel',
    ];

    public $indexLevel = true;
    public $showLevel = false;
    public $addLevel = false;
    public $editLevel = false;

    public function indexTools()
    {
        $this->emit('indexTools');
    }


    public function indexLevel()
    {
        $this->indexLevel = true;
        $this->showLevel = false;
        $this->editLevel = false;
        $this->addLevel = false;
    }

    public function addLevel()
    {
        $this->addLevel = true;
        $this->indexLevel = false;
        $this->showLevel = false;
        $this->editLevel = false;
    }

    public function editLevel($id)
    {
        $this->editLevel = true;
        $this->indexLevel = false;
        $this->showLevel = false;
        $this->addLevel = false;

        $this->emit('editLevel', $id);
    }

    public function willDeleteLevel($id)
    {
        Level::find($id)->delete();
        session()->flash('message', 'تم حذف المستوى بنجاح!');
    }

    public function render()
    {
        return view('livewire.tools.level.index',
        [
            'levels' => Level::all(),
        ]);
    }
}
