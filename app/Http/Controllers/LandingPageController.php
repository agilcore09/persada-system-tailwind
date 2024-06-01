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
        $data = [
            [
                "nama" => "Andi Awaluddin, S.Pd",
                "job" => "Wakasek Kesiswaan",
                "img" => null
            ],
            [
                "nama" => "Mappa, S.Pd",
                "job" => "Wakasek Kurikulum",
                "img" => null
            ],
            [
                "nama" => "Muliyadi, S.T",
                "job" => "Wakasek Sarana",
                "img" => null
            ],
            [
                "nama" => "Oktavianus Arjun",
                "job" => "Guru Kejuruan TKJ",
                "img" => null
            ],
            [
                "nama" => "Abdul Khalik Arifin, S.Kom   ",
                "job" => "Guru Kejuruan TKJ",
                "img" => null
            ],
            [
                "nama" => "Irfan, S.Pd",
                "job" => "Guru Kejuruan TKJ",
                "img" => null
            ],
            [
                "nama" => "Drs. Syatir",
                "job" => "Guru Kejuruan TKR",
                "img" => null
            ],
            [
                "nama" => "Robiyanto, S.Pd",
                "job" => "Guru Kejuruan TKR",
                "img" => null
            ],
            [
                "nama" => "Husnah, S.Pd",
                "job" => "Guru & Staff",
                "img" => null
            ],
            [
                "nama" => "Nur Ilma Laely, A.Md Kom",
                "job" => "Guru & Staff",
                "img" => null
            ],
            [
                "nama" => "Artuty Wahid, S.Pd., M.Pd",
                "job" => "Guru & Staff",
                "img" => null
            ],
            [
                "nama" => "Muhammad Fadli",
                "job" => "Guru & Staff",
                "img" => null
            ],
            [
                "nama" => "Ilham Hatta, S.Pd., M.Pd",
                "job" => "Guru",
                "img" => null
            ],
            [
                "nama" => "Nasri, SE",
                "job" => "Guru",
                "img" => null
            ],
            [
                "nama" => "Yustianingsih, S.Pd.I",
                "job" => "Guru",
                "img" => null
            ],
            [
                "nama" => "Fertina Yusfaarra'd Permadani, S.Pd",
                "job" => "Guru",
                "img" => null
            ],
            [
                "nama" => "Dian Purwanti, S.Pd",
                "job" => "Guru",
                "img" => null
            ],
        ];



        $title = " Tentang Kami";
        $body = "Jelajahi Dunia Pendidikan yang Dinamis & Inovatif Bersama SMK Persada Makassar";
        return view('landing.about', compact("title", "body", "data"));
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
