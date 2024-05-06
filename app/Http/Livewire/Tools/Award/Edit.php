<?php

namespace App\Http\Livewire\Tools\Award;

use App\Models\TypeAwards;
use Livewire\Component;

class Edit extends Component
{
    public $AwardId, $name, $des;

    protected $listeners = ['editAward' => 'editAward'];

    public function editAward($id)
    {
        $this->AwardId = $id;
        $Award = TypeAwards::where('id', $this->AwardId)->first();
        $this->name = $Award->name;
        $this->des = $Award->des;
    }


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
        TypeAwards::where('id', $this->AwardId)->update(
            [
                'name' => $this->name,
                'des' => $this->des,
            ]
        );

        $this->reset();

        session()->flash('message', 'تم تحديث الجائزة بنجاح!');
        $this->emit('indexAward');
    }

    public function render()
    {
        return view('livewire.tools.award.edit');
    }
}
