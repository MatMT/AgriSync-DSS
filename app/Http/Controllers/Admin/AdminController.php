<?php

namespace App\Http\Controllers\Admin;

use App\Models\Branch;
use App\Models\EmployeeRequest;
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
        // Válidar que acceda solamente desde a perfil
        if ($user->id !== auth()->id()) {
            return redirect()->route('admin.login.index');
        }

        // Obtención de datos dinámicos
        $branches = Branch::all();
        $requests = EmployeeRequest::all();

        return view('generalManager.home', [
            'admin' => $user,
            'solicitudes' => $requests,
            'sucursales' => $branches,
            // Header   ===
            'header' => $user->last_names,
            'subHeader' => $user->getRoleNames()->first(),
        ]);
    }

}
