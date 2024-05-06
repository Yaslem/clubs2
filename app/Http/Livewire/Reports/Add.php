<?php

namespace App\Http\Livewire\Reports;

use App\Models\Club;
use App\Models\Report;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Traits\ImageUploadTrait;

class Add extends Component
{
    use WithFileUploads, ImageUploadTrait;

    public $reservation_id, $number_of_attendees, $images = [], $summary, $notes, $reports;

    public function indexReports()
    {
        $this->emit('indexReports');
    }

    public function mount(Report $report)
    {
        $this->reports = $report;
    }

    protected $rules =
        [
            'reservation_id' => ['required'],
            'number_of_attendees' => ['required', 'integer'],
            'images' => ['required', 'max:1024'],
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
        'images.image' => 'يجب أن تكون صور الفعالية صورا.',
        'images.*.max' => 'رجاء صغر الصورة، أقصى حجم لرفع الصورة هو 1 ميغابايت',
    ];

    public function store()
    {
        $this->validate();

        $activity = Reservation::where('id', $this->reservation_id)->first();

        $images = $this->uploadImages('files', 'reports', $this->images);

        $img = json_encode($images);

        $this->reports->create(
            [
                'summary' => $this->summary,
                'title' => $activity->title,
                'club_id' => $activity->club->id,
                'location_id' => $activity->location->id,
                'type_id' => $activity->type->id,
                'images' => $img,
                'notes' => $this->notes,
                'number_of_attendees' => $this->number_of_attendees,
                'reservation_id' => $this->reservation_id,
                'user_id' => Auth::user()->id,
            ]
        );

        $this->reset();

        session()->flash('message', 'تمت إضافة التقرير بنجاح!');
        $this->emit('indexReports');
    }


    public function render()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            return view('livewire.reports.add',
                [
                    'reservations' => Reservation::all(),
                ]
            );
        }else
        {
            return view('livewire.reports.add',
                [
                    'reservations' => Reservation::whereHas('club', function (Builder $query) {
                        $query->where('id', Auth::user()->ClubStatus->id);
                    })->get(),
                ]
            );
        }
    }
}
