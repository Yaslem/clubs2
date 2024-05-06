<?php

namespace App\Http\Livewire\Clubs;

use App\Models\Club;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Subscribe extends Component
{
    public $clubs, $user, $clubsCount;

    public $userId;

    protected $listeners = ['ShowSubscribe'];

    public function ShowSubscribe($id)
    {
        $this->userId = $id;
        $this->user = User::with('ClubStatus')->where('id', $this->userId)->first();
        $clubs = Club::whereHas('users', function (Builder $query) {
            $query->where('user_id', $this->userId);
        })->where('id', '!=', '1')->get();

        $this->clubs = $clubs;
        $this->clubsCount = $clubs->count() +1;


    }

    public function indexClubs()
    {
        $this->emit('indexClubs');
    }




    public function render()
    {
        return view('livewire.clubs.subscribe',
            [
                'clubs' => $this->clubs,
            ]
        );
    }
}
