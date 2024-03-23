<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // <== Importación de la Clase Controller

use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest as LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.admin.login', []);
    }

    public function store(LoginRequest $request)
    {
        $data = $request->validated();
    }
}
