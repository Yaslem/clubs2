<?php

namespace App\Http\Livewire\Users;

use App\Models\Club;
use App\Models\College;
use App\Models\Country;
use App\Models\Level;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Add extends Component
{
    public $name, $username, $email, $password, $number_of_whatsapp, $status, $role, $membership_status, $club_id, $level_id, $college_id, $country_id, $avatar, $ID_Number;

    public function indexUsers()
    {
        $this->emit('indexUsers');
    }


    protected $rules =
        [
            'name' => ['required', 'string'],
            'ID_Number' => ['required', 'numeric', 'min_digits:10', 'max_digits:10', 'unique:users'],
            'username' => ['required', 'numeric', 'min_digits:9', 'max_digits:9', 'unique:users'],
            'number_of_whatsapp' => ['required', 'numeric','min_digits:8', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['min:8'],
            'country_id' => ['required'],
            'membership_status' => ['required'],
            'college_id' => ['required'],
            'level_id' => ['required'],
            'club_id' => ['required'],
            'role' => ['required'],
        ];

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
        'password.min' => 'يجب أن تكون كلمة المرور أطول من 8 أحرف',
        'password.required' => 'الرجاء إدخال الاسم الكامل.',
        'username.numeric' => 'يجب أن يكون الرقم الجامعي مكونا من أرقام فقط.',
        'username.required' => 'الرجاء إدخال الرقم الجامعي.',
        'username.min_digits' => 'يجب أن يكون الرقم الجامعي مكونا من 9 أرقام',
        'username.max_digits' => 'يجب أن يكون الرقم الجامعي مكونا من 9 أرقام',
        'username.unique' => 'الرقم الجامعي هذا موجود بالفعل.',
        'country_id.required' => 'الرجاء اختيار اسم الجنسية.',
        'college_id.required' => 'الرجاء اختيار الكلية.',
        'level_id.required' => 'الرجاء اختيار المستوى.',
        'club_id.required' => 'الرجاء اختيار النادي الأساسي.',
        'role.required' => 'رتبة المسخدم مطلوبة.',
    ];

    public function store()
    {
        $existUser = User::where('username', $this->username)->first();
        $this->validate();

        if($existUser == null)
        {
            User::create(
                [
                    'name'                => $this->name,
                    'ID_Number'           =>  $this->ID_Number,
                    'username'            => $this->username,
                    'number_of_whatsapp'  => $this->number_of_whatsapp,
                    'email'               => $this->email,
                    'membership_status'   => $this->membership_status,
                    'password'            => Hash::make($this->password),
                    'country_id'          => $this->country_id,
                    'college_id'          => $this->college_id,
                    'level_id'            => $this->level_id,
                    'club_id'             => $this->club_id,
                    'role'                => $this->role,
                ]
            );

            $this->reset();

            session()->flash('message', 'تم إضافة الطالب بنجاح!');
            $this->emit('indexUsers');


        }else{
            session()->flash('error', 'يوجد طالب مسجل بنفس الرقم الجامعي.');
            $this->emit('indexUsers');
        }
    }


    public function render()
    {
        return view('livewire.users.add',
            [
                'levels' => level::all(),
                'clubs' => Club::where('id', '!=', '1')->get(),
                'countries' => Country::all(),
                'colleges' => college::all(),
            ]
        );
    }
}
