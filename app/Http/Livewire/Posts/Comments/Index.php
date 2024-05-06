<?php

namespace App\Http\Livewire\Posts\Comments;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $postId;

    public function indexPosts()
    {
        $this->emit('indexPosts');
    }

    protected $listeners = ['indexComments'];


    public function indexComments($post)
    {
        $this->postId = $post;
    }

    public function allowComment($id)
    {
        Comment::find($id)->update(
            [
                'is_view' => 'منشور',
            ]
        );
    }

    public function deleteComment($id)
    {
        Comment::find($id)->delete();

        session()->flash('message', 'تمت حذف التعليق بنجاح!');
        $this->emit('indexPosts');
    }

    public function render()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            return view('livewire.posts.comments.index',
                [
                    'commentsAll' => Comment::where('is_view', 'مخفي')->paginate(5),
                ]);
        }else
        {
            return view('livewire.posts.comments.index',
                [
                    'commentsAll' => Comment::where('is_view', 'مخفي')->whereHas('post', function (Builder $query) {
                        $query->where('club_id', Auth::user()->ClubStatus->id);
                    })->paginate(5),
                ]);
        }
    }
}
