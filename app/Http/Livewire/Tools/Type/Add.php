<?php

namespace App\Http\Livewire\Tools\Type;

use App\Models\Type;
use Livewire\Component;

class Add extends Component
{
    public $name;
    public $des;


    public function indexType()
    {
        $this->emit('indexType');
    }

    protected $rules = [
        'name' => 'required',
        'des' => 'nullable',
    ];

    protected $messages = [
        'name.required' => 'رجاء أدخل اسم النوع.',
    ];

    public function saveType()
    {
        $this->validate();
        $Type = new Type();

        $Type->name = $this->name;
        $Type->des = $this->des;

        $Type->save();

        $this->reset();

        session()->flash('message', 'تم إضافة النوع بنجاح!');
        $this->emit('indexType');
    }

    public function render()
    {
        return view('livewire.tools.type.add');
    }
}
