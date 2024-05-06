<?php

namespace App\Http\Livewire\Clubs;

use App\Models\Club;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Profile extends Component
{
    use WithPagination;

    public $club_name;

    protected $listeners = ['clubProfile', 'clubProfile'];

    public $clubs;

    public $allActivity = true;
    public $activityToDay = false;
    public $posts = false;
    public $like;

    public $clubProfile = true;
    public $addComment = false;

    public function mount($slug)
    {
        $this->clubs = Club::with('ClubStatus')->where('slug', str_replace('-', ' ', $slug))->get();
    }

    public function getClubId($clubs)
    {
        foreach ($clubs as $club)
        {
            $this->club_name = $club->name;
            return $club->id;

        }
    }

    public function clubProfile()
    {
        $this->clubProfile = true;
        $this->addComment = false;

    }

    public function allActivity()
    {
        $this->allActivity = true;
        $this->activityToDay = false;
        $this->posts = false;
    }

    public function activityToDay()
    {
        $this->activityToDay = true;
        $this->allActivity = false;
        $this->posts = false;
    }

    public function posts()
    {
        $this->posts = true;
        $this->allActivity = false;
        $this->activityToDay = false;
    }

    public function addComment($id)
    {
        $this->addComment = true;
        $this->clubProfile = false;

        $this->emit('addComment', $id);
    }

    public function render()
    {
        if($this->activityToDay  == true)
        {
            return view('livewire.clubs.profile',
                [
                    'activities' => Reservation::where('club_id', $this->getClubId($this->clubs))->where('date', '>=', date('Y-m-d'))->where('date', '<=', date('Y-m-d', strtotime("+7 days")))->orderByDesc('date')->paginate(2),
                ])
                ->extends('layouts.side')
                ->section('content');
        }
        elseif($this->posts  == true)
        {
            return view('livewire.clubs.profile',
                [
                    'postsAll' => Post::where('club_id', $this->getClubId($this->clubs))->paginate(2),
                    'commentsCount' => Comment::whereHas('post', function (Builder $builder){
                        $builder->where('club_id', $this->getClubId($this->clubs));
                    })->where('is_view', 'منشور')->count(),
                ])
                ->extends('layouts.side')
                ->section('content');
        }else{
            return view('livewire.clubs.profile',
                [
                    'activities' => Reservation::where('club_id', $this->getClubId($this->clubs))->orderByDesc('date')->paginate(2),
                ])
                ->extends('layouts.side');
        }
    }
}
