@extends('landing.core')
@section('body')
    @include('landing.navbar')
    @include('landing.jumbotron')

    @if (Session::has('success'))
        <script>
            alert('Berhasil melakukan peminjaman barang. tolong barang yang di pinjam di kembalikan');
        </script>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif

    {{-- vISI --}}
    <div class="grid md:grid-cols-12 grid-cols-12 my-14 md:my-7">
        <div class="col-span-10 col-start-2">

            <div class="col-span-10">
                <div class="grid md:grid-cols-12 grid-cols-12">
                    <div class="col-span-12 md:col-span-12 my-5" data-aos="fade-up">
                        <div class="grid grid-cols-12 md:col-span-12">
                            <div class="col-span-12 md:col-span-12 icons px-5">
                                <div class="header">
                                    <h3 class="font-bold text-xl text-center mb-3">FORM PEMINJAMAN BARANG</h3>
                                    <p class="md:text-center text-sm text-center mb-3">Tolong lengkapi form terlebih dahulu
                                        sebelum meminjam barang di lab</p>
                                </div>
                                <form action="{{ url('/peminjaman') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="form-body w-full">
                                        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap"
                                            class="w-full border border-t-0 border-x-0 placeholder:text-center focus:text-center"
                                            required autocomplete="off">
                                        <input type="text" name="kelas" placeholder="Kelas/Jabatan"
                                            class="w-full border border-t-0 border-x-0 placeholder:text-center focus:text-center mt-5"
                                            autocomplete="off" required>
                                        <input type="text" name="nama_barang" placeholder="Nama Barang"
                                            class="w-full border border-t-0 border-x-0 placeholder:text-center focus:text-center mt-5"
                                            autocomplete="off" required>
                                        <input type="text" name="kode_barang" placeholder="Kode Barang"
                                            class="w-full border border-t-0 border-x-0 placeholder:text-center focus:text-center mt-5"
                                            autocomplete="off" required>
                                        <input type="text" name="keperluan" placeholder="Keperluan"
                                            class="w-full border border-t-0 border-x-0 placeholder:text-center focus:text-center mt-5"
                                            autocomplete="off" required>
                                        <div class="flex justify-center mt-10">
                                            <div class="w-52 mr-10">
                                                <input type="checkbox" id="bersedia1" name="vehicle1" value="Bike">
                                                <label for="bersedia1">Dengan Ini saya bersedia mengembalikan
                                                    barang yang telah
                                                    saya pinjam</label>
                                            </div>
                                            <div class="w-52">
                                                <input type="checkbox" id="bersedia2" name="vehicle1" value="Bike">
                                                <label for="bersedia2">Dengan ini saya bersedia mengembalikan
                                                    barang dengan
                                                    keadaan seperti semula</label>
                                            </div>
                                        </div>

                                        <button
                                            class="w-full bg-blue-950 text-white mt-5 py-3 font-bold hover:bg-blue-800">Submit</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- end VISI --}}
    {{-- start footer --}}
    @include('landing.footer')
    {{-- end footer --}}
@endsection
