<?php

namespace App\Http\Livewire\Certificates;

use App\Models\Certificate;
use App\Models\Reservation;
use App\Models\ReservationCertificate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $activityId;

    //   Actions

    public $showCertificate = false;
    public $editCertificate = false;
    public $addCertificate = false;
    public $indexCertificate = true;
    public $addCertificateIndex = false;

//   Listeners

    protected $listeners = ['indexCertificate'];


//   Index Action

    public function addCertificateIndex()
    {
        $this->addCertificateIndex = true;
        $this->indexCertificate = false;
        $this->showCertificate = false;
        $this->addCertificate = false;
        $this->editCertificate = false;
    }

    public function indexCertificate()
    {
        $this->indexCertificate = true;
        $this->showCertificate = false;
        $this->addCertificate = false;
        $this->editCertificate = false;
        $this->addCertificateIndex = false;
    }

//   Show Action

    public function showCertificate($id)
    {
        $this->showCertificate = true;
        $this->indexCertificate = false;
        $this->addCertificate = false;
        $this->editCertificate = false;
        $this->addCertificateIndex = false;

        $this->activityId = $id;

        $this->emit('showCertificate', $id);
    }

//   Edit Action



//   Delete Action

    public function willDeleteCertificate($id)
    {
        $ReservationCertificate = ReservationCertificate::where('reservation_id', $id)->first();
        foreach ($ReservationCertificate->certificate as $value)
        {
            File::delete(public_path('uploads/files/'.$value->photo));
        }
        $ReservationCertificate->delete();
        session()->flash('message', 'تم حذف الشهادة بنجاح!');

    }

    public function willareYouDeleteCertificate($id)
    {
        $cer = Certificate::where('id', $id)->first();
        File::delete(public_path('uploads/files/'.$cer->photo));
        Certificate::find($id)->delete();

        Session()->flash('message', 'تم حذف الشهادة بنجاح.');
        $this->showCertificate($this->activityId);
    }

//   Views

    public function render()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            return view('livewire.certificates.index',
                [
                    'reservations' => Reservation::has('certificates')->latest()->paginate(4),
                ]
            )
                ->extends('layouts.side')
                ->section('content');
        }else
        {
            return view('livewire.certificates.index',
                [
                    'reservations' => Auth::user()->ClubStatus->reservations()->has('certificates')->latest()->paginate(4),
                ]
            )
                ->extends('layouts.side')
                ->section('content');
        }

    }

}
