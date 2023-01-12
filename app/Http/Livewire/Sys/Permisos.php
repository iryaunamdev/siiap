<?php

namespace App\Http\Livewire\Sys;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Usernotnull\Toast\Concerns\WireToast;

class Permisos extends Component
{
    use WireToast;

    protected $authorizedRoles = [
        'Superadmin',
        'Administrador'
    ];

    public $roles, $role;
    public $name;
    public $editModal = false;

    public function render()
    {
        if(Auth::user()->hasanyrole($this->authorizedRoles)){
            $this->roles = Role::all();
            return view('livewire.sys.permisos');
        }else{
            return abort('403', 'Usuario no autorizado');
        }
    }

    public function editRole(Role $role)
    {
        if($role)
        {
            $this->role = $role;
            $this->name = $role->name;
        }
        $this->editModal = true;
    }

    public function storeRole()
    {
        toast()->success('Permiso modificdo/creado correctamente.')->push();
    }
}
