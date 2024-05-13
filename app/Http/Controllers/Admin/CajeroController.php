<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;

class CajeroController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Cajero']);
    }

    public function index($id = null)
    {
        $users = User::all();
        $branch = null;
        $solicitudes = null;
        $header = 'Cajero';
        $subheader = 'Funcionalidades';

        return view('cajero.index', [
            'branch' => $branch,
            'solicitudes' => $solicitudes,
            'header' => $header,
            'subHeader' => $subheader,
            'users' => $users

        ]);
    }

    public function userCrud(UserRequest $request)
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
        ])->assignRole(['Dependiente']);

        return redirect()->route('cj.newUserForm')->with('success', 'Usuario creado exitosamente');
    }

    public function showUserForm()
    {
        return view('cajero.form');  // Asegúrate de que el path a la vista esté correcto
    }
}
