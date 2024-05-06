<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Admin\BranchRequest;
use App\Models\EmployeeRequest;

class BranchesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Gerente General']);
    }

    public function index($id = null)
    {
        $branch = null;
        $solicitudes = null;
        $dependientes = null;
        $movimientosDependientes = null;
        $header = 'Sucursales';
        $subheader = 'Registrando una nueva sucursal';

        // Si se recibe un id, se busca la sucursal
        if ($id) {
            $dependienteIds = [];
            $branch = Branch::findOrFail($id);
            $gerente = $branch->gerente()->first();
            $header = $branch->name;
            $subheader = 'Administrando una sucursal ';

            $solicitudes = EmployeeRequest::where('manager_id', $gerente->id)
                ->where('status_id', 7)->get();

            if ($branch->usersMappings) {
                foreach ($branch->usersMappings as $mapping) {
                    if ($mapping->user->hasRole('Dependiente')) {
                        $dependientes[] = $mapping->user;
                        $dependienteIds[] = $mapping->user->id;
                    }
                }
            }

            $movimientosDependientes = Transaction::whereIn('admin_id', $dependienteIds)
                ->get();

        }

        $managersDisp = User::role('Gerente Sucursal')
            ->select('id', 'names', 'email')
            ->whereDoesntHave('administraSucursal')
            ->get('name');

        // Evaluar si no hay gerentes disponibles
        if (!$branch && $managersDisp->isEmpty()) {
            return redirect()
                ->route('admin.gg.indexGS')
                ->withErrors(['no_managers' => 'No Hay Gerentes Disponibles, primero agrega uno.']);
        }

        // Movimientos de Dependientes

        return view('admin.branches', [
            'header' => $header,
            'subHeader' => $subheader,
            'branch' => $branch ?? null,
            'gerente' => $gerente ?? null,
            'gerentes' => $managersDisp,
            'solicitudes' => $solicitudes,
            'dependientes' => $dependientes,
            'movsDependientes' => $movimientosDependientes
        ]);
    }

    public function store(BranchRequest $request)
    {
        $data = $request->validated();

        Branch::create([
            'name' => $data['name'],
            'region' => $data['region'],
            'local_manager_id' => $data['manager'],
            // 'img ' => $data['img'],
        ]);

        return redirect()->route('admin.gg.home', Auth::user()->id);
    }

    public function update(BranchRequest $request, $id)
    {
        // Validar la información enviada 
        $data = $request->validated();

        // Buscar la sucrusal a modificar
        $branch = Branch::findOrFail($id);

        $branch->update([
            'name' => $data['name'],
            'region' => $data['region'],
            'local_manager_id' => $data['manager'],
            // 'img ' => $data['img'],
        ]);

        return redirect()->route('admin.gg.home', Auth::user()->id);
    }
}
