<?php

namespace App\Livewire;

use App\Models\Branch;
use Livewire\Component;

class BranchesFilter extends Component
{
    public $nombre;
    public $ubicacion;

    public function leerDatosForm()
    {
        dd('Buscando...');
    }

    public function render()
    {
        $branches = Branch::all();

        return view('livewire.branches-filter', [
            'sucursales' => $branches
        ]);
    }
}

