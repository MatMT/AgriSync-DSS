<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller; // <== Importación de la Clase Controller

use Illuminate\Http\Request;
use App\Http\Requests\ClientLoginRequest as LoginRequest;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.client.login', []);
    }

    public function store(LoginRequest $request)
    {
        $data = $request->validated();
    }
}
