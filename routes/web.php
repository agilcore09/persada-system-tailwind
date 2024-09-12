<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/home', App\Livewire\Dashboard\Homepage::class);
    Route::get('/data-siswa', App\Livewire\Dashboard\Siswa::class);
    // Route::resource('/data-siswa', SiswaController::class);
    Route::get('/data-siswa/profile/{nis}', [SiswaController::class, 'ShowProfile']);
    Route::get('/tagihan/{nis}', [SiswaController::class, 'ShowTagihan']);
    Route::get('/cetak/{nis}', [SiswaController::class, 'nota']);
    Route::resource('/pembayaran', PembayaranController::class);
    Route::resource('/kelola-inventaris', InventarisController::class);
    Route::get('/show-pendaftar', [PendaftaranController::class, 'index']);
    Route::delete('/pendaftar/{id}', [PendaftaranController::class, 'destroy']);
    Route::resource('/data-guru', GuruController::class);
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/kelola-peminjaman', PeminjamanController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// landing routes
Route::get('/', [LandingPageController::class, 'homePage']);
Route::get('/peminjaman', [PeminjamanController::class, 'formPeminjaman']);
Route::post('/peminjaman', [PeminjamanController::class, 'prosesFormPeminjaman']);
Route::get('/about', [LandingPageController::class, 'aboutPage']);
Route::get('/contact-us', [LandingPageController::class, 'contactPage']);



Route::get('/daftarsmk', function () {
    $title = " SMK PERSADA MAKASSAR";
    $body = "Tumbuh Bersama, Berkarya Bersama SMK PERSADA MAKASSAR";
    return view('landing.smk', compact("title", "body"));
});

Route::get('/daftarsmp', function () {
    $title = " SMK PERSADA MAKASSAR";
    $body = "Tumbuh Bersama, Berkarya Bersama SMK PERSADA MAKASSAR";
    return view('landing.smp', compact("title", "body"));
});

// pendaftaran custom route
Route::post('/daftarsmk', [PendaftaranController::class, 'store']);
Route::post('/daftarsmp', [PendaftaranController::class, 'store']);


require __DIR__ . '/auth.php';
