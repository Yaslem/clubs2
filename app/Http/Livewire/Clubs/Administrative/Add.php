<?php

namespace App\Http\Livewire\Clubs\Administrative;

use App\Models\Administrative;
use App\Models\Club;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Add extends Component
{
    public $club, $user_id, $administrative_id, $deputy_id;

    protected $listeners = ['addManagement'];

    public function indexManagement()
    {
        $this->emit('indexManagement');
    }

    public function addManagement($id)
    {
        $this->club = $id;
    }

    protected $rules = [
        'user_id' => 'required',
        'administrative_id' => 'required',
    ];

    protected $messages = [
        'user_id.required' => 'رجاء أدخل اسم الإداري.',
        'administrative_id.required' => 'رجاء أدخل اسم الوظيفة.',
    ];

    public function saveAdministrative()
    {
        $this->validate();

        $club = Club::find($this->club);

        $club->clubManagement()->attach($this->user_id,
            [
                'deputy_id' => $this->deputy_id,
                'administrative_id' => $this->administrative_id,
            ]);
        $this->reset();
        session()->flash('message', 'تمت إضافة الإداري بنجاح!');
        $this->emit('indexManagement');

    }

    public function render()
    {
        return view('livewire.clubs.administrative.add',
        [
            'administratives' => Administrative::all(),
            'userManager' => User::where('role', 'مسؤول')->whereHas('ClubStatus', function (Builder $query) {
                $query->where('id', $this->club);
            })->whereDoesntHave('administratives')->get(),
            'usersDeputyr' => User::where('role', 'نائب')->whereHas('ClubStatus', function (Builder $query) {
                $query->where('id', $this->club);
            })->whereDoesntHave('userDeputy')->get(),
        ]);
    }
}
