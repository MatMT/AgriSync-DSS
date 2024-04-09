<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

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

    public function store(Request $request)
    {
        $request->validate([
            'action' => 'required|in:aceptar,rechazar',
            'solicitud_id' => 'required|exists:employee_requests,id',
            'employee_id' => 'required|exists:users,id'
        ]);

        $accion = $request->action;

        $employee = User::find($request->employee_id);
        $solicitud = \App\Models\EmployeeRequest::find($request->solicitud_id);

        // Evaluar el Estado de la Solicitud
        $accion == 'aceptar'
            ? $employee->status_id = 1
            : $employee->status_id = 6;

        $solicitud->status_id = 8; // Finalizado

        // Guardar cambios
        $employee->save();
        $solicitud->save();

        // Mensaje de Confirmación
        Session::flash('status', '¡Solicitud Procesada correctamente!');

        return redirect()->back();
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
