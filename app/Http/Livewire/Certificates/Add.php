<?php

namespace App\Http\Livewire\Certificates;

use App\Models\Attende;
use App\Models\Certificate;
use App\Models\Reservation;
use App\Models\User;
use App\Traits\ImageUploadTrait;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads, ImageUploadTrait;

    public $photo, $user_id, $certificate_id, $activityId;

    public function show()
    {
        $this->emit('show');
    }

    protected $listeners = ['addCertificate'];

    public function addCertificate($id, $activityId)
    {
        $this->certificate_id = $id;
        $this->activityId = $activityId;
    }

    protected $rules = [
        'photo' => 'required|image|max:1024',
        'user_id' => 'required',
    ];

    protected $messages = [
        'user_id.required' => 'اسم الطالب مطلوب',
        'photo.required' => 'صورة الشهادة مطلوبة',
    ];

    public function saveCeriticate()
    {
        $this->validate();
        $cer = Certificate::where('certificate_id', $this->certificate_id)->where('user_id', $this->user_id)->first();

        if(is_null($cer))
        {
            $image = $this->uploadImages('files', 'certificates', $this->photo);
            Certificate::create(
                [
                    'photo' => $image,
                    'user_id' => $this->user_id,
                    'certificate_id' => $this->certificate_id,
                ]
            );
            $this->reset();
            session()->flash('message', 'تم إضافة الشهادة بنجاح!');
        }else{
            $this->reset();
            session()->flash('error', 'هذه الشهادة موجودة بالفعل.');
        }


    }

    public function render()
    {
        return view('livewire.certificates.add',
        [
            'users' => User::whereHas('attendees', function (Builder $query) {
                $query->where('reservation_id', $this->activityId);
            })->get(),
        ])
            ->extends('layouts.side')
            ->section('content');
    }
}
