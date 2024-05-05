<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DependienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:Dependiente']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dependiente.home');
    }

}
