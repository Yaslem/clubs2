<?php

namespace App\Http\Livewire\Attendees;

use App\Models\Attende;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Add extends Component
{
    public $activityId, $benefit, $lecturer, $attended, $utility, $suggestions;

    public function indexAttendees()
    {
        $this->emit('indexAttendees');
    }

    protected $listeners = ['addAttende'];


    public function addAttende($activityId)
    {
        $this->activityId = $activityId;
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

    public function saveAttend()
    {
        $this->validate();

        Attende::create(
            [
                'benefit' => $this->benefit,
                'lecturer' => $this->lecturer,
                'attended' => $this->attended,
                'utility' => $this->utility,
                'suggestions' => $this->suggestions,
                'reservation_id' => $this->activityId,
                'user_id' => Auth::user()->id,
            ]
        );
        $this->indexAttendees();
        session()->flash('message', 'تم التحضير بنجاح!');

    }

    public function render()
    {
        return view('livewire.attendees.add')
            ->extends('layouts.side')
            ->section('content');
    }
}
