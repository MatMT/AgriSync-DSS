<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        // Obtener todas las cuentas del usuario
        $accounts = $this->accounts;

        // Mapear las cuentas para obtener un array de sus atributos
        $accountData = $accounts->map(function ($account) {
            return [
                'id' => $account->id,
                'balance' => $account->balance,
                'open_date' => $account->created_at->format('Y-m-d'),
            ];
        });

        // Retornar los datos del usuario con las cuentas incluidas
        return [
            'id' => $this->id,
            'DUI' => $this->DUI,
            'names' => $this->names,
            'last_names' => $this->last_names,
            'gender' => $this->gender,
            'role' => $this->getRoleNames()->first(),
            'status' => $this->status->state,
            'cuentas' => $accountData,
        ];
    }
}
