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
        $branch = Branch::find($this->branchId);

        $userIds = $branch->users->pluck('user_id')->toArray();

        if ($branch) {
            // Obtén los usuarios que tienen los IDs encontrados en la sucursal
            $clients = User::whereIn('id', $userIds)->role('Cliente')->get();
        } else {
            $clients = [];
        }

        return view('livewire.clients', [
            'clients' => $clients,
        ]);
    }
}
