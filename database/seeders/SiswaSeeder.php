<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert(
            [
                "gambar" => "siswa.jpg",
                "nama_siswa" => "Achmad Dzulfikar",
                "nis" => 222006,
                "nisn" => 222006,
                "kelas" => "VII A",
                "category_id" => 1,
                "type_id" => 1
            ]
        );
        DB::table('siswa')->insert(
            [
                "gambar" => "siswa.jpg",
                "nama_siswa" => "Fahrul Gunawan",
                "nis" => 222007,
                "nisn" => 222007,
                "kelas" => "VII A",
                "category_id" => 2,
                "type_id" => 2
            ]
        );
        DB::table('siswa')->insert(
            [
                "gambar" => "siswa.jpg",
                "nama_siswa" => "Marsha Lanathea Lapian",
                "nis" => 222008,
                "nisn" => 222008,
                "kelas" => "X",
                "category_id" => 1,
                "type_id" => 1
            ]
        );
        DB::table('siswa')->insert(
            [
                "gambar" => "siswa.jpg",
                "nama_siswa" => "Ayumi",
                "nis" => 222009,
                "nisn" => 222009,
                "kelas" => "XII",
                "category_id" => 2,
                "type_id" => 2
            ]
        );
    }
}
