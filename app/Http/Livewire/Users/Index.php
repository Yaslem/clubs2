<?php

namespace App\Http\Livewire\Users;

use App\Models\Award;
use App\Models\Certificate;
use App\Models\Club;
use App\Models\College;
use App\Models\Country;
use App\Models\Level;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

//   Search && Filter

    public $nameIsNull;
    public $roleIsNull;
    public $membership_statusIsNull;
    public $club_idIsNull;
    public $level_idIsNull;
    public $college_idIsNull;
    public $country_idIsNull;

    public $nameSearch;
    public $roleSearch;
    public $statusSearch;
    public $club_idSearch;
    public $level_idSearch;
    public $college_idSearch;
    public $country_idSearch;
    public $usersAll;
    public $clubsAll;

    public function mount(User $user)
    {
        $this->usersAll = $user;
    }

    public $managerCount, $supervisorCount, $countTrashed;


//   Actions

    public $ShowUser = false;
    public $editUser = false;
    public $addUser = false;
    public $indexUsers = true;
    public $filterNull = false;
    public $onlyTrashed = false;
    public $permission = false;

//   Listeners

    protected $listeners = ['indexUsers'];


//   Index Action

    public function indexUsers()
    {
        $this->indexUsers = true;
        $this->ShowUser = false;
        $this->addUser = false;
        $this->editUser = false;
        $this->onlyTrashed = false;
        $this->permission = false;
    }

//   Show Action

    public function ShowUser($id)
    {
        $this->ShowUser = true;
        $this->indexUsers = false;
        $this->addUser = false;
        $this->editUser = false;
        $this->onlyTrashed = false;
        $this->permission = false;

        $this->emit('ShowUser', $id);
    }

//   Edit Action

    public function editUser($id)
    {
        $this->editUser = true;
        $this->ShowUser = false;
        $this->indexUsers = false;
        $this->addUser = false;
        $this->onlyTrashed = false;
        $this->permission = false;


        $this->emit('EditUser', $id);
    }

//   Add Action

    public function addUser()
    {
        $this->addUser = true;
        $this->editUser = false;
        $this->ShowUser= false;
        $this->indexUsers = false;
        $this->onlyTrashed = false;
        $this->permission = false;
    }

    public function onlyTrashed()
    {
        $this->onlyTrashed = true;
        $this->indexUsers = false;
        $this->ShowUser = false;
        $this->addUser = false;
        $this->editUser = false;
        $this->permission = false;

        $this->emit('onlyTrashed');
    }

    public function permission($id)
    {
        $this->permission = true;
        $this->onlyTrashed = false;
        $this->indexUsers = false;
        $this->ShowUser = false;
        $this->addUser = false;
        $this->editUser = false;

        $this->emit('permission', $id);
    }


