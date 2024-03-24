<?php

namespace Database\Seeders;

use App\Models\TypeTransaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $registros = [
            ['type' => 'Entrada', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'Salida', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'Transferencia', 'created_at' => now(), 'updated_at' => now()],
        ];

        TypeTransaction::insert($registros);
    }
}
