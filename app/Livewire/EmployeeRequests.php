<?php

namespace App\Livewire;

use App\Models\Branch;
use App\Models\EmployeeRequest as Solicitudes;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;

class EmployeeRequests extends Component
{
    public $dui = '';
    public $branch = null;

    #[On('leerDatosForm')]
    public function buscar($dui)
    {
        $this->dui = $dui;
    }

    public function mount($branch = null)
    {
        $this->branch = $branch;
    }

    public function render()
    {
        $solicitudes = Solicitudes::where('status_id', 7)
            ->with(['manager', 'employee'])
            ->orderby('employee_id', 'asc')->get();

        $query = Solicitudes::where('status_id', 7)
            ->with(['manager', 'employee'])
            ->orderBy('employee_id', 'asc');

        if ($this->branch !== null) {
            $query->where('manager_id', $this->branch->gerente->id);
        }

        $solicitudes = $query->get();

        return view(
            'livewire.employee-requests',
            [
                'solicitudes' => $solicitudes,
            ]
        );
    }
}
