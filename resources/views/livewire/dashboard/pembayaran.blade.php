@extends('livewire.dashboard.partials.core')
@section('content')
    {{-- header --}}
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
                                        Pembayaran Siswa</p>
                                </li>
                            </ol>
                        </nav>
                        <h6
                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">
                            Pembayaran</h6>
                    </div>

                </div>
            </nav>
        </div>
    </div>

    {{-- end header --}}
    @if (session()->has('success'))
        <div class="container error error-click mt-5" id="alertbox">
            <div class="container bg-green-500 flex items-center text-white text-sm font-bold px-4 py-3 relative"
                role="alert">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                </svg>
                <p>{{ session()->get('success') }}</p>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton">
                    <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        </div>
    @endif
    {{-- dashboard table view --}}
    <div class="container mt-9 display-table">
        <div class="px-6 grid grid-cols-10">
            {{-- button wrap --}}
            <div class="buton-wrap col-span-5 pt-2 flex">
                <div>
                    <button
                        class="middle none center flex items-center justify-center rounded-lg p-4 font-sans text-xs font-bold uppercase bg-gray-200 text-gray-900 transition-all hover:bg-gray-50/50 active:bg-gray-500 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-dark="true" id="btn-add-pembayaran">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
                <div>
                    <form action="" class="ml-3 mx-auto flex">
                        <div class="mr-1">
                            <input type="date" id="tanggal1" name="tanggal1"
                                class="w-full px-4 py-2 border border-gray-900 rounded-md shadow-sm focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-200">
                        </div>
                        <div class="ml-1">
                            <input type="date" id="tanggal2" name="tanggal2"
                                class="w-full px-4 py-2 border border-gray-900 rounded-md shadow-sm focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-200">

                        </div>
                    </form>
                </div>
            </div>
            {{-- end button wrap --}}

            {{-- search section --}}
            <div class="search-wrap col-span-5 flex justify-end">
                <div>
                    <div class="pt-2 relative mx-auto text-gray-900">
                        <input
                            class="border-2 border-gray-900 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                            type="search-nis" name="search" placeholder="Cari Nama" autocomplete="off" id="search-nis">
                        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                            <svg class="text-gray-900 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            {{-- end section --}}
        </div>




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

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            @endif
                            {{-- end loading section --}}
                            <table class="w-full table pembayaran">
                                <thead class="sticky top-0">
                                    <tr
                                        class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-20 py-3">Tanggal Bayar</th>
                                        <th class="px-20 py-3">Nama Siswa</th>
                                        <th class="px-20 py-3">Kelas</th>
                                        <th class="px-20 py-3">NIS</th>
                                        <th class="px-20 py-3">NISN</th>
                                        <th class="px-20 py-3">Jurusan</th>
                                        <th class="px-20 py-3">Pembangunan</th>

                                        <th class="px-20 py-3">SPP</th>
                                        <th class="px-20 py-3">LAB</th>
                                        <th class="px-20 py-3">OSIS</th>
                                        <th class="px-20 py-3">Semester</th>
                                        <th class="px-20 py-3">PSG</th>
                                        <th class="px-20 py-3">UKK</th>
                                        <th class="px-20 py-3">Alumni</th>
                                        <th class="px-4 py-3">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white" id="tbody">
                                    @foreach ($data as $item)
                                        <tr class="text-gray-700 text-center">
                                            <td class="px-4 py-3 text-ms border">
                                                {{ $item->tanggal_bayar }}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">
                                                {{ $item->Siswa->nama_siswa }}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">
                                                {{ $item->Siswa->kelas }}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">{{ $item->Siswa->nis }}</td>
                                            <td class="px-4 py-3 text-ms border">{{ $item->Siswa->nisn }}</td>
                                            <td class="px-4 py-3 text-ms border">
                                                {{ $item->Siswa->Category->nama_jurusan }}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->pembangunan }}</td>

                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->spp }}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->lab }}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->osis }}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->semester }}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->psg }}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->ukk }}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. {{ $item->alumni }}</td>
                                            <td class="px-4 py-3 text-ms border">
                                                <div class="flex justify-center">
                                                    <a href="{{ url('/cetak' . '/' . $item->id) }}">
                                                        <i class="fa-solid fa-print text-blue-500 mr-1"></i>
                                                    </a>
                                                    @can('isAdmin')
                                                        <a href="{{ url('/pembayaran' . '/' . $item->id . '/edit') }}"><i
                                                                class="fa-solid fa-circle-info text-green-500 mr-1  "></i></a>
                                                        <form action="{{ url('/pembayaran' . '/' . $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"> <i
                                                                    class="fa-solid fa-trash text-red-600 ml-1"></i></button>
                                                        </form>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                        {{-- @if ((request()->tanggal1 == null && request()->tanggal2 == null) || request()->tanggal1 == null || request->tanggal2 == null)
                            <div class="container my-5 px-5">
                                {{ $data->links() }}
                            </div>
                        @endif --}}

                    </div>
                </section>
            </div>
        </div>
    </div>
    {{-- end dashboard table view --}}
    <div class="container display-add bg-white shadow-xl p-9 hidden">
        <form method="POST" action="{{ url('pembayaran') }}" id="form-update">
            @csrf
            @method('POST')
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">form Input Pembayaran</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Tambahkan Pembayaran Siswa</p>


                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="jurusan" class="block text-sm font-medium leading-6 text-gray-900">Pilih
                                Siswa</label>
                            <div class="mt-3">

                                <input type="text" id="searchInput"
                                    class="rounded-lg mb-5 border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                                    placeholder="Cari Siswa">

                                <select id="nama_siswa" name="nama_siswa" autocomplete="off" required
                                    class="rounded-lg nama_siswa border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5">

                                    <option value="">Pilih Siswa</option>

                                    @foreach ($nama_siswa as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->nama_siswa }} || {{ $item->nis }} || {{ $item->nisn }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="pembangunan" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                Pembangunan
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('pembangunan') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>
                                <input type="number" required id="pembangunan" name="pembangunan" value="0"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('pembangunan') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('pembangunan')) Form ini kosong!!! @else Masukkan Biaya Pembangunan @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="keterangan_pembangunan"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Keterangan
                                Pembangunan
                            </label>
                            <div class="flex">

                                <input type="text" id="keterangan_pembangunan" name="keterangan_pembangunan"
                                    value="-"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('keterangan_pembangunan') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('keterangan_pembangunan')) Form ini kosong!!! @else Masukkan Keterangan Pembangunan @endif">
                            </div>
                        </div>


                        <div class="col-span-full">
                            <label for="spp" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                SPP
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0  @error('spp') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>
                                <input type="number" required id="spp" name="spp" value="0"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm  @error('spp') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('spp')) Form ini kosong!!! @else Masukkan Biaya SPP @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="keteranga_spp"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Keterangan
                                SPP
                            </label>
                            <div class="flex">

                                <input type="text" id="keterangan_spp" name="keterangan_spp" value="-"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('pembangunan') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('keterangan_spp')) Form ini kosong!!! @else Masukkan Keterangan SPP @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="lab" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                LAB
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('lab') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>
                                <input type="number" required id="lab" name="lab" value="0"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('lab') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('lab')) Form ini kosong!!! @else Masukkan Biaya LAB @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="keterangan_lab"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Keterangan
                                LAB
                            </label>
                            <div class="flex">

                                <input type="text" id="keterangan_lab" name="keterangan_lab" value="-"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('keterangan_lab') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('keterangan_lab')) Form ini kosong!!! @else Masukkan keterangan Lab @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="lab" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                OSIS
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('osis') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>
                                <input type="number" required id="osis" name="osis" value="0"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('osis') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('osis')) Form ini kosong!!! @else Masukkan Biaya OSIS @endif ">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="keterangan_lab"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Keterangan
                                OSIS
                            </label>
                            <div class="flex">

                                <input type="text" id="keterangan_lab" name="keterangan_osis" value="-"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('keterangan_lab') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('keterangan_lab')) Form ini kosong!!! @else Masukkan Keterangan osis @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="uas" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                UAS
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('uas') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>

                                <input type="number" required id="uas" name="semester" value="0"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('uas') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('uas')) Form ini kosong!!! @else Masukkan Biaya Semester @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="keterangan_uas"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Keterangan
                                Biaya Uas
                            </label>
                            <div class="flex">

                                <input type="text" id="keterangan_uas" name="keterangan_semester" value="-"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('keterangan_semester') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('keterangan_semester')) Form ini kosong!!! @else Masukkan Biaya Semester @endif">
                            </div>
                        </div>


                        <div class="col-span-full">
                            <label for="semester_ganjil"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                PSG
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('psg') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>

                                <input type="number" required id="psg" name="psg" value="0"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('psg') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('psg')) Form ini kosong!!! @else Masukkan Nilai Biaya PSG @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="keterangan_psg"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Keterangan
                                PSG
                            </label>
                            <div class="flex">

                                <input type="text" id="keterangan_psg" name="keterangan_psg" value="-"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('keterangan_psg') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('keterangan_psg')) Form ini kosong!!! @else Masukkan Keterangan PSG @endif">
                            </div>
                        </div>


                        <div class="col-span-full">
                            <label for="ukk" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                UKK
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('psg') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>

                                <input type="number" required id="ukk" name="ukk" value="0"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('ukk') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('ukk')) Form ini kosong!!! @else Masukkan Nilai Biaya UKK @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="keterangan_ukk"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Keterangan
                                UKK
                            </label>
                            <div class="flex">

                                <input type="text" id="keterangan_ukk" name="keterangan_ukk" value="-"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('keterangan_ukk') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('keterangan_ukk')) Form ini kosong!!! @else Masukkan Keterangan UKK @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="alumni" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                Alumni
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('psg') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>

                                <input type="number" required id="alumni" name="alumni" value="0"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('alumni') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('alumni')) Form ini kosong!!! @else Masukkan Nilai Biaya Alumni @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="keterangan_alumni"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Keterangan
                                Alumni
                            </label>
                            <div class="flex">

                                <input type="text" id="keterangan_alumni" name="keterangan_alumni" value="-"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('keterangan_alumni') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('keterangan_alumni')) Form ini kosong!!! @else Masukkan Keterangan Alumni @endif">
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" id="button-cancel-pembayaran"
                    class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    id="btn-add">Submit
                </button>
            </div>
        </form>
    </div>
    {{-- end add data --}}

    <script>
        document.getElementById('searchInput').addEventListener('input', function(e) {
            let input, filter, options, option, i;
            input = e.target.value.toUpperCase();
            filter = input.toUpperCase();
            options = document.querySelectorAll('#nama_siswa option');
            let select = document.getElementById('nama_siswa');

            // Menampilkan elemen select ketika input dimulai
            select.style.display = "block";

            for (i = 0; i < options.length; i++) {
                option = options[i];
                if (option.textContent.toUpperCase().indexOf(filter) > -1) {
                    option.style.display = "";
                } else {
                    option.style.display = "none";
                }
            }
        });
    </script>
@endsection
