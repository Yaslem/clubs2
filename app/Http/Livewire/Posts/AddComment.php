<?php

namespace App\Http\Livewire\Posts;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AddComment extends Component
{
    use WithPagination;
    public $post, $body, $post_id;
    protected $listeners = ['addComment'];

    public function addComment($id)
    {
        $post = Post::with('user', 'club', 'comments')->where('id', $id)->first();
        $this->post_id = $post->id;
        $this->post = $post;

    }

    public function clubProfile()
    {
        $this->emit('clubProfile');
    }

    protected $rules =
        [
            'body' => ['required'],
        ];

    protected $messages = [
        'body.required' => 'الرجاء إدخال محتوى التعليق.',
    ];

    public function save()
    {
        $this->validate();

        Comment::create(
            [
                'body' => $this->body,
                'user_id' => Auth::user()->id,
                'post_id' => $this->post->id,
            ]
        );
        $this->reset();

        session()->flash('message', 'تمت إضافة التعليق بنجاح!');
        $this->emit('clubProfile');
    }

    public function render()
    {
        return view('livewire.posts.add-comment', [
            'post' => $this->post,
            'comments' => Comment::whereHas('post', function (Builder $builder){
                $builder->where('id', $this->post_id);
            })->where('is_view', 'منشور')->paginate(5),
        ])
            ->extends('layouts.side')
            ->section('content');
    }
}
