<?php

namespace App\Http\Livewire\Tools\Type;

use App\Models\Type;
use Livewire\Component;

class Edit extends Component
{
    public $TypeId, $name, $des;

    protected $listeners = ['editType' => 'editType'];

    public function editType($id)
    {
        $this->TypeId = $id;
        $Type = Type::where('id', $this->TypeId)->first();
        $this->name = $Type->name;
        $this->des = $Type->des;
    }


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
        Type::where('id', $this->TypeId)->update(
            [
                'name' => $this->name,
                'des' => $this->des,
            ]
        );

        $this->reset();

        session()->flash('message', 'تم تحديث النوع بنجاح!');
        $this->emit('indexType');
    }

    public function render()
    {
        return view('livewire.tools.type.edit');
    }
}
