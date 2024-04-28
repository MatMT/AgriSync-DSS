<?php

namespace App\Http\Controllers\Client;

use App\Services\RedirectService;
use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller; // <== Importación de la Clase Controller


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.client.login', []);
    }

    public function store(LoginRequest $request)
    {
        // Validar las credenciales ========================
        $data = $request->validated();

        // Validar confirmación de correo ==================

        // Validar si el usuario esta activo ===============

        // Validar contraseña ==============================
        if (!Auth::attempt($data)) {
            return redirect()->back()->withErrors(['msg' => 'Contraseña Incorrecta']);
        }

        // Autenticar ======================================
        $user = Auth::user();

        // Redireccionar ===================================
        return RedirectService::redirectToRole($user);
    }
}
