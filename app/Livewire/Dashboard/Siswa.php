<?php

namespace App\Livewire\Dashboard;

use App\Models\CategoryModel;
use App\Models\SiswaModel;
use App\Models\TypeModel;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Siswa extends Component
{

    use WithFileUploads;
    use WithPagination;

    #[Title('Halaman Siswa')]
    public $search;

    #[Validate('required', message: 'Nama siswa wajib di isi')]
    public $namaSiswa;
    #[Validate('image', message: 'Harus Format Gambar')]
    #[Validate('max:2048', message: 'Maksimal 2mb')]
    public $gambar;

    #[Validate('required', message: 'Kelas siswa wajib di isi')]
    public $kelas;

    #[Validate('required', message: 'NIS siswa wajib di isi')]
    public $nis;

    #[Validate('required', message: 'NISN siswa wajib di isi')]
    public $nisn;

    #[Validate('required', message: 'Kategori wajib di isi')]
    public $category;

    #[Validate('required', message: 'Type siswa wajib di isi')]
    public $type;



    public function save()
    {
        if ($this->gambar) {
            $this->gambar->storeAs('public/siswa/', $this->gambar->hashName());
        }

        SiswaModel::create([
            "nama_siswa" => $this->namaSiswa,
            "gambar" => $this->gambar->hashName(),
            "kelas" => $this->kelas,
            "nis" => $this->nis,
            "nisn" => $this->nisn,
            "category_id" => $this->category,
            "type_id" => $this->type
        ]);
    }

    public function render()
    {
        $jurusan = CategoryModel::all();
        $kelasSiswa = TypeModel::all();
        $data = SiswaModel::with(['Category', 'Type'])->simplePaginate(10);

        if ($this->search != null) {
            $data = SiswaModel::where('nama_siswa', 'like', '%' . $this->search . '%')->get();
        }
        return view('livewire.dashboard.siswa', compact("data", "jurusan", "kelasSiswa"));
    }
}