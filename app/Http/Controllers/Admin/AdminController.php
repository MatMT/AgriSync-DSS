<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // <== Importación de la Clase Controller
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:gerenteGeneral']);
    }

    public function home()
    {
        return view('generalManager.welcome', []);
    }

}
