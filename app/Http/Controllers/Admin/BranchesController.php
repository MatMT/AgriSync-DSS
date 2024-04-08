<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Admin\BranchRequest;

class BranchesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Gerente General']);
    }

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

        Branch::create([
            'name' => $data['name'],
            'region' => $data['region'],
            'local_manager_id' => $data['manager'],
            // 'img ' => $data['img'],
        ]);

        return redirect()->route('admin.gg.home', Auth::user()->id);
    }
}
