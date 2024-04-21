@extends('core.index')
@section('content')
    <div class="container display-add bg-white shadow-xl p-9">
        <form method="POST" action="{{ url('data-guru/' . $data->id) }}">
            @csrf
            @method('PUT')
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Update Data data guru</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Update data guru jika sudah fix menjadi
                        siswa
                    </p>
                    @if ($errors->any())
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                                title: "Gagal",
                                text: "Pastikan Tidak ada duplikasi",
                                icon: "error"
                            });
                        </script>
                    @endif

                    {{-- end alert section --}}
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="nama_guru" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                Guru </label>
                            <div class="mt-1">
                                <input type="text" name="nama" id="nama_guru" value="{{ $data->name }}"
                                    autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email Guru
                            </label>
                            <div class="mt-1">
                                <input type="email" name="email" id="email" value="{{ $data->email }}"
                                    autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password
                            </label>
                            <div class="mt-1">
                                <input type="password" name="password" id="password" autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>


                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" id="button-cancel"
                    class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit" wire:click="$refresh"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit
                </button>
            </div>
        </form>
    </div>
    {{-- end add data --}}
@endsection
