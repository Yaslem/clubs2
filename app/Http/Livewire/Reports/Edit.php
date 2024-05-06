<?php

namespace App\Http\Livewire\Reports;

use App\Models\Report;
use App\Models\Reservation;
use App\Traits\ImageUploadTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads, ImageUploadTrait;

    public $reservation_id, $number_of_attendees, $images = [], $summary, $notes, $reports, $reportId;

    public $listeners = ['EditReport' => 'mount'];

    public function mount(Report $report)
    {
        $this->reports = $report;
        $this->reportId = $report->id;
        $this->number_of_attendees = $this->reports->number_of_attendees;
        $this->summary = $this->reports->summary;
        $this->notes = $this->reports->notes;
        $this->reservation_id = $this->reports->reservation_id;
        $this->images = $this->reports->images;
    }

    public function indexReports()
    {
        $this->emit('indexReports');
    }

    protected $rules =
        [
            'reservation_id' => ['required', 'integer'],
            'number_of_attendees' => ['required', 'integer'],
            'summary' => ['required', 'string'],
            'notes' => ['nullable', 'string'],
        ];

    protected $messages = [
        'reservation_id.required' => 'الرجاء إدخال عنوان الفعالية.',
        'number_of_attendees.integer' => 'يجب أن يكون عدد الحضور رقما صحيحا.',
        'number_of_attendees.required' => 'الرجاء إدخال عدد حضور الفعالية.',
        'images.required' => 'الرجاء إدخال صور الفعالية.',
        'summary.required' => 'الرجاء إدخال ملخص الفعالية.',
        'summary.string' => 'يجب أن يكون ملخص الفعالية نصا.',
        'notes.string' => 'يجب أن تكون ملاحظات الفعالية نصا.',
    ];

    public function updateReport()
    {
        $this->validate();

        $activity = Reservation::where('id', $this->reservation_id)->first();

        $this->reports->find($this->reportId)->update(
            [
                'summary' => $this->summary,
                'title' => $activity->title,
                'club_id' => $activity->club->id,
                'location_id' => $activity->location->id,
                'type_id' => $activity->type->id,
                'notes' => $this->notes,
                'number_of_attendees' => $this->number_of_attendees,
                'reservation_id' => $this->reservation_id,
                'user_id' => Auth::user()->id,
            ]
        );

        $this->reset();

        session()->flash('message', 'تم تحديث التقرير بنجاح!');
        $this->emit('indexReports');
    }


    public function render()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            return view('livewire.reports.edit',
                [
                    'reservations' => Reservation::all(),
                ]
            );
        }else
        {
            return view('livewire.reports.edit',
                [
                    'reservations' => Reservation::whereHas('club', function (Builder $query) {
                        $query->where('id', Auth::user()->ClubStatus->id);
                    })->get(),
                ]
            );
        }
    }
}
