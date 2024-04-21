<?php

namespace App\Http\Livewire;

use App\Models\CategoryModel;
use App\Models\TypeModel;
use App\Models\User;
use Livewire\Component;

class Guru extends Component
{
    public function render()
    {
        $data = User::where('role_id', 2)->get();
        $jurusan = CategoryModel::all();
        $kelasSiswa = TypeModel::all();

        return view('livewire.guru', compact("data", "jurusan", "kelasSiswa"))->layoutData(['title' => 'Halaman Guru']);
    }
}
