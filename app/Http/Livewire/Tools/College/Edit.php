<?php

namespace App\Http\Livewire\Tools\College;

use App\Models\College;
use Livewire\Component;

class Edit extends Component
{
    public $CollegeId, $name, $code;

    protected $listeners = ['editCollege' => 'editCollege'];

    public function editCollege($id)
    {
        $this->CollegeId = $id;
        $College = College::where('id', $this->CollegeId)->first();
        $this->name = $College->name;
        $this->code = $College->code;
    }


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
        College::where('id', $this->CollegeId)->update(
            [
                'name' => $this->name,
                'code' => $this->code,
            ]
        );

        $this->reset();

        session()->flash('message', 'تم تحديث الكلية بنجاح!');
        $this->emit('indexCollege');
    }

    public function render()
    {
        return view('livewire.tools.college.edit');
    }
}
