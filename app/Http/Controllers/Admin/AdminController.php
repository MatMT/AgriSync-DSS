<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // <== Importación de la Clase Controller

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Gerente General']);
    }

    public function home(User $user)
    {
        return view('generalManager.welcome', [
            'admin' => $user
        ]);
    }

}
