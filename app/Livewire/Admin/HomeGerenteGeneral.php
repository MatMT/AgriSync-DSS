<?php

namespace App\Livewire\Admin;

use App\Models\User;
use App\Models\Branch;
use Livewire\Component;
use App\Models\EmployeeRequest;

class HomeGerenteGeneral extends Component
{
    public function render(User $user)
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
            'header' => "Bienvenido! $user->last_names",
            'subHeader' => $user->getRoleNames()->first(),
        ]);
    }
}
