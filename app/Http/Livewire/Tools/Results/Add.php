<?php

namespace App\Http\Livewire\Tools\Results;

use App\Models\ActivityYear;
use App\Models\Club;
use App\Models\Results;
use App\Models\Type;
use Livewire\Component;

class Add extends Component
{
    public $club_id;
    public $number;
    public $result;
    public $manager_name;
    public $year_id;


    public function indexResults()
    {
        $this->emit('indexResults');
    }

    protected $rules = [
        'club_id' => 'required|integer',
        'number' => 'required|integer',
        'result' => 'required',
        'manager_name' => 'required',
        'year_id' => 'required|integer',
    ];

    protected $messages = [
        'club_id.required' => 'رجاء أدخل اسم النادي.',
        'club_id.integer' => 'يوجد خطأ اسم النادي.',
        'number.required' => 'رجاء أدخل رقم مرتبة النادي.',
        'number.integer' => 'يوجد خطأ رقم مرتبة النادي.',
        'result.required' => 'رجاء أدخل نتيجة النادي.',
        'manager_name.required' => 'رجاء أدخل اسم مدير النادي.',
        'year_id.required' => 'رجاء أدخل سنة النشاط.',
        'year_id.integer' => 'يوجد خطأ سنة النشاط.',
    ];

    public function saveResults()
    {
        $this->validate();

        Results::create([
            'number' => $this->number,
            'manager_name' => $this->manager_name,
            'result' => $this->result,
            'year_id' => $this->year_id,
            'club_id' => $this->club_id
        ]);
        $this->reset();
        session()->flash('message', 'تم إضافة النتيجة بنجاح!');
        $this->emit('indexResults');
    }

    public function render()
    {
        return view('livewire.tools.results.add', [
            'clubs' => Club::all(),
            'years' => ActivityYear::all(),
        ]);
    }
}
