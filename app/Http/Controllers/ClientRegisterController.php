<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

use App\Models\Client as ModelsClient;

class ClientRegisterController extends Controller
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
