<?php

namespace App\Http\Livewire\Tools\Countries;

use App\Models\Country;
use Livewire\Component;

class Add extends Component
{
    public $name;
    public $code;


    public function indexCountry()
    {
        $this->emit('indexCountry');
    }

    protected $rules = [
        'name' => 'required',
        'code' => 'required',
    ];

    protected $messages = [
        'name.required' => 'رجاء أدخل اسم الدولة.',
        'code.required' => 'رجاء أدخل رمز الدولة.',
    ];

    public function saveCountry()
    {
        $this->validate();
        $Country = new Country();

        $Country->name = $this->name;
        $Country->code = $this->code;

        $Country->save();

        $this->reset();

        session()->flash('message', 'تمت إضافة الدولة بنجاح!');
        $this->emit('indexCountry');
    }

    public function render()
    {
        return view('livewire.tools.countries.add');
    }
}
