<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // <== Importación de la Clase Controller

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;


class LoginController extends Controller
{
    protected $guard = 'admin';

    public function index()
    {
        return view('auth.admin.login', []);
    }

    public function store(LoginRequest $request)
    {
        // Validar las credenciales
        $data = $request->validated();

        if (!Auth::attempt($data)) {
            return redirect()->back()->withErrors(['msg' => 'Contraseña Incorrecta']);
        }

        // Autenticar
        $admin = Auth::user();

        // Redireccionar
        return redirect()->route('admin.gg.home', $admin);
    }
}
