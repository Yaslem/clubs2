<?php

namespace App\Http\Livewire\Tools\Time;

use App\Models\Time;
use Livewire\Component;

class Edit extends Component
{
    public $timeId, $start, $end, $notes;

    protected $listeners = ['editTime' => 'editTime'];

    public function editTime($id)
    {
        $this->timeId = $id;
        $time = Time::where('id', $this->timeId)->first();
        $this->start = $time->start;
        $this->end = $time->end;
        $this->notes = $time->notes;
    }


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
        Time::where('id', $this->timeId)->update(
            [
                'start' => $this->start,
                'end' => $this->end,
                'notes' => $this->notes,
            ]
        );

        $this->reset();

        session()->flash('message', 'تم تحديث الوقت بنجاح!');
        $this->emit('indexTime');
    }

    public function render()
    {
        return view('livewire.tools.time.edit');
    }
}
