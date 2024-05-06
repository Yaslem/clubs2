<?php

namespace App\Http\Livewire\Tools\Countries;

use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $listeners = [
        'showCountry' => 'render',
        'indexCountry' => 'indexCountry',
    ];

    public $indexCountry = true;
    public $showCountry = false;
    public $addCountry = false;
    public $editCountry = false;

    public function indexTools()
    {
        $this->emit('indexTools');
    }


    public function indexCountry()
    {
        $this->indexCountry = true;
        $this->showCountry = false;
        $this->editCountry = false;
        $this->addCountry = false;
    }

    public function addCountry()
    {
        $this->addCountry = true;
        $this->indexCountry = false;
        $this->showCountry = false;
        $this->editCountry = false;
    }

    public function editCountry($id)
    {
        $this->editCountry = true;
        $this->indexCountry = false;
        $this->showCountry = false;
        $this->addCountry = false;

        $this->emit('editCountry', $id);
    }

    public function willDeleteCountry($id)
    {
        Country::find($id)->delete();
        session()->flash('message', 'تم حذف الجنسية بنجاح!');
    }

    public function render()
    {
        return view('livewire.tools.countries.index',
        [
            'countries' => Country::paginate(10),
        ]);
    }
}
