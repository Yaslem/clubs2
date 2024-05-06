<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class ResetPassword extends Controller
{
    public function index(Request $request){
        $resetData = \App\Models\ResetPassword::where('token', $request->token)->get();

        if(isset($request->token) && count($resetData) > 0){

            $now = Carbon::now()->format('H:i:s');

            $diff = abs(strtotime($now) - strtotime($resetData[0]['time']));
            $tmins = $diff/60;
            $hours = floor($tmins/60);

            if($hours == '1.0'){

                $notes = 'انتهت صلاحية الرابط. رجاء حاول مرة أخرى.';
                \App\Models\ResetPassword::where('email', $resetData[0]['email'])->delete();
                return view('Auth.ResetPassword', compact('notes'));

            }else{

                $user = User::where('email', $resetData[0]['email'])->get();

                return view('Auth.ResetPassword', compact('user'));
            }

        }else{
            return view('errors.404');
        }
    }

    public function store(Request $request){
        $request->validate([
            'password' => 'required|confirmed|string|min:8',
        ]);

        $user = User::find($request->user_id);
        if($user){
            $user->password = Hash::make($request->password);
            $user->save();

            \App\Models\ResetPassword::where('email', $user->email)->delete();

            return redirect('/login')->with('success', 'تم تغيير كلمة المرور بنجاح.');
        }else{
            return back()->with('error', 'يوجد خطأ ما.');
        }

    }
}
