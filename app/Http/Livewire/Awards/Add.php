<?php

namespace App\Http\Livewire\Awards;

use App\Models\Award;
use App\Models\ReservationAward;
use App\Models\TypeAwards;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Add extends Component
{
    public $activityId, $activity_id, $coordinator, $user_id, $award_id;

    public function indexAward()
    {
        $this->emit('showAwards', $this->activity_id);
    }

    protected $listeners = ['addAward'];

    public function addAward($activityId)
    {
        $activityId = ReservationAward::where('reservation_id', $activityId)->get();
        foreach ($activityId as $value)
        {
            $this->activityId = $value->id;
            $this->activity_id = $value->reservation_id;
        }
    }

    protected $rules = [
        'award_id' => 'required',
        'user_id' => 'required',
        'coordinator' => 'required',
    ];

    protected $messages = [
        'award_id.required' => 'اسم الجائزة مطلوب.',
        'user_id.required' => 'اسم الطالب مطلوب.',
        'coordinator.required' => 'اسم المنسق مطلوب.',
    ];

    public function saveAward()
    {
        $this->validate();

        $award = Award::where('reservation_award_id', $this->activityId)->where('user_id', $this->user_id)->first();
        if(!is_null($award)){
            session()->flash('error', 'هذه الجائزة موجودة بالفعل!');
        }else{
            Award::create(
                [
                    'coordinator' => $this->coordinator,
                    'award_id' => $this->award_id,
                    'user_id' => $this->user_id,
                    'reservation_award_id' => $this->activityId,
                ]
            );
//            $this->reset();
            $this->indexAward();
            session()->flash('message', 'تم إضافة الجائزة بنجاح!');
        }


    }

    public function render()
    {
        return view('livewire.awards.add',
            [
                'users' =>  User::whereHas('attendees', function (Builder $query) {
                    $query->where('reservation_id', $this->activity_id);
                })->get(),
                'coordinatorAll' => User::where('role', 'منسق')->get(),
                'typeAwards' => TypeAwards::all(),
            ])
            ->extends('layouts.side')
            ->section('content');
    }
}
