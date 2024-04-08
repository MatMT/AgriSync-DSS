<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;

class ManagersPending extends Component
{
    public $dui = '';

    #[On('leerDatosForm')]
    public function buscar($dui)
    {
        $this->dui = $dui;
    }

    public function render()
    {
        // Obtención de datos dinámicos
        $usuarios = User::role('Gerente Sucursal')
            ->whereDoesntHave('Sucursal')
            ->when($this->dui, function ($query) {
                $query->where('DUI', 'LIKE', "%" . $this->dui . "%");
            })->get();

        return view('livewire.managers-pending', [
            'users' => $usuarios,
        ]);
    }
}
