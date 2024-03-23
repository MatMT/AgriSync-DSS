<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // <== Importación de la Clase Controller
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        dd('Hola');
        return view('welcome', []);
    }

}
