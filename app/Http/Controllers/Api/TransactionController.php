<?php

namespace App\Http\Controllers\Api;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'idAccount' => 'required|numeric',
            'type' => 'required|string|in:expense,income',
            'amount' => 'required|numeric',
        ]);

        // Registro de Transacción
        $transaccion = new Transaction();
        $transaccion->amount = $request->amount;
        $transaccion->admin_id = $request->dependienteId;
        $transaccion->description = 'Transacción de Dependiente';

        // Manejo de cantidad de dinero dentro de cuentas
        $cuenta = Account::findOrFail($request->idAccount);

        if ($request->type == 'expense') {

            if ($cuenta->balance < $request->amount) {
                return response()->json([
                    'message' => 'Saldo insuficiente'
                ], 400);
            }

            $transaccion->type_transaction_id = 2;
            $transaccion->sender_account_id = $cuenta->id;
            $transaccion->recipient_account_id = null;

            // Actualización de Cantidad $ de Cuenta
            $cuenta->balance -= $request->amount;
        } else if ($request->type == 'income') {

            $transaccion->type_transaction_id = 1;
            $transaccion->sender_account_id = null;
            $transaccion->recipient_account_id = $cuenta->id;

            // Actualización de Cantidad $ de Cuenta
            $cuenta->balance += $request->amount;
        }

        $transaccion->status_transaction_id = 3;
        $cuenta->save();
        $transaccion->save();

        return response()->json([
            'message' => 'Transacción realizada exitosamente',
            'newBalance' => $cuenta->balance
        ], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $account = Account::findOrFail($id);
        // $transactsExpenses = $account->transacciones;
        // $transactsIncomes = $account->transaccionesIngresos;

        // return view('clients.account', [
        //     'account' => $account,
        //     'transactsEx' => $transactsExpenses,
        //     'transactsIn' => $transactsIncomes
        // ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
