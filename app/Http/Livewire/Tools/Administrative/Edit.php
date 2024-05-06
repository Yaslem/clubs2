<?php

namespace App\Http\Livewire\Tools\Administrative;

use App\Models\Administrative;
use Livewire\Component;

class Edit extends Component
{
    public $AdministrativeId, $Administrative, $name;

    protected $listeners = ['editAdministrative' => 'editAdministrative'];

    public function editAdministrative(Administrative $administrative)
    {
        $this->Administrative = $administrative;
        $this->AdministrativeId = $this->Administrative->id;
        $this->name = $this->Administrative->name;
    }


    public function indexAdministrative()
    {
        $this->emit('indexAdministrative');
    }

    protected $rules = [
        'name' => 'required',
    ];

    protected $messages = [
        'name.required' => 'رجاء أدخل اسم الوظيفة.',
    ];

    public function saveAdministrative()
    {
        $this->validate();
        $this->Administrative::find($this->AdministrativeId)->update(
            [
                'name' => $this->name,
            ]
        );

        $this->reset();

        session()->flash('message', 'تم تحديث الوظيفة بنجاح!');
        $this->emit('indexAdministrative');
    }

    public function render()
    {
        return view('livewire.tools.administrative.edit');
    }
}
