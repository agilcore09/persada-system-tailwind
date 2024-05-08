@extends('landing.core')
@section('body')
    @include('landing.navbar')
    @include('landing.jumbotron')
    {{-- start why --}}
    <div class="grid grid-cols-12">
        <div class="col-span-10 col-start-2 font-body">
            <div class="kenapa mt-14">
                <h3 class="font-bold text-4xl text-center">Kenapa Harus <span class="text-blue-950 font-bold">SMK PERSADA
                        MAKASSAR</span> ? </h3>
                <p class="text-center text-xl">alasan kenapa harus memilih untuk mendaftar di <span
                        class="text-blue-950 font-bold">SMK PERSADA MAKASSAR</span></p>
            </div>
            <div class="alasan grid grid-cols-12 mt-12">
                <div class="col-span-12 my-5 px-9 md:col-span-3">
                    <div class="icons flex justify-center">
                        <i class="fa-solid fa-handshake fa-5x text-blue-950"></i>
                    </div>
                    <h3 class="text-center text-blue-950 font-bold text-xl mt-3 font-body">kerja Sama Luas</h3>
                    <p class="text-center text-xl font-body">Kami telah bekerja sama dengan beberapa perusahaan terkenal dan
                        terpercaya</p>
                </div>
                <div class="col-span-12 my-5 px-9 md:col-span-3 ">
                    <div class="icons flex justify-center">
                        <i class="fa-solid fa-laptop fa-5x text-blue-950"></i>
                    </div>
                    <h3 class="text-center text-blue-950 font-bold text-xl mt-3 font-body">Fasilitas Lengkap</h3>
                    <p class="text-center text-xl font-body">Penunjang pembelajaran dan praktikum dengan kualitas yang
                        premium</p>
                </div>
                <div class="col-span-12 my-5 px-9 md:col-span-3">
                    <div class="icons flex justify-center">
                        <i class="fa-solid fa-school fa-5x text-blue-950"></i>
                    </div>
                    <h3 class="text-center text-blue-950 font-bold text-xl mt-3 font-body">Lingkungan Yang Nyaman</h3>
                    <p class="text-center text-xl font-body">Berada di lingkungan yang kondusif dan asri</p>
                </div>
                <div class="col-span-12 my-5 px-9 md:col-span-3">
                    <div class="icons flex justify-center ">
                        <i class="fa-solid fa-person-chalkboard fa-5x text-blue-950"></i>
                    </div>
                    <h3 class="text-center text-blue-950 font-bold text-xl mt-3 font-body">Pengajar Kompoten</h3>
                    <p class="text-center text-xl font-body">Kami telah bekerja sama dengan beberapa perusahaan terkenal dan
                        terpercaya</p>
                </div>
            </div>
        </div>

    </div>
    {{-- end why --}}

    {{-- sambutan kepsek --}}
    <div class="grid grid-cols-12 bg-blue-950 text-white mt-14">
        <div class="col-span-10 col-start-2">
            <div class="grid grid-cols-10">
                <div class="col-span-10 md:col-span-5 pt-14">
                    <div class="container font-body">
                        <div>
                            <h3 class="text-5xl font-bold pt-14 mb-5">Assalamualaikum Wr. Wb</h3>
                        </div>
                        <div class="md:pt-14">
                            <p class="text-xl">Selamat datang di SMK PERSADA MAKASSAR. Sekolah menengah kejuruan yang
                                memiliki
                                visi
                                “Menyiapkan
                                tenaga Ahli Terampil
                                Mandiri mengikuti perkembangan teknologi”.
                                Kami berkomitmen menyelenggarakan pendidikan yang berkualitas guna menghasilkan generasi
                                yang
                                unggul
                                dan berdaya saing
                                global</p>
                        </div>
                        <div>
                            <h3 class="text-4xl mt-10 font-bold text-orange-500">- Ir. H. Zainuddin B Ilyas -</h3>
                        </div>
                        <div class="mt-5">
                            <a href="#"
                                class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                                Ayo Bergabung!!
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-10 md:col-span-5 pt-14">
                    <img src="{{ asset('kepsek.png') }}" alt="kepsek.jpg">
                </div>

            </div>
        </div>
    </div>
    {{-- end sambutan kepsek --}}


    {{-- start footer --}}
    @include('landing.footer')
    {{-- end footer --}}
@endsection
