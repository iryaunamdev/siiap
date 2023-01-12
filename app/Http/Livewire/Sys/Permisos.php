<?php

namespace App\Http\Livewire\Sys;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Permisos extends Component
{
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
        $this->validate([
            'name'=>'required',
        ]);

        Role::createOrUpdate(
            ['id'=>$this->role->id],
            ['name'=>$this->name]
        );

        toast()->success("El rol se creó/actualizo correctamente.")->push();
    }
}
