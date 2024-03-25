<?php

namespace App\Livewire;

use App\Models\Branch;
use Livewire\Component;

class BranchesFilter extends Component
{

    // Atributos por los cuales se esta buscando
    public $nombre;

    // Emitir Función para el Componente Padre
    public function leerDatosForm()
    {
        $this->dispatch('leerDatosForm', nombre: $this->nombre);
    }

    public function render()
    {
        return view('livewire.branches-filter');
    }
}

