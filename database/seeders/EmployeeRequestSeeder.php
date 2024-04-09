<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Status;
use App\Models\EmployeeRequest;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtención de State Existente
        $statePending = Status::where('state', 'Pendiente')->first();
        // Obtener Gerente de Sucursal
        $managerLibertCash = User::where('email', 'oscar@agrisync.com')->first();
        // Obtener Empleado solicitado
        $newEmployee = User::where('email', 'luis@agrisync.com')->first();

        // Roles ===================================
        EmployeeRequest::create([
            'status_id' => $statePending->id,
            'manager_id' => $managerLibertCash->id,
            'employee_id' => $newEmployee->id
        ]);
    }
}
