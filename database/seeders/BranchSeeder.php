<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Branch;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener Gerente de Sucursal
        $managerLibertCash = User::where('email', 'oscar@agrisync.com')->first();

        // Crear Sucursal y Asignar Gerente
        Branch::create([
            'name' => 'LibertCash',
            'region' => 'San Salvador',
            'local_manager_id' => $managerLibertCash->id
        ]);
    }
}
