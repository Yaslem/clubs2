<?php

namespace App\Http\Livewire\Profiles;

use App\Models\Club;
use App\Traits\ImageUploadTrait;
use App\Models\College;
use App\Models\Country;
use App\Models\Level;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads, ImageUploadTrait;

    public $avatar, $name, $username, $email, $number_of_whatsapp, $membership_status, $club_id, $level_id, $college_id, $country_id, $ID_Number, $oldAvatar;


    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->ID_Number = Auth::user()->ID_Number;
        $this->username = Auth::user()->username;
        $this->email = Auth::user()->email;
        $this->number_of_whatsapp = Auth::user()->number_of_whatsapp;
        $this->membership_status = Auth::user()->membership_status;
        $this->club_id = Auth::user()->club_id;
        $this->level_id = Auth::user()->level_id;
        $this->college_id = Auth::user()->college_id;
        $this->country_id = Auth::user()->country_id;
        $this->avatar = Auth::user()->avatar;
        $this->oldAvatar = Auth::user()->avatar;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'ID_Number' => ['required', 'numeric', 'min_digits:10', 'max_digits:10', Rule::unique('users')->ignore(Auth::user()->id)],
            'username' => ['required', 'numeric', 'min_digits:9', 'max_digits:9', Rule::unique('users')->ignore(Auth::user()->id)],
            'number_of_whatsapp' => ['required', 'numeric', 'min_digits:8', Rule::unique('users')->ignore(Auth::user()->id)],
            'email' => ['required', 'email', Rule::unique('users')->ignore(Auth::user()->id)],
            'country_id' => ['required'],
            'membership_status' => ['required'],
            'college_id' => ['required'],
            'level_id' => ['required'],
            'club_id' => ['required'],
            'avatar' => ['nullable'],
        ];
    }

    protected $messages = [
        'name.required' => 'الرجاء إدخال الاسم الكامل.',
        'name.string' => 'يجب أن يكون الاسم مكونا من حروف فقط.',
        'number_of_whatsapp.numeric' => 'يجب أن يكون رقم الواتساب مكونا من أرقام فقط.',
        'number_of_whatsapp.required' => 'الرجاء إدخال رقم الواتساب.',
        'number_of_whatsapp.min_digits' => 'يجب أن يكون رقم الواتساب مكونا من 8 أرقام',
        'number_of_whatsapp.unique' => 'رقم الواتساب هذا موجود بالفعل.',
        'membership_status' =>  'الرجاء إدخال نوع العضوية',
        'ID_Number.numeric' => 'يجب أن تكون الهوية مكونة من أرقام فقط.',
        'ID_Number.required' => 'الرجاء إدخال رقم الهوية أو الإقامة.',
        'ID_Number.min_digits' => 'يجب أن يكون رقم الهوية أو الإقامة مكونا من 10 أرقام',
        'ID_Number.max_digits' => 'يجب أن يكون رقم الهوية أو الإقامة مكونا من 10 أرقام',
        'ID_Number.unique' => 'رقم الهوية هذا موجود بالفعل.',
        'email.required' => 'الرجاء إدخال البريد الإلكتروني.',
        'email.email' => 'الرجاء إدخال بريد صالح.',
        'email.unique' => 'هذا البريد مسجل بالفعل.',
        'username.numeric' => 'يجب أن يكون الرقم الجامعي مكونا من أرقام فقط.',
        'username.required' => 'الرجاء إدخال الرقم الجامعي.',
        'username.min_digits' => 'يجب أن يكون الرقم الجامعي مكونا من 9 أرقام',
        'username.max_digits' => 'يجب أن يكون الرقم الجامعي مكونا من 9 أرقام',
        'username.unique' => 'الرقم الجامعي هذا موجود بالفعل.',
        'country_id.required' => 'الرجاء اختيار اسم الجنسية.',
        'college_id.required' => 'الرجاء اختيار الكلية.',
        'level_id.required' => 'الرجاء اختيار المستوى.',
        'club_id.required' => 'الرجاء اختيار النادي الأساسي.',
    ];

    public function storeUser()
    {
        $this->validate();

         User::find(Auth::id())->update(
            [
                'name'                => $this->name,
                'ID_Number'           => $this->ID_Number,
                'username'            => $this->username,
                'number_of_whatsapp'  => $this->number_of_whatsapp,
                'email'               => $this->email,
                'membership_status'   => $this->membership_status,
                'country_id'          => $this->country_id,
                'college_id'          => $this->college_id,
                'level_id'            => $this->level_id,
                'club_id'             => $this->club_id,
            ]
        );

         if($this->avatar != 'default/avatar.png')
        {
			 if($this->avatar != Auth::user()->avatar){
				    $avatar = $this->uploadImages('files', 'avatars', $this->avatar);
					User::find(Auth::user()->id)->update([
						'avatar' => $avatar,
					]);
			 }
        }

        $this->reset();

        session()->flash('message', 'تم تحديث المعلومات بنجاح!');
        $this->emit('IndexProfile');
    }

    public function render()
    {
        return view('livewire.profiles.edit',
        [
            'clubs' => Club::where('id', '!=', '1')->get(),
            'countries' => Country::where('name', '!=', '---')->get(),
            'levels' => Level::where('name', '!=', '---')->get(),
            'colleges' => College::where('name', '!=', '---')->get(),
        ])
        ->extends('layouts.side')
        ->section('content');
    }
}
