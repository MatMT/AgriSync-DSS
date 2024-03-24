<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $registros = [
            // Usuarios & Cuentas
            ['state' => 'Activo',],
            ['state' => 'Suspendido',],

            // Transacciones
            ['state' => 'Exito',],
            ['state' => 'Fallido',],

            // Solicitudes
            ['state' => 'Aprobado',],
            ['state' => 'Rechazado',],

            // General
            ['state' => 'Pendiente',],
        ];

        Status::insert($registros);
    }
}
