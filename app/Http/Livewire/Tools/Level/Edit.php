<?php

namespace App\Http\Livewire\Tools\Level;

use App\Models\Level;
use Livewire\Component;

class Edit extends Component
{
    public $LevelId, $name, $code;

    protected $listeners = ['editLevel' => 'editLevel'];

    public function editLevel($id)
    {
        $this->LevelId = $id;
        $Level = Level::where('id', $this->LevelId)->first();
        $this->name = $Level->name;
        $this->code = $Level->code;
    }


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
        Level::where('id', $this->LevelId)->update(
            [
                'name' => $this->name,
                'code' => $this->code,
            ]
        );

        $this->reset();

        session()->flash('message', 'تم تحديث المستوى بنجاح!');
        $this->emit('indexLevel');
    }

    public function render()
    {
        return view('livewire.tools.level.edit');
    }
}
