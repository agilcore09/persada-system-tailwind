<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!is_null($request->peminjam)) {
            $data = PeminjamanModel::where('nama_lengkap', 'like', '%' .  $request->peminjam . '%')->get();
            return response()->json([
                "data" => $data,
                "message" => "berhasil tangkap",
                "success" => true
            ]);
        } else if (!is_null($request->tanggal1) && !is_null($request->tanggal2)) {

            $data = PeminjamanModel::whereBetween('tanggal_peminjaman', [$request->tanggal1, $request->tanggal2])->get();
            return response()->json([
                "data" => $data,
                "message" => "berhasil Menangkap Data",
                "success" => true
            ]);
        } else {
            $data = PeminjamanModel::paginate(10);
        }

        return view('peminjaman.index', compact("data"));
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
    public function edit(PeminjamanModel $peminjaman, $id)
    {
        $peminjaman::where('id', $id)->update([
            'status' => 'Di Kembalikan',
            'updated_at' => Carbon::now()
        ]);
        return redirect()->to('/kelola-peminjaman');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PeminjamanModel  $peminjamanModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeminjamanModel $peminjaman, $id)
    {
        $peminjaman->where('id', $id)->update([
            'updated_at' => Carbon::now(),
            'status' => 'Di Kembalikan'
        ]);

        return redirect()->to('kelola-peminjaman')->with('success', 'Berhasil Mengupdate Data!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PeminjamanModel  $peminjamanModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('peminjaman')->where('id', $id)->delete();
        return redirect()->to('/kelola-peminjaman');
    }

    public function formPeminjaman()
    {
        $title = "Peminjaman Peminjaman Barang";
        $body = "Tolong lengkapi form terlebih dahulu  sebelum meminjam barang di lab";
        return view('landing.form_peminjaman', compact("title", "body"));
    }


    public function prosesFormPeminjaman(Request $request, PeminjamanModel $pinjam)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'kelas' => 'required',
            'nama_barang' => 'required',
            'kode_barang' => 'required',
            'keperluan' => 'required',
        ]);

        $pinjam::insert([
            'nama_lengkap' => $request->nama_lengkap,
            'kelas' => $request->kelas,
            'nama_barang' => $request->nama_barang,
            'kode_barang' => $request->kode_barang,
            'keperluan' => $request->keperluan,
            'tanggal_peminjaman' => Carbon::now(),
            'status' => 'Di Pinjam'
        ]);

        return redirect()->back()->with(['success' => 'Berhasil melakukan peminjaman. Tolong di kembalikan']);
    }
}
