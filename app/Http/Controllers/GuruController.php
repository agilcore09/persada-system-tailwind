<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\GuruModel;
use App\Models\TypeModel;
use App\Models\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('role_id', 2)->paginate(10);
        $jurusan = CategoryModel::all();
        $kelasSiswa = TypeModel::all();
        return view('Guru.index', compact("data", "jurusan", "kelasSiswa"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
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
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);

        User::insert([
            'name' => $request->nama,
            'email' => $request->email,
            'role_id' => 2,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->to('/data-guru')->with('success', 'Berhasil Menambah Data Guru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuruModel  $guruModel
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuruModel  $guruModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('id', $id)->get()[0];
        return view('Guru.update', compact("data"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuruModel  $guruModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuruModel $guruModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuruModel  $guruModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->to('/data-guru')->with('success', 'Berhasil  Menghapus');
    }
}