//   Delete Action

    public function willDeleteUser($id)
    {
        $this->usersAll->find($id)->delete();
        session()->flash('message', 'تم حذف الطالب بنجاح!');

    }

    public function restoreAll()
    {
        $this->usersAll->onlyTrashed()->restore();
        session()->flash('message', 'تمت استعادة جميع المحذوفين بنجاح!');
        $this->emit('indexUsers');

    }

    public function forceDeleteAll()
    {
        $this->usersAll->onlyTrashed()->forceDelete();
        session()->flash('message', 'تمت حذف الجميع بنجاح!');
        $this->emit('indexUsers');

    }

    public function userSearch()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            if ($this->roleSearch != null)
            {

                $this->roleIsNull = false;
                $this->nameIsNull = true;
                $this->club_idIsNull = true;
                $this->country_idIsNull = true;
                $this->college_idIsNull = true;
                $this->level_idIsNull = true;

                $this->country_idSearch = null;
                $this->nameSearch = null;
                $this->club_idSearch = null;
                $this->college_idSearch = null;
                $this->level_idSearch = null;
                return  $this->usersAll->with('permissions')->where('role',  $this->roleSearch)->where('id', '!=', '1')
                    ->latest()->paginate(10);

            }elseif ($this->nameSearch != null){

                $this->nameIsNull = false;
                $this->roleIsNull = true;
                $this->club_idIsNull = true;
                $this->country_idIsNull = true;
                $this->college_idIsNull = true;
                $this->level_idIsNull = true;

                $this->roleSearch = null;
                $this->country_idSearch = null;
                $this->club_idSearch = null;
                $this->college_idSearch = null;
                $this->level_idSearch = null;
                return  $this->usersAll->with('permissions')->whereLike(['name', 'username', 'number_of_whatsapp', 'email'],  $this->nameSearch)
                    ->latest()->paginate(5);

            }elseif ($this->club_idSearch != null){

                $this->club_idIsNull = false;
                $this->nameIsNull = true;
                $this->roleIsNull = true;
                $this->country_idIsNull = true;
                $this->college_idIsNull = true;
                $this->level_idIsNull = true;

                $this->roleSearch = null;
                $this->country_idSearch = null;
                $this->college_idSearch = null;
                $this->level_idSearch = null;
                $this->nameSearch = null;
                return  $this->usersAll->with('permissions')->where('club_id',  $this->club_idSearch)->where('id', '!=', '1')
                    ->latest()->paginate(10);

            }elseif ($this->level_idSearch != null){

                $this->level_idIsNull = false;
                $this->club_idIsNull = true;
                $this->nameIsNull = true;
                $this->roleIsNull = true;
                $this->country_idIsNull = true;
                $this->college_idIsNull = true;

                $this->roleSearch = null;
                $this->country_idSearch = null;
                $this->college_idSearch = null;
                $this->club_idSearch = null;
                $this->nameSearch = null;
                return  $this->usersAll->with('permissions')->where('level_id',  $this->level_idSearch)->where('id', '!=', '1')
                    ->latest()->paginate(10);

            }elseif ($this->country_idSearch != null){

                $this->country_idIsNull = false;
                $this->level_idIsNull = true;
                $this->club_idIsNull = true;
                $this->nameIsNull = true;
                $this->roleIsNull = true;
                $this->college_idIsNull = true;

                $this->roleSearch = null;
                $this->level_idSearch = null;
                $this->college_idSearch = null;
                $this->club_idSearch = null;
                $this->nameSearch = null;
                return  $this->usersAll->with('permissions')->where('country_id',  $this->country_idSearch)->where('id', '!=', '1')
                    ->latest()->paginate(10);

            }elseif ($this->college_idSearch != null){

                $this->college_idIsNull = false;
                $this->country_idIsNull = true;
                $this->level_idIsNull = true;
                $this->club_idIsNull = true;
                $this->nameIsNull = true;
                $this->roleIsNull = true;

                $this->roleSearch = null;
                $this->level_idSearch = null;
                $this->country_idSearch = null;
                $this->club_idSearch = null;
                $this->nameSearch = null;
                return  $this->usersAll->with('permissions')->where('college_id',  $this->college_idSearch)->where('id', '!=', '1')
                    ->latest()->paginate(10);

            }
            else{

                $this->college_idIsNull = false;
                $this->country_idIsNull = false;
                $this->level_idIsNull = false;
                $this->club_idIsNull = false;
                $this->nameIsNull = false;
                $this->roleIsNull = false;

                $this->college_idSearch = null;
                $this->roleSearch = null;
                $this->level_idSearch = null;
                $this->country_idSearch = null;
                $this->club_idSearch = null;
                $this->nameSearch = null;
                return $this->usersAll->with('permissions')->where('id', '!=', '1')->latest()->paginate(10);
            }
        }else
        {
            if ($this->roleSearch != null)
            {

                $this->roleIsNull = false;
                $this->nameIsNull = true;
                $this->club_idIsNull = true;
                $this->country_idIsNull = true;
                $this->college_idIsNull = true;
                $this->level_idIsNull = true;

                $this->country_idSearch = null;
                $this->nameSearch = null;
                $this->club_idSearch = null;
                $this->college_idSearch = null;
                $this->level_idSearch = null;
                return  $this->usersAll->with('permissions')->where('role',  $this->roleSearch)->whereHas('ClubStatus', function (Builder $query) {
                    $query->where('id', Auth::user()->ClubStatus->id);
                })->where('id', '!=', '1')->latest()->paginate(10);

            }elseif ($this->nameSearch != null){

                $this->nameIsNull = false;
                $this->roleIsNull = true;
                $this->club_idIsNull = true;
                $this->country_idIsNull = true;
                $this->college_idIsNull = true;
                $this->level_idIsNull = true;

                $this->roleSearch = null;
                $this->country_idSearch = null;
                $this->club_idSearch = null;
                $this->college_idSearch = null;
                $this->level_idSearch = null;
                return  $this->usersAll->with('permissions')->whereLike(['name', 'username', 'number_of_whatsapp', 'email'],  $this->nameSearch)->whereHas('ClubStatus', function (Builder $query) {
                    $query->where('id', Auth::user()->ClubStatus->id);
                })->where('id', '!=', '1')->latest()->paginate(10);

            }elseif ($this->club_idSearch != null){

                $this->club_idIsNull = false;
                $this->nameIsNull = true;
                $this->roleIsNull = true;
                $this->country_idIsNull = true;
                $this->college_idIsNull = true;
                $this->level_idIsNull = true;

                $this->roleSearch = null;
                $this->country_idSearch = null;
                $this->college_idSearch = null;
                $this->level_idSearch = null;
                $this->nameSearch = null;
                return  $this->usersAll->with('permissions')->where('club_id',  $this->club_idSearch)->whereHas('ClubStatus', function (Builder $query) {
                    $query->where('id', Auth::user()->ClubStatus->id);
                })->where('id', '!=', '1')->latest()->paginate(10);

            }elseif ($this->level_idSearch != null){

                $this->level_idIsNull = false;
                $this->club_idIsNull = true;
                $this->nameIsNull = true;
                $this->roleIsNull = true;
                $this->country_idIsNull = true;
                $this->college_idIsNull = true;

                $this->roleSearch = null;
                $this->country_idSearch = null;
                $this->college_idSearch = null;
                $this->club_idSearch = null;
                $this->nameSearch = null;
                return  $this->usersAll->with('permissions')->where('level_id',  $this->level_idSearch)->whereHas('ClubStatus', function (Builder $query) {
                    $query->where('id', Auth::user()->ClubStatus->id);
                })->where('id', '!=', '1')->latest()->paginate(10);

            }elseif ($this->country_idSearch != null){

                $this->country_idIsNull = false;
                $this->level_idIsNull = true;
                $this->club_idIsNull = true;
                $this->nameIsNull = true;
                $this->roleIsNull = true;
                $this->college_idIsNull = true;

                $this->roleSearch = null;
                $this->level_idSearch = null;
                $this->college_idSearch = null;
                $this->club_idSearch = null;
                $this->nameSearch = null;
                return  $this->usersAll->with('permissions')->where('country_id',  $this->country_idSearch)->whereHas('ClubStatus', function (Builder $query) {
                    $query->where('id', Auth::user()->ClubStatus->id);
                })->where('id', '!=', '1')->latest()->paginate(10);

            }elseif ($this->college_idSearch != null){

                $this->college_idIsNull = false;
                $this->country_idIsNull = true;
                $this->level_idIsNull = true;
                $this->club_idIsNull = true;
                $this->nameIsNull = true;
                $this->roleIsNull = true;

                $this->roleSearch = null;
                $this->level_idSearch = null;
                $this->country_idSearch = null;
                $this->club_idSearch = null;
                $this->nameSearch = null;
                return  $this->usersAll->with('permissions')->where('college_id',  $this->college_idSearch)->whereHas('ClubStatus', function (Builder $query) {
                    $query->where('id', Auth::user()->ClubStatus->id);
                })->where('id', '!=', '1')->latest()->paginate(10);

            }
            else{

                $this->college_idIsNull = false;
                $this->country_idIsNull = false;
                $this->level_idIsNull = false;
                $this->club_idIsNull = false;
                $this->nameIsNull = false;
                $this->roleIsNull = false;

                $this->college_idSearch = null;
                $this->roleSearch = null;
                $this->level_idSearch = null;
                $this->country_idSearch = null;
                $this->club_idSearch = null;
                $this->nameSearch = null;
                return $this->usersAll->with('permissions')->whereHas('ClubStatus', function (Builder $query) {
                    $query->where('id', Auth::user()->ClubStatus->id);
                })->where('id', '!=', '1')->latest()->paginate(10);
            }
        }


    }

    public function willDeleteAward($id)
    {
        Award::find($id)->delete();
        session()->flash('message', 'تمت حذف جائزة الطالب بنجاح!');
    }

    public function willareYouDeleteCertificate($id)
    {
        $cer = Certificate::where('id', $id)->first();
        File::delete(public_path('uploads/files/'.$cer->photo));
        Certificate::find($id)->delete();

        Session()->flash('message', 'تم حذف الشهادة بنجاح.');
    }



