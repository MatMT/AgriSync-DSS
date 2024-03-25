<?php

namespace App\Livewire;

use Livewire\Attributes\On;

use App\Models\Branch;
use Livewire\Component;
use App\Models\EmployeeRequest;

class Branches extends Component
{
    public $nombreSucursal = '';

    #[On('leerDatosForm')]
    public function buscar($nombre)
    {
        $this->nombreSucursal = $nombre;
    }

    public function render()
    {
        // Obtención de datos dinámicos
        $branches = Branch::with('gerente')->when($this->nombreSucursal, function ($query) {
            $query->where('name', 'LIKE', "%" . $this->nombreSucursal . "%");
        })->get();

        $requests = EmployeeRequest::all();

        return view('livewire.branches', [
            'solicitudes' => $requests,
            'sucursales' => $branches
        ]);
    }
}
