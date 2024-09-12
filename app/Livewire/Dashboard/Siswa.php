<?php

namespace App\Livewire\Dashboard;

use App\Models\CategoryModel;
use App\Models\SiswaModel;
use App\Models\TypeModel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Siswa extends Component
{

    use WithFileUploads;
    use WithPagination;

    #[Title('Halaman Siswa')]
    public $search;
    public function render()
    {
        $jurusan = CategoryModel::all();
        $kelasSiswa = TypeModel::all();
        $data = SiswaModel::with(['Category', 'Type'])->simplePaginate(2);

        if ($this->search != null) {
            $data = SiswaModel::where('nama_siswa', 'like', '%' . $this->search . '%')->get();
        }
        return view('livewire.dashboard.siswa', compact("data", "jurusan", "kelasSiswa"));
    }
}
