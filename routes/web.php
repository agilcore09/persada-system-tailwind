<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/home', function () {
        return view('core.dashboard');
    });
    Route::resource('/data-siswa', SiswaController::class);
    Route::get('/data-siswa/profile/{nis}', [SiswaController::class, 'ShowProfile']);
    Route::get('/tagihan/{nis}', [SiswaController::class, 'ShowTagihan']);
    Route::get('/cetak/{nis}', [SiswaController::class, 'nota']);
    Route::resource('/pembayaran', PembayaranController::class);
    Route::resource('/kelola-inventaris', InventarisController::class);
    Route::get('/show-pendaftar', [PendaftaranController::class, 'index']);
    Route::delete('/pendaftar/{id}', [PendaftaranController::class, 'destroy']);
    Route::resource('/data-guru', GuruController::class);
    Route::resource('/kategori', KategoriController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// landing routes
Route::get('/', function () {
    $title = " SMK PERSADA MAKASSAR";
    $body = "Tumbuh Bersama, Berkarya Bersama SMK PERSADA MAKASSAR";
    return view('landing.homepage', compact("title", "body"));
});

Route::get('/about', function () {
    $title = " Tentang Kami";
    $body = "Jelajahi Dunia Pendidikan yang Dinamis & Inovatif Bersama SMK Persada Makassar";
    return view('landing.about', compact("title", "body"));
});

Route::get('/contact-us', function () {
    $title = " Contact Us";
    $body = "Untuk informasi lebih lanjut atau pertanyaan, jangan ragu untuk menghubungi kami melalui kontak di bawah ini";
    return view('landing.contact_us', compact("title", "body"));
});

Route::get('/peminjaman', function () {
    $title = "Peminjaman Peminjaman Barang";
    $body = "Tolong lengkapi form terlebih dahulu  sebelum meminjam barang di lab";
    return view('landing.form_peminjaman', compact("title", "body"));
});

Route::get('/berita', function () {
    $title = "Berita Kami";
    $body = "Nantikan berita terbaru dari kami";
    return view('landing.berita', compact("title", "body"));
});

Route::get('/daftarsmk', function () {
    return view('landing.smk');
});

Route::get('/daftarsmp', function () {
    return view('landing.smp');
});

// pendaftaran custom route
Route::post('/daftarsmk', [PendaftaranController::class, 'store']);
Route::post('/daftarsmp', [PendaftaranController::class, 'store']);


require __DIR__ . '/auth.php';
