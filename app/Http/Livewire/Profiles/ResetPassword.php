<?php

namespace App\Http\Livewire\Profiles;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ResetPassword extends Component
{
    public $old_password, $new_password, $new_password_confirmation;

    public function rules()
    {
        return [
            'new_password' => ['required', 'string', 'confirmed', 'min:8'],
        ];
    }

    protected $messages = [
        'new_password.required' => 'الرجاء إدخال كلمة المرور القديمة.',
        'new_password.string' => 'يجب أن يكون كلمة المرور مكونة من حروف فقط.',
        'new_password.min' => 'يجب أن يكون كلمة المرور أكثر من 8 أحرف.',
    ];

    public function ResetPass(){
        $this->validate();

        $user = User::find(Auth::user()->id);

        if($user){
            $user->password = Hash::make($this->new_password);

            $user->save();

            $this->reset();

            session()->flash('message', 'تم تحديث كلمة المرور بنجاح!');

            return $this->emit('IndexProfile');

        }

        return session()->flash('error', 'يوجد خطأ ما!');
    }

    public function render()
    {
        return view('livewire.profiles.reset-password');
    }
}
