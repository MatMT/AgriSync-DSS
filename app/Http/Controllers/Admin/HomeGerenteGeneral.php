<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EmployeeRequest;
use App\Http\Controllers\Controller;

class HomeGerenteGeneral extends Controller
{
    public function index(User $user)
    {
        // Válidar que acceda solamente desde a perfil
        if ($user->id !== auth()->id()) {
            return redirect()->route('admin.login.index');
        }

        $requests = EmployeeRequest::count();

        return view('generalManager.home', [
            'admin' => $user,
            'solicitudes' => $requests,
            // Header   ===
            'header' => "Bienvenido! $user->last_names",
            'subHeader' => $user->getRoleNames()->first(),
        ]);
    }
}
