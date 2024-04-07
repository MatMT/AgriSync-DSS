<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BranchRequest;
use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BranchesController extends Controller
{
    public function index()
    {
        $managersDisp = User::role('Gerente Sucursal')
            ->select('id', 'names', 'email')
            ->whereDoesntHave('Sucursal')
            ->get('name');

        // Evaluar si no hay gerentes disponibles
        if ($managersDisp->isEmpty()) {
            return redirect()
                ->route('admin.gg.indexGS')
                ->withErrors(['no_managers' => 'No Hay Gerentes Disponibles, primero agrega uno.']);
        }

        return view('admin.branches', [
            'header' => 'Sucursales',
            'subHeader' => 'Registrando una nueva sucursal',
            'gerentes' => $managersDisp,
        ]);
    }

    public function store(BranchRequest $request)
    {
        $data = $request->validated();

        $gerenteSucursal = $data['manager'];
        $gerenteSucursal = User::findOrFail($gerenteSucursal, "id");

        if (!$gerenteSucursal) {
            return back()->with('error', 'Manager no encontrado');
        }

        Branch::create([
            $data['name'] => '',
            $data['adress'] => '',
            $data['manager'] => '',
            $data['img'] => '',
        ]);

        return;
    }
}
