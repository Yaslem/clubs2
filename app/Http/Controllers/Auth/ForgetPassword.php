<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ResetPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;

class ForgetPassword extends Controller
{
    public function index(){
        return view('Auth.ForgetPassword');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        try {

            $user = User::where('email', $request->email)->get();

            if(count($user) > 0){

                $token = Str::random(40);
                $domain = URL::to('/');
                $url = $domain.'/auth/reset-password?token='.$token;

                $data['url'] = $url;
                $data['name'] = $user[0]['name'];
                $data['email'] = $request->email;
                $data['title'] = 'إعادة تعيين كلمة المرور';
                $data['body'] = 'رجاء اضغط على الرابط لإعادة تعيين كلمة مرور حسابك.';

                Mail::send('Auth.ForgetPasswordMail', ['data' => $data], function ($message) use ($data){
                    $message->to($data['email'])->subject($data['title']);
                });

                $time =  Carbon::now()->format('H:i');
                $date =  Carbon::now()->format('Y-m-d H:i:s');

                ResetPassword::updateOrCreate(
                    ['email' => $request->email],
                    [
                        'email' => $request->email,
                        'token' => $token,
                        'time' => $time,
                        'created_at' => $date,
                    ]
                );

                return back()->with('success', 'رجاء اذهب إلى بريدك الإلكتورني واضغط على الرابط الذي وصلك. الرابط صالح لمدة ساعة كاملة.');

            }else{
                return back()->with('error', 'هذا البريد غير موجود.');
            }

        }catch (\Exception $exception){
            return back()->with('error', 'يوجد خطأ ما');
        }
    }
}
