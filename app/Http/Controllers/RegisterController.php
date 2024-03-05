<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', []);
    }

    public function store(RegisterRequest $request)
    {
        // Validar el registro, accede directamente a Rules()
        $data = $request->validated();

        // Crear el usuario
        // $user = User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'gender' => $data['gender'],
        //     'password' => bcrypt($data['password'])
        // ]);

        // Retornar una respuesta
        return [
            // 'token' => $user->createToken('token')->plainTextToken,
            // 'user' => $user
        ];
    }
}
