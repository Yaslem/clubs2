<?php

namespace App\Http\Livewire\Tools\College;

use App\Models\College;
use Livewire\Component;

class Add extends Component
{
    public $name;
    public $code;


    public function indexCollege()
    {
        $this->emit('indexCollege');
    }

    protected $rules = [
        'name' => 'required',
        'code' => 'required',
    ];

    protected $messages = [
        'name.required' => 'رجاء أدخل اسم الكلية.',
        'code.required' => 'رجاء أدخل رمز الكلية.',
    ];

    public function saveCollege()
    {
        $this->validate();
        $College = new College();

        $College->name = $this->name;
        $College->code = $this->code;

        $College->save();

        $this->reset();

        session()->flash('message', 'تمت إضافة الكلية بنجاح!');
        $this->emit('indexCollege');
    }

    public function render()
    {
        return view('livewire.tools.college.add');
    }
}
