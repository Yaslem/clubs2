<?php

namespace App\Http\Livewire\Certificates;

use App\Http\Livewire\Profiles\Certificates;
use App\Models\ReservationCertificate;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Show extends Component
{
    public $certificates, $activityId, $certificate_id;

    public $showCertificate = true;
    public $ShowUserCertificate = false;
    public $addCertificate = false;

    public function indexCertificate()
    {
        $this->emit('indexCertificate');
    }

    protected $listeners = ['showCertificate', 'show'];

    public function show()
    {
        $this->showCertificate = true;
        $this->ShowUserCertificate = false;
        $this->addCertificate = false;
    }

    public function showCertificate($id)
    {
        $this->activityId = $id;
        $this->certificate_id = ReservationCertificate::with('certificate')->where('reservation_id', $this->activityId)->get();
        $this->certificates = ReservationCertificate::with('certificate')->where('reservation_id', $this->activityId)->get();

        $this->showCertificate = true;
        $this->addCertificate = false;
        $this->ShowUserCertificate = false;


    }

//   Edit Action

    public function ShowUserCertificate($id)
    {
        $this->ShowUserCertificate = true;
        $this->showCertificate = false;
        $this->addCertificate = false;

        $this->emit('ShowUserCertificate', $id);
    }



//   Add Action

    public function addCertificate($id)
    {
        $this->addCertificate = true;
        $this->ShowUserCertificate = false;
        $this->showCertificate= false;

        $this->emit('addCertificate', $id, $this->activityId);
    }

//   Add Download

    public function downloadCertificate($certificate)
    {
        return Storage::disk('files')->download($certificate);
    }

    public function render()
    {
        return view('livewire.certificates.show',
        [
            'certificate->id' => $this->certificate_id,
            'certificates' => $this->certificates,
            'users' => User::whereHas('attendees', function (Builder $query) {
                $query->where('reservation_id', $this->activityId);
            })->get()
        ]);
    }
}
