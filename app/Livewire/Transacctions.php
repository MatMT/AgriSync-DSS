<?php

namespace App\Livewire;

use Livewire\Component;

class Transacctions extends Component
{
    public $transacctions;

    public function mount($transacctions)
    {
        $this->transacctions = $transacctions;
    }

    public function render()
    {
        return view('livewire.transacctions', [
            'transacctions' => $this->transacctions
        ]);
    }
}
