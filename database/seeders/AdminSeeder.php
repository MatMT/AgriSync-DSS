<?php

namespace Database\Seeders;

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
        User::create([
            'names' => 'Oscar Mateo',
            'last_names' => 'Elías López',
            'email' => 'oscar@agrisync.com',
            'password' => Hash::make('con123'),
            'gender' => 'M',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ])->assignRole(['gerenteGeneral']);


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
