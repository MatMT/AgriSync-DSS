<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Branch;
use Livewire\Component;

class Clients extends Component
{
    public $branchId;

    public function mount($branchId)
    {
        $this->branchId = $branchId;
    }

    public function render()
    {
        // Obtener la sucursal asociada al ID
        $branch = Branch::with('users')->find($this->branchId);

        if ($branch) {
            // Filtrar usuarios que son 'Cliente' o 'Prestamista' en una sola consulta
            $users = $branch->users->filter(
                function ($mapping) {
                    $user = $mapping->user; // Accede al modelo 
    
                    if ($user) {
                        $roleNames = $user->getRoleNames();

                        return $roleNames->contains('Cliente') || $roleNames->contains('Prestamista');
                    }
                    return false;
                }
            )->pluck('user');
        } else {
            $users = [];
        }

        return view('livewire.clients', [
            'users' => $users,
        ]);
    }
}
