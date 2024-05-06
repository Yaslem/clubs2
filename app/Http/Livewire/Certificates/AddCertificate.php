<?php

namespace App\Http\Livewire\Certificates;

use App\Models\Reservation;
use App\Models\ReservationCertificate;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddCertificate extends Component
{
    public $activities, $title, $activityId;

    public function index()
    {
        $this->emit('indexCertificate');
    }

    public function rules()
    {
        return [
            'activityId' => 'required',
        ];
    }

    protected $messages = [
        'activityId.required' => 'رجاء أدخل عنوان الفعالية.',
    ];

    public function saveActivity()
    {
        $this->validate();
        $act = ReservationCertificate::create(
            [
                'reservation_id' => $this->activityId,
            ]
        );
        $this->reset();

        session()->flash('message', 'تم إضافة الشهادة بناح!');
        $this->emit('indexCertificate');
    }

    public function mount()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            $this->activities = Reservation::whereDoesntHave('certificates')->get(['id', 'title', 'club_id']);

        }else
        {
            $this->activities = Reservation::whereDoesntHave('certificates')->whereHas('club', function (Builder $query) {
                $query->where('id', Auth::user()->ClubStatus->id);
            })->get(['id', 'title']);

        }

    }

    public function render()
    {
        return view('livewire.certificates.add-certificate',
        [
            'activities' => $this->activities,
        ]);
    }
}
