@extends('core.index')
@section('content')
    <div class="container">
        <div class="mt-14 px-5">
            <nav class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
                <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                    <div class="capitalize">
                        <nav aria-label="breadcrumb" class="w-max">
                            <ol
                                class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                                <li
                                    class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                    <a href="#">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100">
                                            dashboard</p>
                                    </a>
                                    <span
                                        class="text-gray-500 text-sm antialiased font-sans font-normal leading-normal mx-2 pointer-events-none select-none">/</span>
                                </li>
                                <li
                                    class="flex items-center text-blue-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-blue-500">
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                        Pendaftaran Siswa</p>
                                </li>
                            </ol>
                        </nav>
                        <h6
                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">
                            List Pendaftar</h6>
                    </div>

                </div>
            </nav>
        </div>
    </div>


    <div class="container mt-9 display-table">


        {{-- table section --}}
        <div class="container table-pembayaran">
            {{-- on card table section --}}
            <div class="table-section">
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto overflow-y-scroll h-screen">
                            {{-- loading section --}}
                            <div class="h-full bg-white loading">
                                <div class="flex justify-center items-center h-full">
                                    <img class="h-16 w-16"
                                        src="https://icons8.com/preloaders/preloaders/1488/Iphone-spinner-2.gif"
                                        alt="">
                                </div>
                            </div>
                            {{-- end loading section --}}
                            <table class="w-full table pembayaran">
                                <thead class="sticky top-0">
                                    <tr
                                        class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-20 py-3">No</th>
                                        <th class="px-20 py-3">Foto</th>
                                        <th class="px-20 py-3">Nama</th>
                                        <th class="px-20 py-3">Tanggal Lahir</th>
                                        <th class="px-20 py-3">Tempat Lahir </th>
                                        <th class="px-20 py-3">No Whatsapp</th>
                                        <th class="px-20 py-3">Alamat</th>
                                        <th class="px-20 py-3">Orang Tua/Wali</th>
                                        <th class="px-20 py-3">Nomor Ortu/Wali</th>
                                        <th class="px-20 py-3">Jurusan</th>
                                        <th class="px-20 py-3">Tanggal Daftar</th>
                                        <th class="px-4 py-3">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white" id="tbody">
                                    <?php $no = 1; ?>
                                    @foreach ($data as $item)
                                        <tr class="text-gray-700 text-center">
                                            <td class="px-4 py-3 text-ms border">
                                                {{ $no++ }}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">
                                                <img src="{{ asset('/pendaftar' . '/' . $item->gambar) }}" alt="">
                                            </td>
                                            <td class="px-4 py-3 text-ms border">
                                                {{ $item->nama }}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">{{ $item->tanggal_lahir }}</td>
                                            <td class="px-4 py-3 text-ms border">{{ $item->tempat_lahir }}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->no_wa }}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->alamat }}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->nama_wali }}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->wa_wali }}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->jurusan }}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->created_at }}</td>
                                            <td class="px-4 py-3 text-ms border">
                                                <div class="flex justify-center">
                                                    {{-- <a href="{{ url('/pendaftar' . '/' . $item->id . '/edit') }}"><i
                                                            class="fa-solid fa-circle-info text-green-500 mr-1  "></i></a> --}}
                                                    <form action="{{ url('/pendaftar' . '/' . $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"> <i
                                                                class="fa-solid fa-trash text-red-600 ml-1"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="container my-5 px-5">
                                {{ $data->links() }}
                            </div>

                        </div>


                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
