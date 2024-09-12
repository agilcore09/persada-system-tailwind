<?php

namespace App\Livewire\Dashboard;

use App\Models\CategoryModel;
use App\Models\SiswaModel;
use App\Models\TypeModel;
use Livewire\Component;

class Siswa extends Component
{
    public function render()
    {
        $jurusan = CategoryModel::all();
        $kelasSiswa = TypeModel::all();
        $data = SiswaModel::with(['Category', 'Type'])->get();
        return view('livewire.dashboard.siswa', compact("data", "jurusan", "kelasSiswa"));
    }
}
