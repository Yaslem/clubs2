<?php

namespace App\Http\Livewire\Attendees;

use App\Models\Attende;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Url extends Component
{
    public $activityId, $benefit, $lecturer, $attended, $utility, $suggestions;

    protected $listeners = ['addAttende'];

    public function mount($url){
        $urls = \App\Models\UrlActivity::where('url', $url)->first();

        if($urls){
            if($urls->is_open == true){
                $this->activityId = $urls->activity_id;
            }else{
                return redirect()->to('/');
            }

        }else{
            return redirect()->to('/');
        }
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
        return redirect()->to('/attends');

    }

    public function render()
    {
        return view('livewire.attendees.addUrl')
            ->extends('layouts.side')
            ->section('content');
    }
}
