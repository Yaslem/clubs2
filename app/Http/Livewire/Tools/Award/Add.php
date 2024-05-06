<?php

namespace App\Http\Livewire\Tools\Award;

use App\Models\TypeAwards;
use Livewire\Component;

class Add extends Component
{
    public $name;
    public $des;


    public function indexAward()
    {
        $this->emit('indexAward');
    }

    protected $rules = [
        'name' => 'required',
        'des' => 'nullable',
    ];

    protected $messages = [
        'name.required' => 'رجاء أدخل اسم الجائزة.',
    ];

    public function saveAward()
    {
        $this->validate();
        $Award = new TypeAwards();

        $Award->name = $this->name;
        $Award->des = $this->des;

        $Award->save();

        $this->reset();

        session()->flash('message', 'تمت إضافة الجائزة بنجاح!');
        $this->emit('indexAward');
    }

    public function render()
    {
        return view('livewire.tools.award.add');
    }
}
