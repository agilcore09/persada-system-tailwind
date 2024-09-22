<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\CategoryModel as Category;
use App\Models\TypeModel as Types;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;

class Guru extends Component
{
    use WithPagination;

    #[Title('Halaman Guru')]

    public $search;

    #[Validate('required', message: 'Nama guru wajib di isi')]
    public $name;

    #[Validate('required', message: 'Email wajib di isi')]
    public $email;

    #[Validate('required', message: 'Password wajib di isi')]
    public $password;

    public $token;

    public function save()
    {
        $this->validate();

        User::create([
            "name" => $this->name,
            "email" => $this->email,
            "password" => bcrypt($this->password),
            "role_id" => 2
        ]);

        $this->dispatch('formSubmitted');
        session()->flash('tambah', 'Berhasil Menambah Data!');
        $this->reset("name", "email", "password");
    }

    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        $this->name = $data->name;
        $this->email = $data->email;
        $this->token = $data->id;
    }

    public function update()
    {
        $this->validate();
        $data = User::where('id', $this->token)->first();

        if ($this->password) {
            $data->password = $this->password;
        }

        $data->update([
            "name" => $this->name,
            "email" => $this->email,
        ]);
    }

    public function buttonReset()
    {
        $this->reset('name', 'email', 'password', 'token');
    }

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
