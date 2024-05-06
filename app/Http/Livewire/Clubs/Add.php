<?php

namespace App\Http\Livewire\Clubs;

use App\Models\Club;
use App\Models\User;
use App\Traits\ImageUploadTrait;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component
{
    public function indexClub()
    {
        $this->emit('indexClub');
    }

    use WithFileUploads, ImageUploadTrait;

    public $name, $description, $slug, $goals, $vision, $values, $message, $telegram, $members, $whatsapp, $cover, $avatar, $manager_id;
    public $coverClub, $avatarClub;


    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'slug' => ['required', 'unique:clubs'],
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

    public function saveClub()
    {
        $this->validate();

        Club::create(
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
                'cover' =>  $this->coverClub,
                'avatar' => $this->avatarClub,
                'manager_id' => $this->manager_id,
            ]
        );
        $this->reset();
        session()->flash('message', 'تمت إضافة معلومات النادي بنجاح!');
        $this->emit('indexClub');
    }

    public function render()
    {
        return view('livewire.clubs.add',
        [
            'userManager' => User::where('role', 'مدير')->get(),
        ]);
    }
}
