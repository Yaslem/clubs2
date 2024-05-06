<?php

namespace App\Http\Livewire\Activities;

use App\Models\Club;
use App\Models\Date;
use App\Models\Location;
use App\Models\Reservation;
use App\Models\Time;
use App\Models\Type;
use App\Models\User;
use App\Notifications\NewActivity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class Add extends Component
{

//Properties

    public $title, $location_id, $from, $to, $presenter, $is_share, $date, $notes, $status, $hospitality, $projector, $club_id, $type_id;
//   Rules

    protected $rules = [
        'title' => 'required',
        'date' =>  ['required', 'date'],
        'from' => ['required'],
        'to' => ['required'],
        'presenter' => 'required',
        'hospitality' => 'required',
        'projector' => 'required',
        'location_id' => 'required',
        'type_id' => 'required',
        'club_id' => 'required',
        'status' => 'nullable',
        'is_share' => 'required',
        'notes' => 'nullable',
    ];

    protected $messages = [
        'title.required' => 'العنوان مطلوب.',
        'is_share.required' => 'حالة الاشتراك مطلوب.',
        'date.required' => 'التاريخ مطلوب.',
        'date.date' => 'يجب أن يكون التاريخ تاريخا صحيحا.',
        'from.required' => 'بداية الوقت مطلوبة.',
        'to.required' => 'نهاية الوقت مطلوبة.',
        'presenter.required' => 'اسم المقدم مطلوب.',
        'status.required' => 'حالة الحجز مطلوبة.',
        'hospitality.required' => 'تحديد الضيافة مطلوب.',
        'projector.required' => 'تحديد البروجكتر مطلوب.',
        'location_id.required' => 'تحديد الموقع مطلوب.',
        'type_id.required' => 'تحديد نوع الفعالية مطلوب.',
        'club_id.required' => 'تحديد اسم النادي مطلوب.',
    ];

//   Actions

    public $indexActivity = false;

//   Store Action


    public function store()
    {
        $existActivity = Reservation::where('location_id', $this->location_id)
        ->where('date', $this->date)
        ->where('from', $this->from)
        ->where('to', $this->to)->first();
        $this->validate();

        if($existActivity == null)
        {
            if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
            {
                $status = $this->status;
            }else
            {
                $status = 'تم الطلب';
            }

            $activty = Reservation::create(
                [
                    'title'       => $this->title,
                    'date'        =>  $this->date,
                    'from'        => $this->from,
                    'to'          => $this->to,
                    'presenter'   => $this->presenter,
                    'hospitality' => $this->hospitality,
                    'projector'   => $this->projector,
                    'location_id' => $this->location_id,
                    'type_id'     => $this->type_id,
                    'club_id'     => $this->club_id,
                    'status'      => $status,
                    'is_share'      => $this->is_share,
                    'notes'       => $this->notes,
                ]
            );

            $manager = $activty->club->clubManager;
            $admins = User::where('role', 'منسق')->orWhere('role', 'مدير الموقع')->orWhere('role', 'رئيس')->get();
            Notification::send($admins, new NewActivity($activty, Auth::user()));
            Notification::send($manager, new NewActivity($activty, Auth::user()));

            $this->emit('notification');
            $this->emit('IconNotifications');

            $this->reset();

            session()->flash('message', 'تم إضافة الحجز بنجاح!');
            $this->emit('indexActivity');

        }else{
            session()->flash('error', 'توجد فعالية محجوزة في نفس الوقت والمكان.');
            $this->emit('indexActivity');
        }
    }

//   Index Action

    public function indexActivity()
    {
        $this->indexActivity = true;
        $this->emit('indexActivity');
    }

    public function render()
    {
        return view('livewire.activities.add',
            [
                'types' => Type::all(),
                'locations' => Location::all(),
                'dates' => Date::all(),
                'times' => Time::all(),
                'clubs' => Club::where('id', '!=', '1')->get(),
            ])
            ->extends('layouts.side')
            ->section('title', 'Show Posts')
            ->section('content');
    }
}
