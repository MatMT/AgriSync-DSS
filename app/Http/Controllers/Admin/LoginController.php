<?php

namespace App\Http\Controllers\Admin;

use App\Services\RedirectService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // <== Importación de la Clase Controller

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.admin.login', []);
    }

    public function store(LoginRequest $request)
    {
        // Validar las credenciales ========================
        $data = $request->validated();

        if (!Auth::attempt($data)) {
            return redirect()->back()->withErrors(['msg' => 'Contraseña Incorrecta']);
        }

        // Autenticar ======================================
        $admin = Auth::user();

        // Redireccionar utilizando el servicio ============
        return RedirectService::redirectToRole($admin);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login.index');
    }
}
