<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Club;
use App\Models\College;
use App\Models\Country;
use App\Models\Level;
use App\Models\User;
use App\Models\ClubStatus;
use App\Notifications\NewUser;
use App\Notifications\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class RegisterController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return redirect()->back();
        }else{
            $clubs = Club::where('id', '!=', '1')->get();
            $countries = Country::all();
            $levels = Level::all();
            $colleges = College::all();

            return view('Auth.register', [
                'clubs'     => $clubs,
                'countries' => $countries->except(250),
                'levels'    => $levels->except(13),
                'colleges'  => $colleges->except(12),
            ]);
        }
    }

    public function registration(StoreUserRequest $request)
    {
        $request->validated();
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'ID_Number' => $request->ID_Number,
            'number_of_whatsapp' => $request->number_of_whatsapp,
            'email' => $request->email,
            'country_id' => $request->country_id,
            'college_id' => $request->college_id,
            'level_id' => $request->level_id,
            'club_id' => $request->club_id,
            'password' => Hash::make($request->password),
        ]);

        $club = Club::where('id', $user->club_id)->first();

        if(!is_null($club->clubManager)){
            $admins = User::where('role', 'منسق')->orWhere('role', 'مدير الموقع')->orWhere('role', 'رئيس')->get();
            Notification::send($club->clubManager, new NewUser($user));
            Notification::send($admins, new NewUser($user));

        }else{
            $admins = User::where('role', 'منسق')->orWhere('role', 'مدير الموقع')->orWhere('role', 'رئيس')->get();
            Notification::send($admins, new NewUser($user));

        }
        Notification::send($user, new Welcome($user));

        return redirect(route('dashboard'));

    }

}
