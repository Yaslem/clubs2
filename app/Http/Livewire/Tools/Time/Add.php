<?php

namespace App\Http\Livewire\Tools\Time;

use App\Models\Time;
use Livewire\Component;

class Add extends Component
{
    public $start;
    public $end;
    public $notes;


    public function indexTime()
    {
        $this->emit('indexTime');
    }

    protected $rules = [
        'start' => 'required',
        'end' => 'required',
        'notes' => 'nullable',
    ];

    protected $messages = [
        'start.required' => 'بداية الوقت مطلوبة.',
        'end.required' => 'نهاية الوقت مطلوبة.',
    ];

    public function saveTime()
    {
        $this->validate();
        $time = new Time();

        $time->start = $this->start;
        $time->end = $this->end;
        $time->notes = $this->notes;

        $time->save();

        $this->reset();

        session()->flash('message', 'تم إضافة الوقت بنجاح!');
        $this->emit('indexTime');
    }

    public function render()
    {
        return view('livewire.tools.time.add');
    }
}
