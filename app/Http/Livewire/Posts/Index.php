<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $posts, $postCount, $postId;

//   Search && Filter

    public $titleSearch;

//   Actions

    public $indexPosts = true;
    public $editPost = false;
    public $addPost = false;
    public $indexComments = false;
    public $filterNull = false;

//   Listeners

    protected $listeners = ['indexPosts'];



//   Index Action

    public function mount(Post $post)
    {
        $this->posts = $post;
        $this->postId = $this->posts->id;
    }

    public function indexPosts()
    {
        $this->indexPosts = true;
        $this->addPost = false;
        $this->editPost = false;
        $this->indexComments = false;
    }

//   Edit Action

    public function editPost($id)
    {
        $this->editPost = true;
        $this->indexPosts = false;
        $this->addPost = false;
        $this->indexComments = false;

        $this->emit('EditPost', $id);
    }

//   Add Action

    public function addPost()
    {
        $this->addPost = true;
        $this->editPost = false;
        $this->indexPosts = false;
        $this->indexComments = false;
    }

    public function indexComments()
    {
        $this->indexComments = true;
        $this->addPost = false;
        $this->editPost = false;
        $this->indexPosts = false;

        $this->emit('indexComments', $this->postId);
    }


//   Delete Action

    public function willDeletePost($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'تم حذف المنشور بنجاح!');

    }

    public function postSearch()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            if ($this->titleSearch != null){

                return  $this->posts->with('comments', 'club', 'user')->whereLike('title',  $this->titleSearch)
                    ->latest()->paginate(5);

            }else{
                return $this->posts->with('comments', 'club', 'user')->latest()->paginate(5);
            }
        }else
        {
            if ($this->titleSearch != null){

                return  $this->posts->with('comments', 'club', 'user')->whereLike('title',  $this->titleSearch)->whereHas('club', function (Builder $query) {
                    $query->where('id', Auth::user()->ClubStatus->id);
                })->latest()->paginate(5);

            }else{
                return $this->posts->with('comments', 'club', 'user')->whereHas('club', function (Builder $query) {
                        $query->where('id', Auth::user()->ClubStatus->id);
                    })->latest()->paginate(5);
            }
        }

    }


//   Views

    public function render()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            $postCount = $this->posts->count();

            $this->postCount = $postCount;

            if($this->postSearch()->count() >= 1)
            {
                $this->filterNull = false;

                return view('livewire.posts.index',
                    [
                        'postsAll' => $this->postSearch(),
                        'postCount' => $this->postCount,
                        'countComment' => $this->posts->whereHas('comments', function (Builder $query) {
                            $query->where('is_view', 'مخفي');
                        })->count(),
                    ]
                )
                    ->extends('layouts.side')
                    ->section('content');


            }else{
                $this->resetPage();
                $this->filterNull = true;
                return view('livewire.posts.index',
                    [
                        'postsAll' => $this->postSearch(),
                        'postCount' => $this->postCount,
                        'countComment' => $this->posts->whereHas('comments', function (Builder $query) {
                            $query->where('is_view', 'مخفي');
                        })->count(),
                    ]
                )
                    ->extends('layouts.side')
                    ->section('content');

            }

        }else
        {
            $postCount = $this->posts->whereHas('club', function (Builder $query) {
                $query->where('id', Auth::user()->ClubStatus->id);
            })->count();

            $this->postCount = $postCount;

            if($this->postSearch()->count() >= 1)
            {
                $this->filterNull = false;

                return view('livewire.posts.index',
                    [
                        'postsAll' => $this->postSearch(),
                        'postCount' => $this->postCount,
                        'countComment' => $this->posts->whereHas('comments', function (Builder $query) {
                            $query->where('is_view', 'مخفي');
                        })->whereHas('club', function (Builder $query) {
                            $query->where('id', Auth::user()->ClubStatus->id);
                        })->count(),
                    ]
                )
                    ->extends('layouts.side')
                    ->section('content');


            }else{
                $this->resetPage();
                $this->filterNull = true;
                return view('livewire.posts.index',
                    [
                        'postsAll' => $this->postSearch(),
                        'postCount' => $this->postCount,
                        'countComment' => $this->posts->whereHas('comments', function (Builder $query) {
                            $query->where('is_view', 'مخفي');
                        })->whereHas('club', function (Builder $query) {
                            $query->where('id', Auth::user()->ClubStatus->id);
                        })->count(),
                    ]
                )
                    ->extends('layouts.side')
                    ->section('content');

            }
        }
    }
}
