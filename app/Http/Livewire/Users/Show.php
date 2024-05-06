<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;
    public $name, $username, $email, $number_of_whatsapp, $role, $membership_status, $club_id, $level_id, $college_id, $country_id, $avatar, $ID_Number, $useridManager;
    public $userId, $user;

    protected $listeners = ['ShowUser'];

    public function ShowUser($id)
    {
        $this->userId = $id;
        $user = User::with(['ClubStatus', 'level', 'country', 'college'])->find($this->userId);
        $this->user = $user;

        $this->name = $user->name;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->number_of_whatsapp = $user->number_of_whatsapp;
        $this->role = $user->role;
        $this->membership_status = $user->membership_status;
        $this->club_id = $this->getValue($user->ClubStatus,  'name');
        $this->level_id = $this->getValue($user->level,  'name');
        $this->college_id = $this->getValue($user->college,  'name');
        $this->country_id = $this->getValue($user->country,  'name');
        $this->ID_Number = $user->ID_Number;
        $this->useridManager = $user->id;

    }

    private function getValue($related, $name)
    {
        if($related)
        {
            return $related->$name;
        }else{
            return '---';
        }
    }

    public function indexUsers()
    {
        $this->emit('indexUsers');
    }

    public function downloadCertificate($certificate)
    {
        return Storage::disk('files')->download($certificate);
    }

    public function render()
    {

        return view('livewire.users.show', [
            'user' => $this->user,
        ]);
    }
}
