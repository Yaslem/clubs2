<?php

namespace App\Http\Livewire\Tools\Location;

use App\Models\Location;
use Livewire\Component;

class Edit extends Component
{
    public $LocationId, $name, $des;

    protected $listeners = ['editLocation' => 'editLocation'];

    public function editLocation($id)
    {
        $this->LocationId = $id;
        $Location = Location::where('id', $this->LocationId)->first();
        $this->name = $Location->name;
        $this->des = $Location->des;
    }


    public function indexLocation()
    {
        $this->emit('indexLocation');
    }

    protected $rules = [
        'name' => 'required',
        'des' => 'nullable',
    ];

    protected $messages = [
        'name.required' => 'رجاء أدخل اسم الموقع.',
    ];

    public function saveLocation()
    {
        $this->validate();
        Location::where('id', $this->LocationId)->update(
            [
                'name' => $this->name,
                'des' => $this->des,
            ]
        );

        $this->reset();

        session()->flash('message', 'تم تحديث الموقع بنجاح!');
        $this->emit('indexLocation');
    }

    public function render()
    {
        return view('livewire.tools.location.edit');
    }
}
