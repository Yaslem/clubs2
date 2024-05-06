<?php

namespace App\Http\Livewire\Activities;

use Alkoumi\LaravelHijriDate\Hijri;
use App\Models\Club;
use App\Models\Date;
use App\Models\Location;
use App\Models\Reservation;
use App\Models\Time;
use App\Models\Type;
use App\Models\User;
use App\Notifications\TrueActivity;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Telegram\Bot\Laravel\Facades\Telegram;

class Edit extends Component
{

//Properties

    public $title, $location_id, $from, $to, $is_share, $presenter, $date, $notes, $status, $hospitality, $projector, $club_id, $type_id;
    public $activity;
    public $ActivityId;
    public $club_idActivity;

//   Listeners

    protected $listeners = ['EditActivity'];

//   Get Activity

    public function EditActivity($id)
    {
        $this->ActivityId = $id;
        $activity = Reservation::with(['club', 'location', 'type'])->find($id);

        $this->activity = $activity;

        $this->title = $this->activity->title;
        $this->location_id = $this->activity->location_id;
        $this->from = $this->activity->from;
        $this->to = $this->activity->to;
        $this->presenter = $this->activity->presenter;
        $this->date = $this->activity->date;
        $this->notes = $this->activity->notes;
        $this->status = $this->activity->status;
        $this->hospitality = $this->activity->hospitality;
        $this->projector = $this->activity->projector;
        $this->club_id = $this->activity->club->name;
        $this->type_id = $this->activity->type_id;
        $this->club_idActivity = $this->activity->club_id;
        $this->is_share = $this->activity->is_share;

    }

//   Actions

    public $indexActivity = false;

//   Store Action

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
        'club_idActivity' => 'required',
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
        'hospitality.required' => 'تحديد الضيافة مطلوب.',
        'projector.required' => 'تحديد البروجكتر مطلوب.',
        'location_id.required' => 'تحديد الموقع مطلوب.',
        'type_id.required' => 'تحديد نوع الفعالية مطلوب.',
        'club_idActivity.required' => 'تحديد اسم النادي مطلوب.',
    ];


    public function store()
    {
        $this->validate();
        Reservation::find($this->ActivityId)->update(
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
                'club_id'     => $this->club_idActivity,
                'status'      => $this->status,
                'is_share'      => $this->is_share,
                'notes'       => $this->notes,
            ]
        );

        $activity_bot = Reservation::find($this->ActivityId);

        if($this->status === 'تم الحجز'){
            if($activity_bot){

                $club = Club::where('id', $activity_bot->club_id)->first();
                $admins = User::where('role', 'منسق')->orWhere('role', 'مدير الموقع')->orWhere('role', 'رئيس')->get();
                Notification::send($admins, new TrueActivity($activity_bot, Auth::user()));
                Notification::send($club->clubManager, new TrueActivity($activity_bot, Auth::user()));

                $this->emit('notification');
                $this->emit('IconNotifications');

                $find = array ("Sat", "Sun", "Mon", "Tue", "Wed" , "Thu", "Fri");
                $replace = array ("السبت", "الأحد", "الاثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة");

                $activity_date = Carbon::parse($activity_bot->date);

                Telegram::sendMessage([
                    'chat_id'    => '-1001898876353',
                    'parse_mode' => 'HTML',
                    'text' => '🔖 '.$activity_bot->type->name.' 🔖
ضمن فعـــاليات وأنشــطة
وكالة الأنــشــطة الطلابيــة
يســر '.$activity_bot->club->name.'
بعمادة شؤون الطــــــلاب
دعــوتـــكـــم لــحضـــــور


   💡 '.$activity_bot->title.'💡


يوم '.str_replace($find, $replace, date('D', strtotime($activity_bot->date))).'
🗓️ التاريخ '.Hijri::Date('Y-m-d', $activity_date).'
⏰ الساعة '.$activity_bot->from.' مساءً
'.$activity_bot->location->name.'

#عـــمادة_شؤون_الطلاب
#وكالة_الأنشطة_الطلابية
#'.str_replace(' ','_', $activity_bot->club->name).' ',
                ]);
            }
        }

        session()->flash('message', 'تم تحديث الحجز بنجاح!');
        $this->emit('indexActivity');
    }

//   Index Action

    public function indexActivity()
    {
        $this->indexActivity = true;
        $this->emit('indexActivity');
    }

    public function render()
    {
        return view('livewire.activities.edit',
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
