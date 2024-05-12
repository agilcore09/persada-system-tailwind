<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanModel;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('peminjaman.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PeminjamanModel  $peminjamanModel
     * @return \Illuminate\Http\Response
     */
    public function show(PeminjamanModel $peminjamanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PeminjamanModel  $peminjamanModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PeminjamanModel $peminjamanModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PeminjamanModel  $peminjamanModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeminjamanModel $peminjamanModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PeminjamanModel  $peminjamanModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeminjamanModel $peminjamanModel)
    {
        //
    }

    public function formPeminjaman()
    {
        $title = "Peminjaman Peminjaman Barang";
        $body = "Tolong lengkapi form terlebih dahulu  sebelum meminjam barang di lab";
        return view('landing.form_peminjaman', compact("title", "body"));
    }


    public function prosesFormPeminjaman(Request $request)
    {

        $request->validate([
            'nama_lengkap' => 'required',
            'kelas' => 'required',
            'nama_barang' => 'required',
            'nama_barang' => 'required',
            'kode_barang' => 'required',
            'keperluan' => 'required',
        ]);

        dd($request->all());
    }
}
