<?php

namespace App\Livewire\Dashboard;

use App\Models\CategoryModel;
use Livewire\Component;
use App\Models\PembayaranModel as Bayar;
use App\Models\SiswaModel;
use App\Models\TypeModel;
use Livewire\WithPagination;

class Pembayaran extends Component
{
    use WithPagination;

    public function render()
    {
        $data = Bayar::paginate(10);
        $nama_siswa = SiswaModel::all();
        $nama_jurusan = CategoryModel::all();
        $kelas_siswa = TypeModel::all();

        return view('livewire.dashboard.pembayaran', compact("data", "nama_siswa", "nama_jurusan", "kelas_siswa"));
    }
}
