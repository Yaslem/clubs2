<?php

namespace App\Http\Livewire\Tools\Date;

use App\Models\Date;
use Livewire\Component;

class Add extends Component
{
    public $start;
    public $end;
    public $notes;


    public function indexDate()
    {
        $this->emit('indexDate');
    }

    protected $rules = [
        'start' => 'required|date',
        'end' => 'required|date',
        'notes' => 'nullable',
    ];

    protected $messages = [
        'start.required' => 'بداية التاريخ مطلوبة.',
        'start.date' => 'يجب أن يكون المدخل تاريخا.',
        'end.date' => 'يجب أن يكون المدخل تاريخا.',
        'end.required' => 'نهاية التاريخ مطلوبة.',
    ];

    public function saveDate()
    {
        $this->validate();
        $date = new Date();

        $date->start = $this->start;
        $date->end = $this->end;
        $date->notes = $this->notes;

        $date->save();

        $this->reset();

        session()->flash('message', 'تم إضافة النوع بنجاح!');
        $this->emit('indexDate');
    }
    public function render()
    {
        return view('livewire.tools.date.add');
    }
}