//   Views

    public function render()
    {
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            $usercount = $this->usersAll->where('role', 'طالب')->count();
            $managercount = $this->usersAll->where('role', 'مدير')->count();
            $supervisorcount = $this->usersAll->where('role', 'منسق')->count();
            $countTrashed = $this->usersAll->onlyTrashed()->count();

            $this->managerCount = $managercount;
            $this->supervisorCount = $supervisorcount;
            $this->userCount = $usercount;
            $this->countTrashed = $countTrashed;

            if($this->userSearch()->count() >= 1)
            {
                $this->filterNull = false;

                return view('livewire.users.index',
                    [
                        'levels' => level::all(),
                        'clubs' => club::where('id', '!=', '1')->get(),
                        'countries' => Country::all(),
                        'users' => $this->userSearch(),
                        'colleges' => college::all(),
                        'userCount' => $this->userCount,
                        'managerCount' => $this->managerCount,
                        'supervisorCount' => $this->supervisorCount,
                        'countTrashed' => $this->countTrashed,
                    ]
                )
                    ->extends('layouts.side')
                    ->section('content');


            }else{
                $this->resetPage();
                $this->filterNull = true;
                return view('livewire.users.index',
                    [
                        'levels' => level::all(),
                        'countries' => Country::all(),
                        'users' => $this->userSearch(),
                        'colleges' => college::all(),
                        'clubs' => club::where('id', '!=', '1')->get(),
                        'userCount' => $this->userCount,
                        'managerCount' => $this->managerCount,
                        'supervisorCount' => $this->supervisorCount,
                        'countTrashed' => $this->countTrashed,

                    ]
                )
                    ->extends('layouts.side')
                    ->section('content');

            }
        }else
        {
            $usercount = $this->usersAll->where('role', 'طالب')->whereHas('ClubStatus', function (Builder $query) {
                $query->where('id', Auth::user()->ClubStatus->id);
            })->count();

            $this->userCount = $usercount;

            if($this->userSearch()->count() >= 1)
            {
                $this->filterNull = false;

                return view('livewire.users.index',
                    [
                        'levels' => level::all(),
                        'clubs' => club::where('id', '!=', '1')->get(),
                        'countries' => Country::all(),
                        'users' => $this->userSearch(),
                        'colleges' => college::all(),
                        'userCount' => $this->userCount,
                    ]
                )
                    ->extends('layouts.side')
                    ->section('content');


            }else{
                $this->resetPage();
                $this->filterNull = true;
                return view('livewire.users.index',
                    [
                        'levels' => level::all(),
                        'countries' => Country::all(),
                        'users' => $this->userSearch(),
                        'colleges' => college::all(),
                        'clubs' => club::where('id', '!=', '1')->get(),
                        'userCount' => $this->userCount,

                    ]
                )
                    ->extends('layouts.side')
                    ->section('content');

            }
        }

    }
}
