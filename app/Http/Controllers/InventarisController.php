<?php

namespace App\Http\Controllers;

use App\Models\InventarisModel;
use App\Models\KategoriModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $kategori = KategoriModel::where('jenis_kategori', 'Inventaris')->get();
        return view('inventaris.index', compact("data", "kategori"));
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

        $request->validate([
            'nama_barang' => 'required',
            'kode_alat' => 'required',
            'sumber' => 'required',
            'kategori' => 'required',
            'lokasi' => 'required',
            'status' => 'required',
            'gambar' => 'required|max:1024|mimes:jpg, png, jpeg, JPG, PNG, JPEG'
        ]);


        if (!is_null($request->gambar)) {
            $gambar = $request->file('gambar');
            $namaFile = time() . "_" . $gambar->getClientOriginalName();
            Storage::disk('local')->put('/public/inventaris/' . $namaFile, File::get($gambar));

            InventarisModel::insert([
                'nama_barang' => $request->nama_barang,
                'kode_alat' => $request->kode_alat,
                'sumber' => $request->sumber,
                'tanggal_masuk' => Carbon::now(),
                'kategori' => $request->kategori,
                'lokasi' => $request->lokasi,
                'status' => $request->status,
                'gambar' => $namaFile
            ]);

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InventarisModel  $inventarisModel
     * @return \Illuminate\Http\Response
     */
    public function show(InventarisModel $inventarisModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InventarisModel  $inventarisModel
     * @return \Illuminate\Http\Response
     */
    public function edit(InventarisModel $inventarisModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InventarisModel  $inventarisModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventarisModel $inventarisModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InventarisModel  $inventarisModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(InventarisModel $inventarisModel)
    {
        //
    }
}
