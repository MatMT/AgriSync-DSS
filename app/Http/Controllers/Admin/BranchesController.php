<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    public function index()
    {
        return view('admin.branches', [
            'header' => 'Sucursales',
            'subHeader' => 'Registrando una nueva sucursal'
        ]);
    }
}
