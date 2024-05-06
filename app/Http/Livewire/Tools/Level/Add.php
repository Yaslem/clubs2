<?php

namespace App\Http\Livewire\Tools\Level;

use App\Models\Level;
use Livewire\Component;

class Add extends Component
{
    public $name;
    public $code;


    public function indexLevel()
    {
        $this->emit('indexLevel');
    }

    protected $rules = [
        'name' => 'required',
        'code' => 'required',
    ];

    protected $messages = [
        'name.required' => 'رجاء أدخل اسم المستوى.',
        'code.required' => 'رجاء أدخل رمز المستوى.',
    ];

    public function saveLevel()
    {
        $this->validate();
        $Level = new Level();

        $Level->name = $this->name;
        $Level->code = $this->code;

        $Level->save();

        $this->reset();

        session()->flash('message', 'تمت إضافة المستوى بنجاح!');
        $this->emit('indexLevel');
    }

    public function render()
    {
        return view('livewire.tools.level.add');
    }
}
