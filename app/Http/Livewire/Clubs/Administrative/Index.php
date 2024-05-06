<?php

namespace App\Http\Livewire\Clubs\Administrative;

use App\Models\Club;
use App\Models\UserAdministrative;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $clubsAll, $clubId;

    protected $listeners = ['addManagements', 'indexManagement'];

    public function addManagements($club)
    {
        $this->clubId = $club;
    }

    public function indexClub()
    {
        $this->emit('indexClub');
    }

    public $indexManagement = true;
    public $editManagement = false;
    public $addManagement = false;

    public function indexManagement()
    {
        $this->indexManagement = true;
        $this->editManagement = false;
        $this->addManagement = false;
    }

    public function editManagement($id)
    {
        $this->editManagement = true;
        $this->indexManagement = false;
        $this->addManagement = false;


        $this->emit('editManagement', $id);
    }

    public function addManagement()
    {
        $this->addManagement = true;
        $this->indexManagement = false;
        $this->editManagement = false;

        $this->emit('addManagement', $this->clubId);
    }

    public function DeleteClubManagement($user_id)
    {
        UserAdministrative::where('user_id', $user_id)->update(
            [
                'user_id' => null,
            ]
        );
        session()->flash('message', 'تم حذف الإداري بنجاح!');
        $this->render();
    }

    public function DeleteClubDeputy($deputy_id)
    {
        UserAdministrative::where('deputy_id', $deputy_id)->update(
            [
                'deputy_id' => null,
            ]
        );
        session()->flash('message', 'تم حذف النائب بنجاح!');
        $this->render();
    }

    public function render()
    {
        return view('livewire.clubs.administrative.index',
            [
                'clubs' => Club::with('clubManagement')->where('id', $this->clubId)->get(),
//                'userCount' => $this->clubsAll->clubManagement->administratives->count(),
            ]);
    }
}
