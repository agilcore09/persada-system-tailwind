<?php

namespace App\Helpers;

class CustomBiaya
{

    public static function CekBiaya($jurusan, $type, $tagihan)
    {
        if ($jurusan == 1 && $type == 1) {
            // jika siswa biasa dan masih smp
            $fpembangunan = 250000;
            $fspp = 40000 * 36;
            $flab = 5000 * 36;
            $fosis = 5000 * 36;
            $fsemester = 50000 * 36;
            $fpsg = 0;
            $fuas = 0;
        } else if ($jurusan == 1 && $type == 2) {
            // jika siswa khusus dan masih smp
            $fpembangunan = 125000;
            $fspp = 40000 * 36;
            $flab = 5000 * 36;
            $fosis = 5000 * 36;
            $fsemester = 50000 * 36;
            $fpsg = 0;
            $fuas = 0;
        } else if ($jurusan == 2 && $type == 1) {
            // siswa tkj biasa
            $fpembangunan = 500000;
            $fspp = 110000 * 36;
            $flab = 15000 * 36;
            $fosis = 10000 * 36;
            $fsemester = 150000 * 36;
            $fpsg = 1000000;
            $fuas = 1500000;
        } else if ($jurusan == 2 && $type == 2) {
            // siswa tkj khusus
            $fpembangunan = 250000;
            $fspp = 110000 * 36;
            $flab = 15000 * 36;
            $fosis = 10000 * 36;
            $fsemester = 150000 * 36;
            $fpsg = 1000000;
            $fuas = 1500000;
        } else if ($jurusan == 3 && $type == 1) {
            // tkr siswa biasa
            $fpembangunan = 500000;
            $fspp = 110000 * 36;
            $flab = 15000 * 36;
            $fosis = 10000 * 36;
            $fsemester = 150000 * 36;
            $fpsg = 1000000;
            $fuas = 1500000;
        } else if ($jurusan == 3 && $type == 2) {
            // tkr siswa khusus
            $fpembangunan = 250000;
            $fspp = 110000 * 36;
            $flab = 15000 * 36;
            $fosis = 10000 * 36;
            $fsemester = 150000 * 36;
            $fpsg = 1000000;
            $fuas = 1500000;
        }

        // penampungan nilai masing masing sesuai nama tabel
        $pembangunan = [];
        $tunggakan = [];
        $spp = [];
        $lab = [];
        $osis = [];
        $semester = [];
        $psg = [];
        $uas = [];
        $alumni = [];

        foreach ($tagihan as $money) {
            $tunggakan[] += $money["tunggakan"];
            $pembangunan[] += $money["pembangunan"];
            $spp[] += $money["spp"];
            $lab[] += $money["lab"];
            $osis[] += $money["osis"];
            $semester[] += $money["semester"];
            $psg[] += $money["psg"];
            $uas[] += $money["uas"];
            $alumni[] += $money["alumni"];
        }

        $totalPembangunan = $fpembangunan - collect($pembangunan)->sum();
        $totalSpp = $fspp - collect($spp)->sum();
        $totalLab = $flab - collect($lab)->sum();
        $totalOsis = $fosis - collect($osis)->sum();
        $totalSemester = $fsemester - collect($semester)->sum();
        $totalPsg = $fpsg - collect($psg)->sum();
        $totalUas = $fuas - collect($uas)->sum();
        $totalAll = $totalPembangunan + $totalSpp + $totalLab + $totalOsis + $totalSemester + $totalPsg + $totalUas;
        return compact("totalPembangunan", "totalSpp", "totalLab", "totalOsis", "totalSemester", "totalPsg", "totalUas", "totalAll");
    }
}
