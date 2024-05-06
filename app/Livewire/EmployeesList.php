<?php

namespace App\Livewire;

use App\Models\User as Employees;
use App\Models\UsersMapping;
use Livewire\Component;
use App\Models\Branch;

class EmployeesList extends Component
{
    public $brancId = '';

    public function mount($branchId)
    {
        $this->branchId = $branchId;
    }

    public function render()
    {
        // Inicializa un array vacío para almacenar los empleados
        $employees = [];

        // Buscar y obtener la instancia del modelo Branch con el ID proporcionado
        $branch = Branch::findOrFail($this->branchId);

        // Obtener una colección de instancias de UsersMapping asociadas a la sucursal a través de la relación definida en el modelo Branch
        $employeesMapping = $branch->users;

        // Itera sobre cada instancia de UsersMapping en la colección
        foreach ($employeesMapping as $employeeMap) {
            $roles = $employeeMap->user->getRoleNames();

            if (!$roles->contains('Prestamista') && !$roles->contains('Cliente') && !$roles->contains('Dependiente')) {
                $employees[] = $employeeMap->user;
            }
        }

        return view('livewire.employees-list', [
            'empleados' => $employees
        ]);
    }
}
