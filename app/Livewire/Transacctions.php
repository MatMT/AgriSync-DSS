<?php

namespace App\Livewire;

use Livewire\Component;

class Transacctions extends Component
{
    public $transacctions;

    public function mount($transacctionsIncomes, $transacctionsExpenses)
    {
        $this->transacctions['expenses'] = $transacctionsExpenses;
        $this->transacctions['incomes'] = $transacctionsIncomes;
    }

    public function render()
    {
        return view('livewire.transacctions', [
            'transacctions' => $this->transacctions
        ]);
    }
}
