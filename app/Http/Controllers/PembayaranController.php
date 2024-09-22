<?php

namespace App\Http\Controllers;

use App\Models\PembayaranModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $nama_siswa = DB::table('siswa')->get();
        $nama_jurusan = DB::table('category')->get();
        $kelas_siswa = DB::table('type')->get();

        // mencari berdasarkan nama sisa
        if (!is_null($request->search)) {
            $data = DB::table('siswa')
                ->join('category', 'siswa.category_id', 'category.id')
                ->join('type', 'siswa.type_id', 'type.id')
                ->join('pembayaran', 'pembayaran.siswa_id', 'siswa.id')
                ->where('siswa.nama_siswa', 'like', '%' . $request->search . '%')
                ->orderBy('pembayaran.tanggal_bayar', 'ASC')
                ->get();

            return response()->json([
                "data" => $data,
                "message" => "berhasil tangkap",
                "success" => true
            ]);
        }

        // mengorder by tanggal
        else if ($request->tanggal1 && $request->tanggal2 != null) {
            $data = DB::table("siswa")
                ->join('category', 'siswa.category_id', 'category.id')
                ->join('type', 'siswa.type_id', 'type.id')
                ->join('pembayaran', 'pembayaran.siswa_id', 'siswa.id')
                ->whereBetween('pembayaran.tanggal_bayar', [$request->tanggal1, $request->tanggal2])
                ->orderBy('pembayaran.tanggal_bayar', 'DESC')
                ->get();

            return response()->json([
                "data" => $data,
                "message" => "berhasil tangkap",
                "success" => true
            ]);
        } else {
            // menampilkan semuanya
            $data = PembayaranModel::orderBy('pembayaran.tanggal_bayar', 'DESC')->paginate(10);
        }

        return view('pembayaran.index', compact("nama_siswa", "nama_jurusan", "kelas_siswa", "data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());

        $request->validate([
            'nama_siswa' => 'required',
            'pembangunan' => 'required',
            'keterangan_pembangunan' => 'required',
            'spp' => 'required',
            'keterangan_spp' => 'required',
            'lab' => 'required',
            'keterangan_lab' => 'required',
            'osis' => 'required',
            'keterangan_osis' => 'required',
            'psg' => 'required',
            'keterangan_psg' => 'required',
            'semester' => 'required',
            'keterangan_semester' => 'required',
            'ukk' => 'required',
            'keterangan_ukk' => 'required',
            'alumni' => 'required',
            'keterangan_alumni' => 'required'
        ]);

        PembayaranModel::create([

            'siswa_id' => (int)$request->nama_siswa,
            'pembangunan' => $request->pembangunan,
            'keterangan_pembangunan' => $request->keterangan_pembangunan,
            'spp' => $request->spp,
            'keterangan_spp' => $request->keterangan_spp,
            'lab' => $request->lab,
            'keterangan_lab' => $request->keterangan_lab,
            'osis' => $request->osis,
            'keterangan_osis' => $request->keterangan_osis,
            'psg' => $request->psg,
            'keterangan_psg' => $request->keterangan_psg,
            'semester' => $request->semester,
            'keterangan_semester' => $request->keterangan_semester,
            'ukk' => $request->ukk,
            'keterangan_ukk' => $request->keterangan_ukk,
            'alumni' => $request->alumni,
            'keterangan_alumni' => $request->keterangan_alumni,
            'tanggal_bayar' => Carbon::now()
        ]);

        return redirect()->to('/pembayaran')->with('success', 'Berhasil Menambah Data Pembayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function show(PembayaranModel $pembayaranModel) {}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PembayaranModel $pembayaranModel, $id)
    {
        $data = $pembayaranModel->find($id);
        return view('pembayaran.update', compact("data"));
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PembayaranModel $pembayaranModel, $id)
    {
        $request->validate([
            'nama_siswa' => 'required',
            'pembangunan' => 'required',
            'keterangan_pembangunan' => 'required',
            'spp' => 'required',
            'keterangan_spp' => 'required',
            'lab' => 'required',
            'keterangan_lab' => 'required',
            'osis' => 'required',
            'keterangan_osis' => 'required',
            'psg' => 'required',
            'keterangan_psg' => 'required',
            'semester' => 'required',
            'keterangan_semester' => 'required',
            'ukk' => 'required',
            'keterangan_ukk' => 'required',
            'alumni' => 'required',
            'keterangan_alumni' => 'required'
        ]);

        $pembayaranModel->find($id)->update([
            'siswa_id' => (int)$request->nama_siswa,
            'pembangunan' => $request->pembangunan,
            'keterangan_pembangunan' => $request->keterangan_pembangunan,
            'spp' => $request->spp,
            'keterangan_spp' => $request->keterangan_spp,
            'lab' => $request->lab,
            'keterangan_lab' => $request->keterangan_lab,
            'osis' => $request->osis,
            'keterangan_osis' => $request->keterangan_osis,
            'psg' => $request->psg,
            'keterangan_psg' => $request->keterangan_psg,
            'semester' => $request->semester,
            'keterangan_semester' => $request->keterangan_semester,
            'ukk' => $request->ukk,
            'keterangan_ukk' => $request->keterangan_ukk,
            'alumni' => $request->alumni,
            'keterangan_alumni' => $request->keterangan_alumni,
            'tanggal_bayar' => Carbon::now()
        ]);

        return redirect()->to('/pembayaran')->with('success', 'Berhasil Memperbarui Data Pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembayaranModel $pembayaranModel, $id)
    {
        $pembayaranModel->where('id', '=', $id)->delete();
        return redirect()->to("/pembayaran")->with("success", "Berhasil Menghapus Data");
    }
}
