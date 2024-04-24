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
        $user = User::where('dui', $dui)->first();

        if (!$user) {
            // Manejar el caso en que no se encuentren usuarios propietarios
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        return new UserResource($user);
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
