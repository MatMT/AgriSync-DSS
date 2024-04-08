<?php

namespace App\Livewire;

use Livewire\Component;

class UsersFilter extends Component
{
    // Atributos por los cuales se esta buscando
    public $duiInput;

    // Emitir Función para el Componente Padre
    public function leerDatosForm()
    {
        $this->dispatch('leerDatosForm', dui: $this->duiInput);
    }

    public function render()
    {
        return view('livewire.users-filter');
    }
}
