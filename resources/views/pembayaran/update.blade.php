@extends('core.index')
@section('content')
    <div class="container display-add bg-white shadow-xl p-9">
        <form method="POST" action="{{ url('pembayaran' . '/' . $data->id) }}" id="form-update">
            @csrf
            @method('PATCH')


            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">form Input Pembayaran</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Tambahkan Pembayaran Siswa</p>


                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="jurusan" class="block text-sm font-medium leading-6 text-gray-900">Pilih
                                Siswa</label>
                            <div class="mt-3">
                                <select id="nama_siswa" name="nama_siswa" autocomplete="off"
                                    class="rounded-lg nama_siswa  border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5">
                                    <option value="{{ $data->Siswa->id }}">{{ $data->Siswa->nama_siswa }}</option>
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
                                <input type="number" required id="pembangunan" name="pembangunan"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('pembangunan') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('pembangunan')) Form ini kosong!!! @else Masukkan Biaya Pembangunan @endif"
                                    value="{{ $data->pembangunan }}">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="keterangan_pembangunan"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Keterangan
                                Pembangunan
                            </label>
                            <div class="flex">

                                <input type="text" id="keterangan_pembangunan" name="keterangan_pembangunan"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('keterangan_pembangunan') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('keterangan_pembangunan')) Form ini kosong!!! @else Masukkan Keterangan Pembangunan @endif"
                                    value="{{ $data->keterangan_pembangunan }}">
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
                                <input type="number" required id="spp" name="spp"
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

                                <input type="text" id="keterangan_spp" name="keterangan_spp"
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
                                <input type="number" required id="lab" name="lab"
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

                                <input type="text" id="keterangan_lab" name="keterangan_lab"
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
                                <input type="number" required id="osis" name="osis"
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

                                <input type="text" id="keterangan_lab" name="keterangan_osis"
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

                                <input type="number" required id="uas" name="semester"
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

                                <input type="text" id="keterangan_uas" name="keterangan_semester"
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

                                <input type="number" required id="psg" name="psg"
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

                                <input type="text" id="keterangan_psg" name="keterangan_psg"
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

                                <input type="number" required id="ukk" name="ukk"
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

                                <input type="text" id="keterangan_ukk" name="keterangan_ukk"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('keterangan_ukk') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('keterangan_ukk')) Form ini kosong!!! @else Masukkan Keterangan UKK @endif">
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900"><a
                        href="{{ url('/pembayaran') }}">Cancel </a></button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    id="btn-add">Submit
                </button>
            </div>
        </form>
    </div>
    {{-- end add data --}}
@endsection
