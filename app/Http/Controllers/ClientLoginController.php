<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class ClientLoginController extends Controller
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
