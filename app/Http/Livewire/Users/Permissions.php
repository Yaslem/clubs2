<?php

namespace App\Http\Livewire\Users;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Permissions extends Component
{
    public $userId, $usersPermission, $permissions = [], $deletePermissions = [];

    protected $listeners = ['permission' => 'mount'];

    public function mount(User $user)
    {
        $this->usersPermission = $user->permissions;
        $this->userId = $user->id;

    }

    public function indexUsers()
    {
        $this->emit('indexUsers');
    }

    public function addPermission()
    {

        foreach ($this->permissions as $permission)
        {
            User::find($this->userId)->permissions()->syncWithoutDetaching($permission);
        }

        $this->render();
    }

    public function deletePermissions()
    {

        foreach ($this->deletePermissions as $permission)
        {
            User::find($this->userId)->permissions()->detach($permission);
        }

        $this->render();
    }

    public function render()
    {
        return view('livewire.users.permissions',
        [
            'permissionsAll' => Permission::whereDoesntHave('users', function (Builder $query) {
                $query->where('user_id', $this->userId);
            })->get(),
        ]);
    }
}
