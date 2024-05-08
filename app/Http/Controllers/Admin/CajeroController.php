<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CajeroController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Cajero']);
    }

    public function index($id = null)
    {
        $branch = null;
        $solicitudes = null;
        $header = 'Cajero';
        $subheader = 'Funcionalidades';

        return view('cajero.index', [
            'branch' => $branch,
            'solicitudes' => $solicitudes,
            'header' => $header,
            'subHeader' => $subheader
        ]);
    }
}
