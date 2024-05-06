<?php

namespace App\Http\Livewire\Attendees;

use App\Models\Attende;
use Livewire\Component;

class Edit extends Component
{

    public $attende_id, $benefit, $lecturer, $attended, $utility, $suggestions;

    public function showAttendees(){
        $this->emit('showAttendees');
    }

    protected $listeners = ['updateAttendees'];

    public function updateAttendees($id){
        $this->attende_id = $id;
        $attende = Attende::where('id', $this->attende_id)->first();

        $this->benefit = $attende->benefit;
        $this->lecturer = $attende->lecturer;
        $this->attended = $attende->attended;
        $this->utility = $attende->utility;
        $this->suggestions = $attende->suggestions;
    }


    protected $rules = [
        'benefit' => 'required',
        'lecturer' => 'required',
        'attended' => 'required',
        'utility' => 'nullable',
        'suggestions' => 'nullable',
    ];

    protected $messages = [
        'benefit.required' => 'تقييم الفعالية مطلوب.',
        'lecturer.required' => 'تقييم المقدم مطلوب.',
        'attended.required' => 'تعيين مدة حضورك مطلوب.',
    ];

    public function updateAttend()
    {
        $this->validate();

        Attende::find($this->attende_id)->update(
            [
                'benefit' => $this->benefit,
                'lecturer' => $this->lecturer,
                'attended' => $this->attended,
                'utility' => $this->utility,
                'suggestions' => $this->suggestions,
            ]
        );
        $this->showAttendees();
        session()->flash('message', 'تم تحديث بنجاح!');

    }
    public function render()
    {
        return view('livewire.attendees.edit');
    }
}
