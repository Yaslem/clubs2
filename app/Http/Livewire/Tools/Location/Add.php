<?php

namespace App\Http\Livewire\Tools\Location;

use App\Models\Location;
use Livewire\Component;

class Add extends Component
{
    public $name;
    public $des;


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
        $Location = new Location();

        $Location->name = $this->name;
        $Location->des = $this->des;

        $Location->save();

        $this->reset();

        session()->flash('message', 'تم إضافة الموقع بنجاح!');
        $this->emit('indexLocation');
    }

    public function render()
    {
        return view('livewire.tools.location.add');
    }
}
