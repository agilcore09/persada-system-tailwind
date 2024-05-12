@extends('core.index')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container display-add bg-white shadow-xl p-9">
        <form method="POST" enctype="multipart/form-data" action="{{ url('kelola-inventaris/' . $data->kode_alat) }}">
            @csrf
            @method('PUT')
            <div class="space-y-12 ">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Ubah data inventaris</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Ubah data jika kamu merasa tidak yakin
                    </p>
                    {{-- end alert section --}}
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                        <div class="w-24 h-24 bg-slate-500 rounded-md">
                            <a href="{{ asset('inventaris/' . $data->gambar) }}">
                                <img src="{{ asset('inventaris/' . $data->gambar) }}"
                                    class="w-24 h-24 object-cover hover:grayscale rounded-md" alt="">
                            </a>
                        </div>
                        <div class="col-span-full">
                            <label for="gambar" class="block text-sm font-medium leading-6 text-gray-900">Gambar</label>
                            <input type="file" name="gambar">
                        </div>
                        <div class="col-span-full">
                            <label for="nama_barang" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                Barang </label>
                            <div class="mt-1">
                                <input type="text" name="nama_barang" id="nama_barang" autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    value="{{ $data->nama_barang }}">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="kode_alat" class="block text-sm font-medium leading-6 text-gray-900">Kode Alat
                            </label>
                            <div class="mt-1">
                                <input type="text" value="{{ $data->kode_alat }}" name="kode_alat" id="kode_alat"
                                    autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="tanggal_masuk" class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                                Masuk
                            </label>
                            <div class="mt-1">
                                <input type="date" value="{{ $data->tanggal_masuk }}" name="tanggal_masuk"
                                    id="tanggal_masuk" autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="sumber" class="block text-sm font-medium leading-6 text-gray-900">Sumber
                            </label>
                            <div class="mt-1">
                                <input type="text" value="{{ $data->sumber }}" name="sumber" id="sumber"
                                    autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="lokasi" class="block text-sm font-medium leading-6 text-gray-900">Lokasi
                            </label>
                            <div class="mt-1">
                                <input type="text" value="{{ $data->lokasi }}" name="lokasi" id="lokasi"
                                    autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="kategori" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                Kategori</label>
                            <select id="kategori" name="kategori" required
                                class="rounded-lg keperluan border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5">
                                <option value="{{ $data->Kategori->id }}">{{ $data->Kategori->nama_kategori }}</option>
                                @foreach ($kategori as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-full">
                            <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                            <select id="status" name="status" required
                                class="rounded-lg keperluan border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5">
                                <option value="">Pilih Status</option>
                                <option value="Rusak">Rusak</option>
                                <option value="Baik">Baik</option>
                                <option value="Dalam Perawatan">Dalam Perawatan</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ url('/kelola-inventaris') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit
                </button>
            </div>
        </form>
    </div>
    {{-- end add data --}}
@endsection
