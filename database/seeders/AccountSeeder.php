<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtención de State Existente
        $cliente = User::where('email', 'norman@agrisync.com')->first();

        // Registro de Cuentas de un Usuario
        Account::create(
            [
                'client_id' => $cliente->id,
                'balance' => 100,
                'status' => 'activa',
            ]
        );

        Account::create(
            [
                'client_id' => $cliente->id,
                'status' => 'activa',
            ]
        );
    }
}
