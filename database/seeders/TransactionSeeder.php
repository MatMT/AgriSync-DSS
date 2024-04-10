<?php

namespace Database\Seeders;

use App\Models\TypeTransaction;
use App\Models\User;
use App\Models\Status;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtención de Tipos de Transacción [Entrada, Salida, Transferencia]
        $typesTransaction = TypeTransaction::where('type', 'Transferencia')->first();
        // Estado de Transacción [Exito, Fallido]
        $statusSuccess = Status::where('state', 'Exito')->first();

        // Cantidad de Dinero
        $mount = 50;

        // Obtención de Usuarios y sus Cuentas
        $user = User::where('email', 'norman@agrisync.com')->first();
        $manager = User::where('email', 'oscar@agrisync.com')->first();

        $accountPrimary = $user->accounts()->first();
        $accountSecondary = $user->accounts()->skip(1)->first();

        // Registro de Transacciones
        Transaction::create([
            'amount' => $mount,
            'description' => 'Depósito de Prueba',
            'admin_id' => $manager->id,
            'sender_account_id' => $accountPrimary->id,
            'recipient_account_id' => $accountSecondary->id,
            'type_transaction_id' => $typesTransaction->id,
            'status_transaction_id' => $statusSuccess->id,
        ]);

        // Actualización de Cantidad de Cuentas
        $accountPrimaryModel = Account::find($accountPrimary->id);
        $accountPrimaryModel->balance -= $mount;
        $accountPrimaryModel->save();

        $accountSecondaryModel = Account::find($accountSecondary->id);
        $accountSecondaryModel->balance += $mount;
        $accountSecondaryModel->save();
    }
}
