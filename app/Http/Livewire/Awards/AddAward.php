<?php

namespace App\Http\Livewire\Awards;

use App\Models\Reservation;
use App\Models\ReservationAward;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddAward extends Component
{
    public $activities, $title, $activityId;

    public function indexAward()
    {
        $this->emit('indexAward');
    }

    public function rules()
    {
        return [
            'activityId' => 'required',
        ];
    }

    protected $messages = [
        'activityId.required' => 'الرجاء أدخل عنوان الفعالية.',
    ];

    public function saveAward()
    {
        $this->validate();
        ReservationAward::create(
            [
                'reservation_id' => $this->activityId,
            ]
        );
        $this->reset();

        session()->flash('message', 'تمت إضافة الجائزة بناح!');
        $this->emit('indexAward');
    }

    public function mount()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            $this->activities = Reservation::whereDoesntHave('award')->where('status', 'أقيمت')->get();
        }else
        {
            $this->activities = Reservation::whereDoesntHave('award')->whereHas('club', function (Builder $query) {
                $query->where('id', Auth::user()->ClubStatus->id);
            })->where('status', 'أقيمت')->get();
        }

    }

    public function render()
    {
        return view('livewire.awards.add-award',
            [
                'activities' => $this->activities,
            ]);
    }
}
