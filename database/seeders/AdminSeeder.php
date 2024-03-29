<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\User;
use App\Models\Admin;
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
        $statePending = Status::latest('id')->first();

        // Registro de Cuentas Administrativas
        User::create([
            'names' => 'Oscar Mateo',
            'last_names' => 'Elías López',
            'email' => 'elias@agrisync.com',
            'password' => Hash::make('con123'),
            'gender' => 'M',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'state_id' => $stateActive->id
        ])->assignRole(['Gerente General']);

        User::create([
            'names' => 'Oscar Emmanuel',
            'last_names' => 'Arce Pineda',
            'email' => 'oscar@agrisync.com',
            'password' => Hash::make('con123'),
            'gender' => 'M',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'state_id' => $stateActive->id
        ])->assignRole(['Gerente Sucursal']);


        User::create([
            'names' => 'Luis Ernesto',
            'last_names' => 'Marquéz Rivas',
            'email' => 'luis@agrisync.com',
            'password' => Hash::make('con123'),
            'gender' => 'M',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'state_id' => $statePending->id
        ])->assignRole(['Cajero']);

        // =============================================
        // $registros = [
        //     // Gerente General
        //     [
        //         'names' => 'Oscar Mateo',
        //         'last_names' => 'Elías López',
        //         'email' => 'oscar@email.com',
        //         'password' => Hash::make('con123'),
        //         'gender' => 'M',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]
        // ];

        // Admin::insert($registros);
    }
}
