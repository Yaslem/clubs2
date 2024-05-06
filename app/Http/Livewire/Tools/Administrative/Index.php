<?php

namespace App\Http\Livewire\Tools\Administrative;

use App\Models\Administrative;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'showAdministrative' => 'render',
        'indexAdministrative' => 'indexAdministrative',
    ];

    public $indexAdministrative = true;
    public $showAdministrative = false;
    public $addAdministrative = false;
    public $editAdministrative = false;

    public function indexTools()
    {
        $this->emit('indexTools');
    }


    public function indexAdministrative()
    {
        $this->indexAdministrative = true;
        $this->showAdministrative = false;
        $this->editAdministrative = false;
        $this->addAdministrative = false;
    }

    public function addAdministrative()
    {
        $this->addAdministrative = true;
        $this->indexAdministrative = false;
        $this->showAdministrative = false;
        $this->editAdministrative = false;
    }

    public function editAdministrative($id)
    {
        $this->editAdministrative = true;
        $this->indexAdministrative = false;
        $this->showAdministrative = false;
        $this->addAdministrative = false;

        $this->emit('editAdministrative', $id);
    }

    public function willDeleteAdministrative($id)
    {
        Administrative::find($id)->delete();
        session()->flash('message', 'تم حذف الوظيفة بنجاح!');
    }

    public function render()
    {
        return view('livewire.tools.administrative.index',
            [
                'administratives' => Administrative::all(),
            ]);
    }
}
