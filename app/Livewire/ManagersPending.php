<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;

class ManagersPending extends Component
{
    public $dui = '';

    public function render()
    {
        // Obtención de datos dinámicos
        $usuarios = User::role('Gerente Sucursal')
            ->whereDoesntHave('Sucursal')->get();

        return view('livewire.managers-pending', [
            'users' => $usuarios,
        ]);
    }
}
