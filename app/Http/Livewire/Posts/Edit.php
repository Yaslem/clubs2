<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads, ImageUploadTrait;
    public $title, $body, $to, $post_id, $image, $oldImage;

    public $listeners = ['EditPost' => 'mount'];

    public function mount(Post $post)
    {
        $this->post_id = $post->id;
        $this->title = $post->title;
        $this->body = $post->body;
        $this->image = $post->image;
        $this->oldImage = $post->image;

    }

    public function indexPosts()
    {
        $this->emit('indexPosts');
    }

    protected $rules =
        [
            'title' => ['required'],
            'body' => ['required'],
        ];

    protected $messages = [
        'title.required' => 'الرجاء إدخال عنوان المنشور.',
        'body.required' => 'الرجاء إدخال محتوى المنشور.',
    ];

    public function store()
    {
        $this->validate();

        if(!is_null($this->image))
        {
            $image = $this->uploadImages('files', 'posts', $this->image);
            Post::find($this->post_id)->update(
                [
                    'title' => $this->title,
                    'body' => $this->body,
                    'image' => $image,
                    'user_id' => Auth::user()->id,
                ]
            );
        }else
        {
            Post::find($this->post_id)->update(
                [
                    'title' => $this->title,
                    'body' => $this->body,
                    'user_id' => Auth::user()->id,
                ]
            );

        }

        $this->reset();

        session()->flash('message', 'تم تحديث المنشور بنجاح!');
        $this->emit('indexPosts');
    }


    public function render()
    {
        return view('livewire.posts.edit');
    }
}
