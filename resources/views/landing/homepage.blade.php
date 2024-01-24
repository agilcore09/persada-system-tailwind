@extends('landing.core')
@section('body')
    <div class="grid grid-cols-12" id="home">
        {{-- navbar section --}}
        @include('landing.navbar')
        {{-- end navbar section --}}
        {{-- jumbotron section --}}
        @include('landing.jumbotron')
        {{-- end jumbotron --}}
    </div>
    {{-- start why --}}
    <div class="grid grid-cols-12">
        <div class="col-span-10 col-start-2 font-body">
            <div class="kenapa mt-14">
                <h3 class="font-bold text-2xl text-center">Kenapa Harus <span class="text-blue-950 font-bold">SMK PERSADA
                        MAKASSAR</span> ? </h3>
                <p class="text-center text-lg">alasan kenapa harus memilih untuk mendaftar di <span
                        class="text-blue-950 font-bold">SMK PERSADA MAKASSAR</span></p>
            </div>
            <div class="alasan grid grid-cols-12 mt-12">
                <div class="col-span-12 my-5 px-9 md:col-span-3">
                    <div class="icons flex justify-center">
                        <i class="fa-solid fa-handshake fa-3x text-blue-950"></i>
                    </div>
                    <h3 class="text-center text-blue-950 font-bold text-xl mt-3 font-body">kerja Sama Luas</h3>
                    <p class="text-center text-sm font-body">Kami telah bekerja sama dengan beberapa perusahaan terkenal dan
                        terpercaya</p>
                </div>
                <div class="col-span-12 my-5 px-9 md:col-span-3 ">
                    <div class="icons flex justify-center">
                        <i class="fa-solid fa-laptop fa-3x text-blue-950"></i>
                    </div>
                    <h3 class="text-center text-blue-950 font-bold text-xl mt-3 font-body">Fasilitas Lengkap</h3>
                    <p class="text-center text-sm font-body">Penunjang pembelajaran dan praktikum dengan kualitas yang
                        premium</p>
                </div>
                <div class="col-span-12 my-5 px-9 md:col-span-3">
                    <div class="icons flex justify-center">
                        <i class="fa-solid fa-school fa-3x text-blue-950"></i>
                    </div>
                    <h3 class="text-center text-blue-950 font-bold text-xl mt-3 font-body">Lingkungan Yang Nyaman</h3>
                    <p class="text-center text-sm font-body">Berada di lingkungan yang kondusif dan asri</p>
                </div>
                <div class="col-span-12 my-5 px-9 md:col-span-3">
                    <div class="icons flex justify-center ">
                        <i class="fa-solid fa-person-chalkboard fa-3x text-blue-950"></i>
                    </div>
                    <h3 class="text-center text-blue-950 font-bold text-xl mt-3 font-body">Pengajar Kompoten</h3>
                    <p class="text-center text-sm font-body">Kami telah bekerja sama dengan beberapa perusahaan terkenal dan
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
                <div class="col-span-10 md:col-span-5 py-14">
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

    {{-- jurusan --}}
    <div class="grid grid-cols-12 my-14">
        <div class="col-span-10 col-start-2">
            <div class="mt-14">
                <h3 class="font-bold text-2xl text-center">Program <span class="text-blue-950 font-bold">Keahlian</span>
                </h3>
                <p class="text-center text-sm">Pilih Program keahlian yang kamu sukai</p>
            </div>
            <div class="col-span-10">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 sm:col-span-12 p-10 md:col-span-3 md:col-start-4">
                        <div class="icons flex justify-center ">
                            <i class="fa-solid fa-server fa-3x text-blue-950"></i>
                        </div>
                        <h3 class="text-center text-blue-950 font-bold text-lg mt-3">Teknik Komputer Jaringan</h3>
                        <p class="text-center text-sm">Berfokus Pada Perangkat Jaringan, dan Pemrograman komputer</p>
                    </div>
                    <div class="col-span-12 sm:col-span-12 md:col-span-3 p-10">
                        <div class="icons flex justify-center ">
                            <i class="fa-solid fa-gear fa-3x text-blue-950"></i>
                        </div>
                        <h3 class="text-center text-blue-950 font-bold text-lg mt-3">Teknik Kendaraan Ringan</h3>
                        <p class="text-center text-sm">Berfokus Pada Pemeliharaan dan Perawatan mesin kendaraan ringan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end jurusan --}}

    {{-- gallery --}}
    <div class="grid grid-cols-12 my-14">
        <div class="col-span-10 col-start-2">
            <div class="mt-14">
                <h3 class="font-bold text-2xl text-center">Gallery <span class="text-blue-950 font-bold">Kami</span>
                </h3>
                <p class="text-center text-sm">Beberapa foto kegiatan yang di lakukan siswa</p>
            </div>
            <div class="col-span-10 mt-14">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="grid gap-4">
                        <div>
                            <a href="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg">
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                            </a>
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- end gallery --}}


    @include('landing.footer')
@endsection
