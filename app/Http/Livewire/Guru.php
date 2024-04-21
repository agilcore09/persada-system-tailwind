<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Guru extends Component
{

    public $title = "Guru Page";

    public function render()
    {
        return view('livewire.guru')->layoutData(['title' => 'Halaman Guru']);
    }
}
