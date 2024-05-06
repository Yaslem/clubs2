<?php

namespace App\Http\Livewire\Awards;

use App\Models\Award;
use App\Models\ReservationAward;
use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public $activityId, $award_id, $users, $status_award;

    public $showAwardIndex = true;
    public $addAward = false;
    public $ShowAwardUser = false;

    protected $listeners = ['showAward'];

    public function indexAward()
    {
        $this->emit('indexAward');
    }

    public function showAward($id)
    {
        $this->activityId = $id;

        $this->showAwardIndex = true;
        $this->addAward = false;
        $this->ShowAwardUser = false;
    }

//   Add Action

    public function addAward()
    {
        $this->addAward = true;
        $this->showAwardIndex= false;
        $this->ShowAwardUser = false;

        $this->emit('addAward', $this->activityId);
    }

    public function status_award($id)
    {
        if($this->status_award == true)
        {
            Award::find($id)->update(
                [
                    'status' => 'استلم',
                ]
            );
        }else{
            Award::find($id)->update(
                [
                    'status' => 'لم يستلم',
                ]
            );
        }
    }

    public function ShowAwardUser($id)
    {
        $this->ShowAwardUser = true;
        $this->addAward = false;
        $this->showAwardIndex= false;

        $this->emit('ShowAwardUser', $id, $this->activityId);

    }


    public function render()
    {
        return view('livewire.awards.show',
            [
                'award' => ReservationAward::with('award')->where('reservation_id', $this->activityId)->paginate(10),
            ]);
    }
}
