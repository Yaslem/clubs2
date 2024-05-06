<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'ID_Number' => ['required', 'numeric', 'min_digits:10', 'max_digits:12', 'unique:users'],
            'username' => ['required', 'numeric', 'min_digits:9', 'max_digits:9', 'unique:users'],
            'number_of_whatsapp' => ['required', 'numeric','min_digits:8', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => 'min:6',
            'country_id' => ['required'],
            'college_id' => ['required'],
            'level_id' => ['required'],
            'club_id' => ['required'],
            'role' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
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
        ];
    }
}
