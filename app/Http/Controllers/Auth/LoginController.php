<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
           return redirect()->back();
        }else{
            return view('Auth.login');
        }
    }

    public function username()
    {
        return 'username';
    }

    public function checkLogin(Request $request)
    {
         $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($request->only([
            'username',
            'password'
        ]))) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }else
        {
            $user = User::whereUsername($request->username)->wherePassword($request->password)->first();
            if($user)
            {
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->intended('/');
            }

            return back()->withErrors([
                'username' => 'معلومات تسجيل الدخول غير صحيحة.',
            ])->onlyInput('username', 'password');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
		
		return redirect()->intended('/');

    }
}
