<?php

namespace App\Http\Livewire\Sys;

use Livewire\Component;

class Sidemenu extends Component
{
    public $authorizedRoles = [
        'Superadmin',
        'Admin',
    ];

    public function render()
    {
        return view('livewire.sys.sidemenu');
    }
}
