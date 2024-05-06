<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Traits\ImageUploadTrait;

class Add extends Component
{
    use WithFileUploads, ImageUploadTrait;
    public $title, $body, $image;

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
            Post::create(
                [
                    'title' => $this->title,
                    'body' => $this->body,
                    'image' => $image,
                    'user_id' => Auth::user()->id,
                    'club_id' => Auth::user()->ClubStatus->id,
                ]
            );
        }else
        {
            Post::create(
                [
                    'title' => $this->title,
                    'body' => $this->body,
                    'user_id' => Auth::user()->id,
                    'club_id' => Auth::user()->ClubStatus->id,
                ]
            );
        }

        $this->reset();

        session()->flash('message', 'تمت إضافة المنشور بنجاح!');
        $this->emit('indexPosts');
    }


    public function render()
    {
        return view('livewire.posts.add');
    }
}
