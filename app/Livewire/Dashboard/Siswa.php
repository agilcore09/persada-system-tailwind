<?php

namespace App\Livewire\Dashboard;

use App\Models\CategoryModel;
use App\Models\SiswaModel;
use App\Models\TypeModel;
use Illuminate\Support\Facades\Storage;
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

    #[Validate('required', message: 'Jurusan wajib di isi')]
    public $category;

    #[Validate('required', message: 'Type siswa wajib di isi')]
    public $type;



    public function save()
    {
        $this->validate();

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
        $this->dispatch('formSubmitted');
        session()->flash('tambah', 'Berhasil Menambah Data!');
        $this->reset('namaSiswa', 'gambar', 'kelas', 'nis', 'nisn', 'category', 'type');
    }

    public function edit($nis)
    {
        $data = SiswaModel::where('nis', $nis)->first();
        $this->namaSiswa = $data->nama_siswa;
    }

    public function delete($nis)
    {
        // cek file jika tersedia
        $file = SiswaModel::where('nis', $nis)->first();
        if (file_exists(storage_path('app/public/siswa/' . $file->gambar))) {
            Storage::delete('public/siswa/' . $file->gambar);
        }
        SiswaModel::where('nis', $nis)->delete();
        session()->flash('hapus', 'Berhasil Menghapus Data!');
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
