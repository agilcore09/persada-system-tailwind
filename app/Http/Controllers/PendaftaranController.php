<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PendaftaranModel::paginate(10);
        return view('pendaftaran.index', compact("data"));
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

        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'nama' => 'required|max:50',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'no_wa' => 'required',
            'nama_wali' => 'required',
            'wa_wali' => 'required',
            'jurusan' => 'required',

        ]);

        // save pendaftar
        $gambar = $request->file('gambar');
        $nama_file = time() . "_" . $gambar->getClientOriginalName();
        $tujuan = 'pendaftar';
        $gambar->move($tujuan, $nama_file);

        $namaLengkap = $request->nama_depan . " " . $request->nama_belakang;

        PendaftaranModel::create([
            "gambar" => $nama_file,
            "nama" => $namaLengkap,
            "tanggal_lahir" => $request->tanggal_lahir,
            "tempat_lahir" => $request->tempat_lahir,
            "no_wa" => $request->no_wa,
            "alamat" => $request->alamat,
            "nama_wali" => $request->nama_wali,
            "jurusan" => $request->jurusan,
            "wa_wali" => $request->wa_wali,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, PendaftaranModel $pendaftar)
    {
        $pendaftar->where('id', '=', $id)->delete();
        return redirect()->to("/show-pendaftar")->with("success", "Berhasil Menghapus Data");
    }
}
