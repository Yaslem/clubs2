<?php

namespace App\Http\Livewire\Users;

use App\Models\Club;
use App\Models\College;
use App\Models\Country;
use App\Models\Level;
use App\Models\Permission;
use App\Models\User;
use App\Models\UserPermission;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component
{
    public $name, $password, $username, $email, $number_of_whatsapp, $role, $membership_status, $club_id, $level_id, $college_id, $country_id, $avatar, $ID_Number, $useridManager;
    public $userId;

    protected $listeners = ['EditUser'];

    public function EditUser($id)
    {
        $this->userId = $id;
        $user = User::with(['club', 'level', 'country', 'college'])->find($this->userId);

        $this->name = $user->name;
        $this->username = $user->username;
		$this->password = $user->password;
        $this->email = $user->email;
        $this->number_of_whatsapp = $user->number_of_whatsapp;
        $this->role = $user->role;
        $this->membership_status = $user->membership_status;
        $this->club_id = $user->club_id;
        $this->level_id = $user->level_id;
        $this->college_id = $user->college_id;
        $this->country_id = $user->country_id;
        $this->ID_Number = $user->ID_Number;
        $this->useridManager = $user->id;

    }

    public function indexUsers()
    {
        $this->emit('indexUsers');
    }


    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'ID_Number' => ['required', 'numeric', 'min_digits:10', 'max_digits:10', Rule::unique('users')->ignore($this->userId)],
            'username' => ['required', 'numeric', 'min_digits:9', 'max_digits:9', Rule::unique('users')->ignore($this->userId)],
            'number_of_whatsapp' => ['required', 'numeric', 'min_digits:8', Rule::unique('users')->ignore($this->userId)],
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->userId)],
            'country_id' => ['required'],
			'password' => ['min:8'],
            'membership_status' => ['required'],
            'college_id' => ['required'],
            'level_id' => ['required'],
            'club_id' => ['required'],
            'role' => ['required'],
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
        'role.required' => 'رتبة المسخدم مطلوبة.',
		'password.min' => 'يجب أن تكون كلمة المرور أطول من 8 أحرف',
        'password.required' => 'الرجاء إدخال الاسم الكامل.',
    ];

    public function updateUser()
    {
        $this->validate();

        User::find($this->userId)->update(
            [
                'name'                => $this->name,
                'ID_Number'           =>  $this->ID_Number,
                'username'            => $this->username,
                'number_of_whatsapp'  => $this->number_of_whatsapp,
                'email'               => $this->email,
                'membership_status'   => $this->membership_status,
                'country_id'          => $this->country_id,
                'college_id'          => $this->college_id,
                'level_id'            => $this->level_id,
                'club_id'             => $this->club_id,
                'role'                => $this->role,
				'password'            => Hash::make($this->password),
            ]
        );

        $this->reset();

        session()->flash('message', 'تم تحديث الطالب بنجاح!');
        $this->emit('indexUsers');
    }

    public function render()
    {
        return view('livewire.users.edit',
            [
                'clubs' => Club::where('id', '!=', '1')->get(),
                'countries' => country::all(),
                'levels' => level::all(),
                'colleges' => college::all(),
            ]
        );
    }
}
