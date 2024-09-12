<?php

namespace App\Livewire\Dashboard;

use App\Models\PembayaranModel;
use App\Models\PendaftaranModel;
use App\Models\SiswaModel;
use App\Models\User;
use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        $pembayaran = PembayaranModel::all()->count();
        $totalSiswa = SiswaModel::all()->count();
        $pendaftar = PendaftaranModel::all()->count();
        $guru = User::where('role_id', 2)->count();
        return view('livewire.dashboard.homepage', compact("pembayaran", "totalSiswa", "pendaftar", "guru"));
    }
}
