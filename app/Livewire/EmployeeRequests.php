<?php

namespace App\Livewire;

use App\Models\EmployeeRequest as Solicitudes;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;

class EmployeeRequests extends Component
{
    public $dui = '';

    #[On('leerDatosForm')]
    public function buscar($dui)
    {
        $this->dui = $dui;
    }


    public function render()
    {
        $solicitudes = Solicitudes::with('managers')->get();

        dd($solicitudes);

        return view('livewire.employee-requests');
    }
}