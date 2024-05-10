@extends('landing.core')
@section('body')
    @include('landing.navbar')
    @include('landing.jumbotron')

    {{-- vISI --}}
    <div class="grid md:grid-cols-12 grid-cols-12 my-14 md:my-7">
        <div class="col-span-10 col-start-2">
            <div class="md:mt-5" data-aos="fade-up">
                <h3 class="font-bold text-2xl text-center">SMK <span class="text-blue-950 font-bold">PERSADA MAKASSAR</span>
                </h3>
                <p class="md:text-center text-sm text-justify">SMK Persada menonjol dengan keunggulan dualitas program
                    SMK Persada Makassar, sebuah lembaga pendidikan kejuruan yang menonjol, menawarkan program-program
                    unggulan dalam Teknik Kendaraan Ringan (TKR) dan Teknik Komputer Jaringan (TKJ), memberikan siswa-siswa
                    kesempatan untuk mengembangkan keterampilan teknis yang relevan dan siap pakai dalam industri masa
                    depan.</p>
            </div>
            <div class="col-span-10">
                <div class="grid md:grid-cols-12 grid-cols-12">
                    <div class="col-span-12 md:col-span-6 my-5  " data-aos="fade-up">
                        <div class="grid grid-cols-12 md:col-span-6">
                            <div class="col-span-12 md:col-span-6 icons flex justify-center">
                                <div>
                                    <h3>Contact US</h3>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 md:flex ">
                                <div class="md:self-center">
                                    <h3
                                        class=" px-3 md:px-0 text-white font-bold text-xl md:text-2xl mt-3 font-body  text-center ">
                                        VISI KAMI</h3>
                                    <p class=" text-sm font-body px-3 md:px-0 text-center  md:text-center text-white">
                                        Klik untuk melihat lengkap</p>
                                    <div class="flex justify-center">
                                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                            class="bg-white px-7 py-1 rounded-md mt-4 ml-3 font-bold hover:bg-blue-800 hover:text-white">Lihat
                                            Visi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 md:mx-2 my-5  bg-blue-950 rounded-md py-14 hover:bg-blue-900 hover:border-none shadow-lg "
                        data-aos="fade-up">
                        <div class="grid grid-cols-12 md:col-span-6">
                            <div class="col-span-12 md:col-span-6 icons flex justify-center">

                                <img src="{{ asset('img/misi.png') }}" alt="misi" class="w-60">

                            </div>
                            <div class="col-span-12 md:col-span-6 md:flex ">
                                <div class="md:self-center">
                                    <h3
                                        class=" px-3 md:px-0 text-white font-bold text-xl md:text-2xl mt-3 font-body  text-center ">
                                        MISI KAMI</h3>
                                    <p class=" text-sm font-body px-3 md:px-0 text-center  md:text-center text-white">
                                        Klik untuk melihat lengkap</p>
                                    <div class="flex justify-center">
                                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                            class="bg-white px-7 py-1 rounded-md mt-4 ml-3 font-bold hover:bg-blue-800 hover:text-white">Lihat
                                            Visi</button>
                                    </div>
                                </div>
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
