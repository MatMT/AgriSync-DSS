<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller; // <== Importación de la Clase Controller

use Illuminate\Http\Request;
use App\Http\Requests\ClientRegisterRequest as RegisterRequest;

use App\Models\Client as ModelsClient;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.client.register', []);
    }

    public function store(RegisterRequest $request)
    {
        $dato = new ModelsClient();
        $dato->names = $request->nombres;
        $dato->last_names = $request->apellidos; // Corregido aquí
        $dato->email = $request->email;
        $dato->password = $request->password;

        $dato->save();

        return redirect()->back()->with('success', 'Datos guardados correctamente.');
    }
}
