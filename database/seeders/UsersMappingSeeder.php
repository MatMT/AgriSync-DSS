<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Branch;
use App\Models\UsersMapping;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersMappingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Registro de Mapeo de Usuarios
        $sucursalLiberCash = Branch::where('name', 'LibertCash')->first();
        $oscarGerente = User::where('email', 'oscar@agrisync.com')->first();
        $normanCliente = User::where('email', 'norman@agrisync.com')->first();

        UsersMapping::create([
            'branch_id' => $sucursalLiberCash->id,
            'user_id' => $oscarGerente->id
        ]);

        UsersMapping::create([
            'branch_id' => $sucursalLiberCash->id,
            'user_id' => $normanCliente->id
        ]);
    }
}
