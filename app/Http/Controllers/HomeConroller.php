<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Post;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()){
            $user = User::where('id', Auth::user()->id)->get();
            $activitiesToday = Reservation::where('date', date('Y-m-d'))->where('status', 'تم الحجز')->count();
            $activitiestomorrow = Reservation::where('date', date('Y-m-d', strtotime("+1 days")))->count();
            $activitiesaftersevendays = Reservation::where('date', '>=', date('Y-m-d'))->where('date', '<=', date('Y-m-d', strtotime("+7 days")))->count();
            $posts = Post::all()->count();
            $activities = Reservation::where('date', date('Y-m-d'))->where('status', 'تم الحجز')->orderByDesc('date')->orderByDesc('from')->get();
			$activities_after_seven_days = Reservation::where('date', '>', date('Y-m-d'))->where('date', '<=', date('Y-m-d', strtotime("+7 days")))->where('status', 'تم الحجز')->orderByDesc('date')->orderByDesc('from')->get();

            return view('index', compact(
                'user',
                'activitiesToday',
                'activitiestomorrow',
                'activitiesaftersevendays',
                'posts',
                'activities',
				'activities_after_seven_days',
            ));
        }else{
            $activitiesToday = Reservation::where('date', date('Y-m-d'))->where('status', 'تم الحجز')->count();
            $activitiestomorrow = Reservation::where('date', date('Y-m-d', strtotime("+1 days")))->count();
            $activitiesaftersevendays = Reservation::where('date', '>=', date('Y-m-d'))->where('date', '<=', date('Y-m-d', strtotime("+7 days")))->count();
            $posts = Post::all()->count();
            $activities = Reservation::where('date', date('Y-m-d'))->where('status', 'تم الحجز')->orderByDesc('date')->orderByDesc('from')->get();
			$activities_after_seven_days = Reservation::where('date', '>', date('Y-m-d'))->where('date', '<=', date('Y-m-d', strtotime("+7 days")))->where('status', 'تم الحجز')->orderByDesc('date')->orderByDesc('from')->get();

            return view('index', compact(
                'activitiesToday',
                'activitiestomorrow',
                'activitiesaftersevendays',
                'posts',
                'activities',
				'activities_after_seven_days',
            ));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
