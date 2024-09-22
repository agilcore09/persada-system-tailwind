<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\GuruModel;
use App\Models\TypeModel;
use App\Models\User;
use FontLib\Table\Type\name;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $this->authorize('isAdmin');

        if ($request->guru != null) {
            $data = User::where('role_id', 2)->where('name', 'like', '%' . $request->guru . '%')->get();
            return response()->json([
                "data" => $data,
                "message" => "berhasil tangkap",
                "success" => true
            ]);
        } else {
            $data = User::where('role_id', 2)->paginate(10);
        }
        $jurusan = CategoryModel::all();
        $kelasSiswa = TypeModel::all();
        return view('Guru.index', compact("data", "jurusan", "kelasSiswa"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
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
        $this->authorize('isAdmin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuruModel  $guruModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('isAdmin');
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
    public function update(Request $request, $id)
    {
        $this->authorize('isAdmin');
        $request->validate([
            'nama' => 'required',
            'email' => 'required',

        ]);

        if (is_null($request->password)) {
            User::where('id', $id)->update([
                'name' => $request->nama,
                'email' => $request->email
            ]);
        } else {
            User::where('id', $id)->update([
                'name' => $request->name,
                'password' => bcrypt($request->password),
                'email' => $request->email
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuruModel  $guruModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('isAdmin');
        User::where('id', $id)->delete();
        return redirect()->to('/data-guru')->with('success', 'Berhasil  Menghapus');
    }
}
