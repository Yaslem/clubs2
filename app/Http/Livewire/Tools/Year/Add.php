<?php

namespace App\Http\Livewire\Tools\Year;

use App\Models\ActivityYear;
use Livewire\Component;

class Add extends Component
{
    public $year;
    public $notes;


    public function indexYear()
    {
        $this->emit('indexYear');
    }

    protected $rules = [
        'year' => 'required|date',
        'notes' => 'nullable',
    ];

    protected $messages = [
        'yera.required' => 'السنة مطلوبة.',
    ];

    public function saveYear()
    {
        $this->validate();
        ActivityYear::create([
            'year' => $this->year,
            'notes' => $this->notes,
        ]);

        $this->reset();

        session()->flash('message', 'تم إضافة السنة بنجاح!');
        $this->emit('indexYear');
    }
    public function render()
    {
        return view('livewire.tools.year.add');
    }
}
