<?php

namespace App\Http\Livewire\Awards;

use App\Models\Award;
use App\Models\User;
use Livewire\Component;

class ShowUser extends Component
{
    public $status_award, $activityId, $user_id;

    protected $listeners = ['ShowAwardUser'];

    public function showAward()
    {
        $this->emit('showAward', $this->activityId);
    }

    public function ShowAwardUser($id, $activity)
    {
        $this->activityId = $activity;
        $this->user_id = $id;

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


    public function render()
    {

        return view('livewire.awards.show-user',
            [
                'user' => User::with('awards')->where('id', $this->user_id)->first(),
            ]);
    }
}
