<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeRequest extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Gerente General']);
    }

    public function index()
    {
        return view('admin.request', [
            // Header   ====
            'header' => 'Solicitudes de Personal',
            'subHeader' => 'Todas las Sucursales'
        ]);
    }

    public function indexGS()
    {
        return view('admin.managers', [
            // Header   ====
            'header' => 'Gerentes de Sucursales',
            'subHeader' => 'Administra la Gerencia'
        ]);
    }
}
