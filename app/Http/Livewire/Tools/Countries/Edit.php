<?php

namespace App\Http\Livewire\Tools\Countries;

use App\Models\Country;
use Livewire\Component;

class Edit extends Component
{
    public $CountryId, $name, $code;

    protected $listeners = ['editCountry' => 'editCountry'];

    public function editCountry($id)
    {
        $this->CountryId = $id;
        $Country = Country::where('id', $this->CountryId)->first();
        $this->name = $Country->name;
        $this->code = $Country->code;
    }


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
        Country::where('id', $this->CountryId)->update(
            [
                'name' => $this->name,
                'code' => $this->code,
            ]
        );

        $this->reset();

        session()->flash('message', 'تم تحديث الدولة بنجاح!');
        $this->emit('indexCountry');
    }

    public function render()
    {
        return view('livewire.tools.countries.edit');
    }
}
