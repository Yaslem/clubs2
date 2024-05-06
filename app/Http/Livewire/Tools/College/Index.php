<?php

namespace App\Http\Livewire\Tools\College;

use App\Models\College;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'showCollege' => 'render',
        'indexCollege' => 'indexCollege',
    ];

    public $indexCollege = true;
    public $showCollege = false;
    public $addCollege = false;
    public $editCollege = false;

    public function indexTools()
    {
        $this->emit('indexTools');
    }


    public function indexCollege()
    {
        $this->indexCollege = true;
        $this->showCollege = false;
        $this->editCollege = false;
        $this->addCollege = false;
    }

    public function addCollege()
    {
        $this->addCollege = true;
        $this->indexCollege = false;
        $this->showCollege = false;
        $this->editCollege = false;
    }

    public function editCollege($id)
    {
        $this->editCollege = true;
        $this->indexCollege = false;
        $this->showCollege = false;
        $this->addCollege = false;

        $this->emit('editCollege', $id);
    }

    public function willDeleteCollege($id)
    {
        College::find($id)->delete();
        session()->flash('message', 'تم حذف الكلية بنجاح!');
    }

    public function render()
    {
        return view('livewire.tools.college.index',
        [
            'colleges' => College::all(),
        ]);
    }
}
