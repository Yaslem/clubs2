<?php

namespace App\Http\Livewire\Clubs;

use App\Models\Club;
use Livewire\Component;
use Livewire\WithPagination;

class OnlyTrashed extends Component
{
    use WithPagination;
    public $clubs;

    public function mount(Club $club)
    {
        $this->clubs = $club;
    }

    public function indexClubs()
    {
        $this->emit('indexClub');
    }


    public function restoreClub($id)
    {
        $this->clubs->withTrashed()->find($id)->restore();
        session()->flash('message', 'تمت استعادة النادي بنجاح!');
        $this->render();

    }

    public function forceDeleteClub($id)
    {
        $this->clubs->withTrashed()->find($id)->forceDelete();
        session()->flash('message', 'تم حذف النادي نهائيا بنجاح!');
        $this->render();
    }

    public function render()
    {
        return view('livewire.clubs.only-trashed',
            [
                'clubsTrashed' => $this->clubs->onlyTrashed()->paginate(5),
            ]);
    }
}
