<?php

namespace App\Http\Controllers;

use App\Models\PembayaranModel;
use App\Models\PendaftaranModel;
use App\Models\SiswaModel;
use App\Models\User;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function homePage()
    {
        $title = " SMK PERSADA MAKASSAR";
        $body = "Tumbuh Bersama, Berkarya Bersama SMK PERSADA MAKASSAR";
        return view('landing.homepage', compact("title", "body"));
    }
    public function beritaPage()
    {
        $title = "Berita Kami";
        $body = "Nantikan berita terbaru dari kami";
        return view('landing.berita', compact("title", "body"));
    }
    public function contactPage()
    {
        $title = " Contact Us";
        $body = "Untuk informasi lebih lanjut atau pertanyaan, jangan ragu untuk menghubungi kami melalui kontak di bawah ini";
        return view('landing.contact_us', compact("title", "body"));
    }

    public function aboutPage()
    {
        $title = " Tentang Kami";
        $body = "Jelajahi Dunia Pendidikan yang Dinamis & Inovatif Bersama SMK Persada Makassar";
        return view('landing.about', compact("title", "body"));
    }

    public function Dashboard()
    {
        $pembayaran = PembayaranModel::all()->count();
        $totalSiswa = SiswaModel::all()->count();
        $pendaftar = PendaftaranModel::all()->count();
        $guru = User::where('role_id', 2)->count();

        return view('core.dashboard', compact("pembayaran", "totalSiswa", "pendaftar", "guru"));
    }
}
