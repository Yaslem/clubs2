<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class OnlyTrashed extends Component
{
    use WithPagination;
    public $users;

    public function mount(User $user)
    {
        $this->users = $user;
    }

    public function indexUsers()
    {
        $this->emit('indexUsers');
    }

    public function restoreUser($id)
    {
        $this->users->withTrashed()->find($id)->restore();
        session()->flash('message', 'تمت استعادة الطالب بنجاح!');
        $this->render();

    }

    public function forceDeleteUser($id)
    {
        $this->users->withTrashed()->find($id)->forceDelete();
        session()->flash('message', 'تم حذف الطالب نهائيا بنجاح!');
        $this->render();
    }

    public function render()
    {
        return view('livewire.users.only-trashed',
        [
            'usersTrashed' => $this->users->onlyTrashed()->paginate(5),
        ]);
    }
}
