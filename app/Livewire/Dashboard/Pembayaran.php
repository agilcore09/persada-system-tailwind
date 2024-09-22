<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\PembayaranModel as Pembayaran;

class Pembayaran extends Component
{
    public function render()
    {
        $data = Pembayaran::all();
        return view('livewire.dashboard.pembayaran', compact("data"));
    }
}
