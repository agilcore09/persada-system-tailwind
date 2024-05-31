<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>SMK PERSADA</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="grid grid-cols-12  ">
        <div class="col-span-12 sm:col-span-3 md:col-span-3">
            @include('core.sidebar')
        </div>
        <div class="col-span-12 sm:col-span-9 md-col-span-9">
            @yield('content')
        </div>
    </div>
    <script src="jquery.js"></script>
    <script src="custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('jquery.js') }}"></script>
    <script>
        // navbar
        const toggleButton = document.getElementById('toggle');
        $('#toggle').click(() => {
            $('#navbar').toggle("slow")
        })

        // pencarian by nis
        $('#search-nis').on('input', () => {
            let search = $('#search-nis').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `/pembayaran?search=${search}`,
                type: 'GET',
                contentType: false,
                processData: false,
                success: function(response) {
                    const tbody = $('#tbody');
                    const data = response.data;
                    tbody.empty()

                    console.log(data);

                    if (search != "" || search != null || search != empty) {
                        for (const datas of data) {
                            tbody.append(`
                                           <tr class="text-gray-700 text-center">
                                            <td class="px-4 py-3 text-ms border">
                                            ${datas.tanggal_bayar}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">
                                              ${datas.nama_siswa}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">
                                               ${datas.kelas}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">${datas.nis}</td>
                                            <td class="px-4 py-3 text-ms border">${datas.nisn}</td>
                                            <td class="px-4 py-3 text-ms border">
                                               ${datas.nama_jurusan}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.pembangunan}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.tunggakan}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.spp}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.lab}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.osis}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.semester_ganjil}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.semester_genap}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.psg}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.lab}</td>
                                            <td class="px-4 py-3 text-ms border">${datas.keterangan}</td>
                                            <td class="px-4 py-3 text-ms border">
                                                <div class="flex justify-center">
                                                    <a href="/pembayaran/${datas.id}/edit"><i
                                                            class="fa-solid fa-circle-info text-green-500 mr-1  "></i></a>
                                                    <form action="/pembayaran/${datas.id}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"> <i
                                                                class="fa-solid fa-trash text-red-600 ml-1"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        `)
                        }
                    }

                }
            })
        })

        // pencarian by nama guru
        $('#search-guru').on('input', () => {
            let search = $('#search-guru').val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `/data-guru?guru=${search}`,
                type: 'GET',
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response.data)
                    const tbody = $('#tbody');
                    const data = response.data;
                    tbody.empty()
                    console.log(data);
                    if (search != "" || search != null || search != empty) {
                        for (const datas of data) {
                            tbody.append(`
                                           <tr class="text-gray-700 text-center">
                                            
                                            <td class="px-4 py-3 text-ms border">
                                              ${datas.name}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">
                                               ${datas.email}
                                            </td>
                                           
                                            <td class="px-4 py-3 text-ms border">
                                                <div class="flex justify-center">
                                                    <a href="/data-guru/${datas.id}/edit"><i
                                                            class="fa-solid fa-circle-info text-green-500 mr-1  "></i></a>
                                                    <form action="/data-guru/${datas.id}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"> <i
                                                                class="fa-solid fa-trash text-red-600 ml-1"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        `)
                        }
                    }

                }
            })
        })

        // jika tombol rekap by tanggal di bagian pembayaran di tekan
        $('#tanggal1, #tanggal2').on("change", () => {
            const tanggal1 = $('#tanggal1').val();
            const tanggal2 = $('#tanggal2').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `/pembayaran?tanggal1=${tanggal1}&&tanggal2=${tanggal2}`,
                type: 'GET',
                contentType: false,
                processData: false,
                success: function(response) {
                    const tbody = $('#tbody');
                    const data = response.data;
                    tbody.empty();

                    if (tanggal1 != null && tanggal2 != null) {

                        for (const datas of data) {
                            tbody.append(`
                                                            <tr class="text-gray-700 text-center">
                                                                <td class="px-4 py-3 text-ms border">
                                                                ${datas.tanggal_bayar}
                                                                </td>
                                                                <td class="px-4 py-3 text-ms border">
                                                                ${datas.nama_siswa}
                                                                </td>
                                                                <td class="px-4 py-3 text-ms border">
                                                                ${datas.kelas}
                                                                </td>
                                                                <td class="px-4 py-3 text-ms border">${datas.nis}</td>
                                                                <td class="px-4 py-3 text-ms border">${datas.nisn}</td>
                                                                <td class="px-4 py-3 text-ms border">
                                                                ${datas.nama_jurusan}</td>
                                                                <td class="px-4 py-3 text-ms border">Rp. ${datas.pembangunan}</td>
                                                                <td class="px-4 py-3 text-ms border">Rp. ${datas.tunggakan}</td>
                                                                <td class="px-4 py-3 text-ms border">Rp. ${datas.spp}</td>
                                                                <td class="px-4 py-3 text-ms border">Rp. ${datas.lab}</td>
                                                                <td class="px-4 py-3 text-ms border">Rp. ${datas.osis}</td>
                                                                <td class="px-4 py-3 text-ms border">Rp. ${datas.semester}</td>
                                
                                                                <td class="px-4 py-3 text-ms border">Rp. ${datas.psg}</td>
                                                                <td class="px-4 py-3 text-ms border">Rp. ${datas.lab}</td>
                                                                <td class="px-4 py-3 text-ms border">${datas.keterangan}</td>
                                                                <td class="px-4 py-3 text-ms border">
                                                                    <div class="flex justify-center">
                                                                        <a href="/pembayaran/${datas.id}/edit"><i
                                                                                class="fa-solid fa-circle-info text-green-500 mr-1  "></i></a>
                                                                        <form action="/pembayaran/${datas.id}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"> <i
                                                                                    class="fa-solid fa-trash text-red-600 ml-1"></i></button>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                    `)
                        }
                    }
                }
            })

        })


        // cari barang
        $('#cari_barang').on('input', () => {
            let search = $('#cari_barang').val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `/kelola-inventaris?cari_barang=${search}`,
                type: 'GET',
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response.data)
                    const tbody = $('#tbody');
                    const data = response.data;
                    tbody.empty()
                    console.log(data);
                    // if (search != "" || search != null || search != empty) {
                    //     for (const datas of data) {
                    //         tbody.append(`
                //                        <tr class="text-gray-700 text-center">

                //                         <td class="px-4 py-3 text-ms border">
                //                           ${datas.name}
                //                         </td>
                //                         <td class="px-4 py-3 text-ms border">
                //                            ${datas.email}
                //                         </td>

                //                         <td class="px-4 py-3 text-ms border">
                //                             <div class="flex justify-center">
                //                                 <a href="/data-guru/${datas.id}/edit"><i
                //                                         class="fa-solid fa-circle-info text-green-500 mr-1  "></i></a>
                //                                 <form action="/data-guru/${datas.id}"
                //                                     method="POST">
                //                                     @csrf
                //                                     @method('DELETE')
                //                                     <button type="submit"> <i
                //                                             class="fa-solid fa-trash text-red-600 ml-1"></i></button>
                //                                 </form>
                //                             </div>
                //                         </td>
                //                     </tr>
                //                     `)
                    //     }
                    // }

                }
            })
        })
    </script>



</body>

</html>
