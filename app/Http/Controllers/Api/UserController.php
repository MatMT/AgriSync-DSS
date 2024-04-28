<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::role(['Cliente', 'Prestamista'])->get();

        $responseData = [
            'message' => 'Listado de clientes o prestamistas',
            'data' => $users
        ];

        return response()->json($responseData, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($dui)
    {
        // Buscar primero el usuario por DUI
        $user = User::where('dui', $dui)->first();

        // Verificar si el usuario existe
        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        // Comprobar si el usuario tiene alguno de los roles necesarios
        if ($user->hasAnyRole(['Cliente', 'Prestamista'])) {
            return new UserResource($user);
        } else {
            // Si el usuario no tiene los roles necesarios, retornar error
            return response()->json(['message' => 'Acceso no autorizado, el usuario no tiene el rol adecuado'], 403);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
