<?php

namespace App\Http\Livewire\ClubsReports;

use App\Imports\ClubPlansImport;
use App\Models\ActivityYear;
use App\Models\Club;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class AddClubPlans extends Component
{
    use WithFileUploads;

    public $club_id, $year_id, $file, $status;

    public function back(){
        $this->emit('clubPlans');
    }

    public function rules(){
        return [
            'club_id' => 'required',
            'year_id' => 'required',
            'file' => 'required',
            'status' => 'required',
        ];
    }

    public function messages(){
        return [
            'club_id.required' => 'اسم النادي مطلوب.',
            'year_id.required' => 'السنة مطلوبة.',
            'file.required' => 'الملف مطلوب.',
            'status.required' => 'الحالة مطلوبة.',
        ];
    }

    public function save()
    {
        $this->validate();
        Excel::import(new ClubPlansImport($this->club_id, $this->year_id, $this->status), $this->file);
    }
    public function render()
    {
        return view('livewire.clubs-reports.add-club-plans',
        [
            'clubs' => Club::all(),
            'years' => ActivityYear::all(),
        ]);
    }
}
