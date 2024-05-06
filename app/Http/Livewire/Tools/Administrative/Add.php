<?php

namespace App\Http\Livewire\Tools\Administrative;

use App\Models\Administrative;
use Livewire\Component;

class Add extends Component
{
    public $name;


    public function indexAdministrative()
    {
        $this->emit('indexAdministrative');
    }

    protected $rules = [
        'name' => 'required',
    ];

    protected $messages = [
        'name.required' => 'رجاء أدخل اسم الوظيفة.',
    ];

    public function saveAdministrative()
    {
        $this->validate();
        $Administrative = new Administrative();

        $Administrative->name = $this->name;

        $Administrative->save();

        $this->reset();

        session()->flash('message', 'تمت إضافة الوظيفة بنجاح!');
        $this->emit('indexAdministrative');
    }

    public function render()
    {
        return view('livewire.tools.administrative.add');
    }
}
