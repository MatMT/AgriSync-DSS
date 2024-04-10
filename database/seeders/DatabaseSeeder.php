<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Generar Roles y Permisos ===================
        $this->call(RoleSeeder::class);

        // Generar Estados y Tipos  ===================
        $this->call(StatusSeeder::class);
        $this->call(TypeTransactionSeeder::class);

        // Ejecutar Seeder de Usuarios Administrativos=
        $this->call(AdminSeeder::class);

        // Generar Sucursales =========================
        $this->call(BranchSeeder::class);

        // Generar Solicitud de Empleado ==============
        $this->call(EmployeeRequestSeeder::class);

        // Generar Usuarios de Prueba =================
        \App\Models\User::factory(10)->create();

        // Generar Cuentas de Prueba ==================
        $this->call(AccountSeeder::class);

        // Generar Transacciones de Prueba ============
        $this->call(TransactionSeeder::class);

    }
}
