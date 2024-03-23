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

        // Ejecutar Seeder de Usuarios Administrativos=
        $this->call(AdminSeeder::class);

        // Generar Usuarios de Prueba =================
        \App\Models\User::factory(10)->create();

    }
}
