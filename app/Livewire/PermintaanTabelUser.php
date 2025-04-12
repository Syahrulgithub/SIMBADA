<?php

namespace App\Livewire;

use App\Models\Permintaan;
use Livewire\Component;

class PermintaanTabel extends Component
{
    public function render()
    {
        $permintaans = Permintaan::with('user', 'barang')->latest()->get();

        return view('livewire.permintaan-tabel', [
            'permintaans' => $permintaans,
        ]);
    }
}

