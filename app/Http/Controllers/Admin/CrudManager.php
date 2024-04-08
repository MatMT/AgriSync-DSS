<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ManagerRequest;

class CrudManager extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.managerCreate', [
            'header' => 'Gerente de Sucursal',
            'subHeader' => 'Registrando nuevo Personal'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ManagerRequest $request)
    {
        $data = $request->validated();

        // Crear y asignar rol
        User::create([
            'names' => $data['names'],
            'last_names' => $data['last_names'],
            'gender' => $data['gender'],
            'DUI' => $data['DUI'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ])
            ->assignRole(['Gerente Sucursal']);

        return redirect()->route('admin.gg.indexGS');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
