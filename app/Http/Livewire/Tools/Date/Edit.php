<?php

namespace App\Http\Livewire\Tools\Date;

use App\Models\Date;
use Livewire\Component;

class Edit extends Component
{
    public $dateId, $start, $end, $notes;

    protected $listeners = ['editDate' => 'editDate'];

    public function editDate($id)
    {
        $this->dateId = $id;
        $date = Date::where('id', $this->dateId)->first();
        $this->start = $date->start;
        $this->end = $date->end;
        $this->notes = $date->notes;
    }


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
        Date::where('id', $this->dateId)->update(
            [
                'start' => $this->start,
                'end' => $this->end,
                'notes' => $this->notes,
            ]
        );

        $this->reset();

        session()->flash('message', 'تم تحديث التاريخ بنجاح!');
        $this->emit('indexDate');
    }

    public function render()
    {
        return view('livewire.tools.date.edit');
    }
}
