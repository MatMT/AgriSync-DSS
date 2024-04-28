<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\User;
use App\Models\Admin;
use App\Models\UsersMapping;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtención de State Existente
        $stateActive = Status::first();
        $statePending = Status::where('state', 'Pendiente')->first();

        // Registro de Cuentas Administrativas
        User::create([
            'names' => 'Oscar Mateo',
            'last_names' => 'Elías López',
            'email' => 'elias@agrisync.com',
            'password' => Hash::make('con123'),
            'gender' => 'M',
            'email_verified_at' => now(),
            'DUI' => '12345678-9',
            'remember_token' => Str::random(10),
            'status_id' => $stateActive->id
        ])->assignRole(['Gerente General']);

        User::create([
            'names' => 'Oscar Emmanuel',
            'last_names' => 'Arce Pineda',
            'email' => 'oscar@agrisync.com',
            'password' => Hash::make('con123'),
            'gender' => 'M',
            // 'branch_id' => 1,
            'DUI' => '12345678-8',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'status_id' => $stateActive->id
        ])->assignRole(['Gerente Sucursal']);

        User::create([
            'names' => 'Dayana',
            'last_names' => 'Márquez',
            'email' => 'dayana@agrisync.com',
            'password' => Hash::make('con123'),
            'gender' => 'F',
            'DUI' => '12345678-1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'status_id' => $stateActive->id
        ])->assignRole(['Dependiente']);

        User::create([
            'names' => 'Luis Ernesto',
            'last_names' => 'Marquéz Rivas',
            'email' => 'luis@agrisync.com',
            'password' => Hash::make('con123'),
            'gender' => 'M',
            'DUI' => '12345678-7',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'status_id' => $statePending->id
        ])->assignRole(['Cajero']);

        // Registro de Cuentas de Clientes

        User::create(
            [
                'names' => 'Norman Rafael',
                'last_names' => 'Espinoza Anzora',
                'email' => 'norman@agrisync.com',
                'password' => Hash::make('con123'),
                'DUI' => '12345678-6',
                // 'branch_id' => 1,
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'status_id' => $statePending->id
            ]
        )->assignRole(['Cliente']);

    }
}
