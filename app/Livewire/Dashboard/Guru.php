<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\CategoryModel as Category;
use App\Models\TypeModel as Types;
use App\Models\User;

class Guru extends Component
{

    public $search;

    public function render()
    {
        $data = User::where('role_id', 2)->paginate(10);

        if ($this->search != null) {
            $data = User::where('role_id', 2)->where('name', 'like', '%' . $this->search . '%')->get();
        }

        $jurusan = Category::all();
        $kelasSiswa = Types::all();
        return view('livewire.dashboard.guru', compact("data", "jurusan", "kelasSiswa"));
    }
}
