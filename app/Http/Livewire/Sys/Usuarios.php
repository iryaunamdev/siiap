<?php

namespace App\Http\Livewire\Sys;

use App\Models\User;
use Livewire\Component;

class Usuarios extends Component
{
    public $usuarios, $usuario;
    public $name, $email, $pass_txt, $photo;
    public $editModal = false;


    public function render()
    {
        $this->usuarios = User::all()->sortBy('name');
        return view('livewire.sys.usuarios');
    }

    public function editUsuario(User $usuario)
    {
        $this->usuario = $usuario;
        $this->name = $usuario->name;
        $this->email = $usuario->email;
        $this->editModal = true;
    }
}
