<?php
function Terbilang($nilai) {
        $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        if($nilai==0){
            return "Kosong";
        }elseif ($nilai < 12&$nilai!=0) {
            return "" . $huruf[$nilai];
        } elseif ($nilai < 20) {
            return Terbilang($nilai - 10) . " Belas ";
        } elseif ($nilai < 100) {
            return Terbilang($nilai / 10) . " Puluh " . Terbilang($nilai % 10);
        } elseif ($nilai < 200) {
            return " Seratus " . Terbilang($nilai - 100);
        } elseif ($nilai < 1000) {
            return Terbilang($nilai / 100) . " Ratus " . Terbilang($nilai % 100);
        } elseif ($nilai < 2000) {
            return " Seribu " . Terbilang($nilai - 1000);
        } elseif ($nilai < 1000000) {
            return Terbilang($nilai / 1000) . " Ribu " . Terbilang($nilai % 1000);
        } elseif ($nilai < 1000000000) {
            return Terbilang($nilai / 1000000) . " Juta " . Terbilang($nilai % 1000000);
        }elseif ($nilai < 1000000000000) {
            return Terbilang($nilai / 1000000000) . " Milyar " . Terbilang($nilai % 1000000000);
        }elseif ($nilai < 100000000000000) {
            return Terbilang($nilai / 1000000000000) . " Trilyun " . Terbilang($nilai % 1000000000000);
        }elseif ($nilai <= 100000000000000) {
            return "Maaf Tidak Dapat di Prose Karena Jumlah nilai Terlalu Besar ";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 10px;
            max-width: 14.8cm;
            max-height: 21cm;
        }

        .container {
            max-width: 14.8cm;
            margin: 0 auto;
            border: 1px solid rgb(0, 0, 0);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        .header h1 {
            font-size: 1em;
            margin: 0;
        }

       

        .receipt-info table {
          
            width: 100%;
            border-collapse: collapse;
        }

        .receipt-info td {
            border: 1px solid #ffffff;
        }

        .items {
            margin-top: 10px;
        }

        .items table {
            width: 100%;
            border-collapse: collapse;
        }

        .items th,
        .items td {
            padding: 5px;
            text-align: left;
            border: 1px solid #000000;
        }

        .total {
            /* margin-top: 8px; */
        }

        .total table {
            width: 100%;
            border-collapse: collapse;
        }

        .total th,
        .total td {
            text-align: right;
            border: 1px solid #000000;
        }

        .fw-bold {
            font-weight: bold;
        }

        .text-right {
            text-align: right !important;
        }

        .text-left {
            text-align: left !important;
        }

        .dashed-line {
            border-top: 1px dashed #999;
            width: 80%;
            margin: 7px auto;
        }

        .no-border-top
        {
            border-top: none !important;
        }

        .no-border-bottom
        {
            border-bottom: none !important;

        }

        .px-5
        {
            padding-right: 10px;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h4 style="text-align: center">KWITANSI PEMBAYARAN SMK PERSADA MAKASSAR</h4>
            <hr>
        </div>
        <div class="content">
            <div class="receipt-info">
                <table>
                    <tr>
                        <td>Nama:</td>
                        <td>{{ $data->nama_siswa }}</td>
                        <td>Kelas:</td>
                        <td>{{ $data->kelas }} {{ $data ->nama_jurusan }}</td>
                    </tr>
                    <tr>
                        <td>NIS:</td>
                        <td>{{ $data->nis }}</td>
                        <td>Tanggal:</td>
                        <td>{{ $data->tanggal_bayar }}</td>
                    </tr>
                </table>
            </div>
            <div class="items">
                <table>
                    <tr>
                        <td class="text-right">1. SPP : Rp.{{ $data->spp }}</td>
                        <td>{{ $data->keterangan_spp }}</td>
                        <td>5. PSG : Rp.{{ $data->psg }}  </td>
                        <td>{{ $data->keterangan_spp }}</td>
                    </tr>
                    <tr>
                        <td class="text-right">2. LAB : Rp. {{ $data->lab }}</td>
                        <td>{{ $data->keterangan_lab }}</td>
                        <td>6. US/UKK : Rp.{{ $data->ukk }}</td>
                        <td>{{ $data->keterangan_ukk }}</td>
                    </tr>
                    <tr>
                        <td class="text-right">3. OSIS : Rp. {{ $data->osis }}</td>
                        <td>{{ $data->keterangan_osis }}</td>
                        <td>7. Pembangunan : Rp.{{ $data->pembangunan }}</td>
                        <td>{{ $data->keterangan_pembangunan }}</td>
                    </tr>
                    <tr>
                        <td class="text-right">4. Semester : Rp. {{ $data->semester }}</td>
                        <td>{{ $data->keterangan_semester }}</td>
                        <td>8. Alumni : {{ $data->alumni }}</td>
                        <td>{{ $data->keterangan_alumni }} </td>
                    </tr>
                </table>
            </div>
            <div class="total">
                <table>
                    <tr>
                        <?php  $total = (int)$data->spp + (int)$data->lab + (int)$data->osis + (int)$data->semester + (int)$data->psg + (int)$data->ukk + (int)$data->pembangunan + (int)$data->alumni ?>

                        <td>
                            <p style=" text-align:center;" class="px-5">Jumlah    </p>
                        </td>
                        <td style="text-align: left; width:300px !important; padding-left: 5px;"> : Rp. {{ number_format($total, 0, ',', '.') }}</td>

                        <td style="text-align: center" colspan="2" class="fw-bold no-border-bottom" style="width: 700px !important;">
                            <p style="text-align: center;" class="no-border-bottom">Guru</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="text-align: center !important;">Terbilang     </p>
                        </td>

                        <td style="text-align: left; width:300px !important; padding-left: 5px;"> : {{ Terbilang($total) }}</td>

                        <td colspan="2" class="no-border-bottom no-border-top"></td>
                    </tr>
                   
                    <tr>
                        <td><p style="text-align: center; font-weight:bold;">NO : {{ $data->siswa_id }}</p></td>
                        <td>
                        <p style="text-align: left; padding-left: 5px;">Di cetak pada : {{ $dateNow->toDateString() }}</p>    
                        </td>

                        <td style="text-align: center; " colspan="2" class="no-border-top">
                            <p class="fw-bold">{{ auth()->user()->name }}</p> 
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

 

    <div class="dashed-line"></div>

   

    <div class="container">
        <div class="header">
            <h4 style="text-align: center">KWITANSI PEMBAYARAN SMK PERSADA MAKASSAR</h4>

            <hr>
        </div>
        <div class="content">
            <div class="receipt-info">
                <table>
                    <tr>
                        <td>Nama:</td>
                        <td>{{ $data->nama_siswa }}</td>
                        <td>Kelas:</td>
                        <td>{{ $data->kelas }} {{ $data ->nama_jurusan }}</td>
                    </tr>
                    <tr>
                        <td>NIS:</td>
                        <td>{{ $data->nis }}</td>
                        <td>Tanggal:</td>
                        <td>{{ $dateNow->toDateString() }}</td>
                    </tr>
                </table>
            </div>
            <div class="items">
                <table>


                    <tr>
                        <td class="text-right">1. SPP : Rp.{{ $data->spp }}</td>
                        <td>{{ $data->keterangan_spp }}</td>
                        <td>5. PSG : Rp.{{ $data->psg }}  </td>
                        <td>{{ $data->keterangan_spp }}</td>
                    </tr>
                    <tr>
                        <td class="text-right">2. LAB : Rp. {{ $data->lab }}</td>
                        <td>{{ $data->keterangan_lab }}</td>
                        <td>6. US/UKK : Rp.{{ $data->ukk }}</td>
                        <td>{{ $data->keterangan_ukk }}</td>
                    </tr>
                    <tr>
                        <td class="text-right">3. OSIS : Rp. {{ $data->osis }}</td>
                        <td>{{ $data->keterangan_osis }}</td>
                        <td>7. Pembangunan : Rp.{{ $data->pembangunan }}</td>
                        <td>{{ $data->keterangan_pembangunan }}</td>
                    </tr>
                    <tr>
                        <td class="text-right">4. Semester : Rp. {{ $data->semester }}</td>
                        <td>{{ $data->keterangan_semester }}</td>
                        <td>8. Alumni : {{ $data->alumni }}</td>
                        <td>{{ $data->keterangan_alumni }} </td>
                    </tr>
                </table>
            </div>
            <div class="total">
                <table>
                    <tr>
                        <?php  $total = (int)$data->spp + (int)$data->lab + (int)$data->osis + (int)$data->semester + (int)$data->psg + (int)$data->ukk + (int)$data->pembangunan + (int)$data->alumni ?>

                        <td>
                            <p style=" text-align:center;" class="px-5">Jumlah    </p>
                        </td>
                        <td style="text-align: left; width:300px !important; padding-left: 5px;"> : Rp. {{ number_format($total, 0, ',', '.') }}</td>

                        <td style="text-align: center" colspan="2" class="fw-bold no-border-bottom" style="width: 700px !important;">
                            <p style="text-align: center;" class="no-border-bottom">Guru</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="text-align: center !important;">Terbilang     </p>
                        </td>

                        
                        <td style="text-align: left; width:300px !important; padding-left: 5px;"> : {{ Terbilang($total) }}</td>

                        <td colspan="2" class="no-border-bottom no-border-top"></td>
                    </tr>
                   
                    <tr>
                        <td><p style="text-align: center; font-weight:bold;">NO : {{ $data->siswa_id }}</p></td>
                        <td>
                            <p style="text-align: left; padding-left: 5px;">Di cetak pada : {{ $dateNow->toDateString() }}</p>    
                        </td>  

                        <td style="text-align: center; " colspan="2" class="no-border-top">
                            <p class="fw-bold">{{ auth()->user()->name }}</p> 
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>


</body>

</html>
