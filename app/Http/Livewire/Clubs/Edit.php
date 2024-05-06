<?php

namespace App\Http\Livewire\Clubs;

use App\Models\Club;
use App\Models\User;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads, ImageUploadTrait;

    public $name, $description, $slug, $goals, $vision, $values, $message, $telegram, $members, $whatsapp, $cover, $avatar, $manager_id, $clubId;

    public $coverClub, $avatarClub, $club_name, $oldAvatar, $oldCover;

    public function indexClub()
    {
        $this->emit('indexClub');
    }

    protected $listeners = ['editClub'];

    public function editClub($id)
    {
        $this->clubId = $id;
        $club = Club::where('id', $id)->first();

        $this->name             = $club->name;
        $this->club_name        = $club->name;
        $this->description = $club->description;
        $this->slug        = $club->slug;
        $this->goals       = $club->goals;
        $this->vision      = $club->vision;
        $this->values      = $club->values;
        $this->message     = $club->message;
        $this->telegram    = $club->telegram;
        $this->members     = $club->members;
        $this->whatsapp    = $club->whatsapp;
        $this->cover       = $club->cover;
        $this->oldCover       = $club->cover;
        $this->oldAvatar      = $club->avatar;
        $this->avatar      = $club->avatar;
        $this->manager_id      = $club->manager_id;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'slug' => ['required', Rule::unique('clubs')->ignore($this->clubId)],
            'description' => ['nullable'],
            'goals' => ['nullable'],
            'vision' => ['nullable'],
            'values' => ['nullable'],
            'message' => ['nullable'],
            'telegram' => ['nullable'],
            'members' => ['nullable'],
            'whatsapp' => ['nullable'],
            'cover' => ['nullable'],
            'avatar' => ['nullable'],
            'manager_id' => ['required'],
        ];
    }

    protected $messages = [
        'name.required' => 'الرجاء إدخال اسم النادي كاملا.',
        'name.string' => 'يجب أن يكون الاسم مكونا من حروف فقط.',
        'slug.unique' => 'يوجد ناد آخر مسجل بنفس هذا الرابط..',
        'slug.required' => 'الرجاء إدخال رابط النادي.',
        'manager_id.required' => 'الرجاء إدخال مدير النادي.',
    ];

    public function updateClub()
    {
        $this->validate();

        if($this->avatar === $this->oldAvatar)
        {
            $avatar = $this->oldAvatar;

        }else{

            if(!is_null($this->avatar))
            {
                $avatar = $this->uploadImages('files', 'avatars', $this->avatar);
            }else{
                $avatar = 'avatar/club-default-avatar.png';
            }
        }

        if($this->cover === $this->oldCover)
        {
            $cover = $this->oldCover;
        }else{

            if(!is_null($this->cover))
            {
                $cover = $this->uploadImages('files','avatars', $this->cover);

            }else{
                $cover = 'avatar/club-default-cover.png';
            }
        }

        Club::find($this->clubId)->update(
            [
                'name' => $this->name ,
                'description' => $this->description,
                'slug' => $this->slug,
                'goals' => $this->goals,
                'vision' => $this->vision,
                'values' => $this->values,
                'message' => $this->message,
                'telegram' => $this->telegram,
                'members' => $this->members,
                'whatsapp' => $this->whatsapp,
                'cover' =>  $cover,
                'avatar' => $avatar,
                'manager_id' => $this->manager_id,
            ]
        );
        $this->reset();
        session()->flash('message', 'تم تحديث معلومات النادي بنجاح!');
        $this->emit('indexClub');
    }

    public function render()
    {
        return view('livewire.clubs.edit',
        [
            'userManager' => User::where('role', 'مدير')->get(),
        ])
            ->extends('layouts.side')
            ->section('content');
    }
}
