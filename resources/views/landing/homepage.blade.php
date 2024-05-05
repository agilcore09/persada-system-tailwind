@extends('landing.core')
@section('body')
    {{-- navbar section --}}

    @include('landing.navbar')


    @include('landing.jumbotron')
    {{-- start why --}}
    <div class="grid md:grid-cols-12 grid-cols-12 bg-blue-950">
        <div class="col-span-10 col-start-2 font-body">
            <div class="kenapa mt-14" data-aos="fade-up">
                <h3 class="font-bold text-3xl text-center text-white">Kenapa Harus <span class="text-white font-bold">SMK
                        PERSADA
                        MAKASSAR</span> ? </h3>
                <p class="text-center text-lg text-white">alasan kenapa harus memilih untuk mendaftar di <span
                        class=" font-bold text-white">SMK PERSADA MAKASSAR</span></p>
            </div>
            <div class="alasan grid md:grid-cols-12 grid-cols-12 mt-12">
                <div class="col-span-12 md:mx-2 my-5 md:col-span-3 bg-white rounded-md py-14 hover:bg-blue-100 hover:border-none "
                    data-aos="fade-up">
                    <div class="icons flex justify-center">
                        <i class="fa-solid fa-handshake fa-3x text-blue-950 hover:text-blue-900"></i>
                    </div>
                    <h3 class="text-center text-blue-950 font-bold text-xl mt-3 font-body">kerja Sama Luas</h3>
                    <p class="text-center text-sm font-body">Kami telah bekerja sama dengan beberapa perusahaan terkenal dan
                        terpercaya</p>
                </div>
                <div class="col-span-12 md:mx-2 my-5 px-9 md:col-span-3 bg-white rounded-md py-14 hover:bg-blue-100 hover:border-none "
                    data-aos="fade-up">
                    <div class="icons flex justify-center">
                        <i class="fa-solid fa-laptop fa-3x text-blue-950 hover:text-blue-900"></i>
                    </div>
                    <h3 class="text-center text-blue-950 font-bold text-xl mt-3 font-body">Fasilitas Lengkap</h3>
                    <p class="text-center text-sm font-body">Penunjang pembelajaran dan praktikum dengan kualitas yang
                        premium</p>
                </div>
                <div class="col-span-12 my-5 md:mx-2 px-9 md:col-span-3 bg-white rounded-md py-14 hover:bg-blue-100 hover:border-none"
                    data-aos="fade-up">
                    <div class="icons flex justify-center">
                        <i class="fa-solid fa-school fa-3x text-blue-950 hover:text-blue-900"></i>
                    </div>
                    <h3 class="text-center text-blue-950 font-bold text-xl mt-3 font-body">Lingkungan Yang Nyaman</h3>
                    <p class="text-center text-sm font-body">Berada di lingkungan yang kondusif dan asri</p>
                </div>
                <div class="col-span-12 md:mx-2 my-5 px-9 md:col-span-3 bg-white rounded-md py-14 hover:bg-blue-100 hover:border-none"
                    data-aos="fade-up">
                    <div class="icons flex justify-center ">
                        <i class="fa-solid fa-person-chalkboard fa-3x text-blue-950 hover:text-blue-900"></i>
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
    <div class="grid md:grid-cols-12 grid-cols-12 bg-blue-950 text-white">
        <div class="col-span-10 col-start-2 order-last md:order-first">
            <div class="grid grid-cols-10">
                <div class="col-span-10 md:col-span-5 md:py-14 py-1">
                    <div class="container font-body" data-aos="fade-right">
                        <div>
                            <h3 class="text-3xl font-bold md:pt-14 pt-9 mb-5">Assalamualaikum Wr. Wb</h3>
                        </div>
                        <div class="pembungkus">
                            <p class="text-lg">Selamat datang di SMK PERSADA MAKASSAR. Sekolah menengah kejuruan yang
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
                            <h3 class="text-lg mt-10 font-bold text-orange-500">- Ir. H. Zainuddin B Ilyas -</h3>
                        </div>


                        <div class="flex">
                            <div class="jumlahSiswa mt-5 mr-5 md:mr-5">
                                <h3 class="text-6xl font-bold text-center md:text-left" id="jumlah_siswa"></h3>
                                <p class="font-bold text-center md:text-left">Jumlah Siswa</p>
                            </div>

                            <div class="rataSiswa mt-5 md:ml-5">
                                <h3 class="text-6xl font-bold text-center md:text-left" id="rataSiswa">800</h3>
                                <p class="font-bold text-center md:text-left">Rata - rata Pendaftar</p>
                            </div>

                        </div>
                        <div class="mt-5 mb-10">
                            <a href="#"
                                class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                                Ayo Bergabung!!
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-10 md:col-span-5 pt-14 order-first md:order-last">
                    <img src="{{ asset('kepsek.png') }}" alt="kepsek.jpg" data-aos="fade-left">
                </div>

            </div>
        </div>
    </div>
    {{-- end sambutan kepsek --}}

    {{-- jurusan --}}
    <div class="grid md:grid-cols-12 grid-cols-12 my-14">
        <div class="col-span-10 col-start-2">
            <div class="mt-14" data-aos="fade-up">
                <h3 class="font-bold text-2xl text-center">Program <span class="text-blue-950 font-bold">Keahlian</span>
                </h3>
                <p class="text-center text-sm">Pilih Program keahlian yang kamu sukai</p>
            </div>
            <div class="col-span-10">
                <div class="grid md:grid-cols-12 grid-cols-12">
                    <div class="col-span-12 sm:col-span-12 p-10 md:col-span-3 md:col-start-4" data-aos="fade-right">
                        <div class="icons flex justify-center ">
                            <i class="fa-solid fa-server fa-3x hover:text-blue-900 text-blue-950"></i>
                        </div>
                        <h3 class="text-center text-blue-950 font-bold text-lg mt-3">Teknik Komputer Jaringan</h3>
                        <p class="text-center text-sm">Berfokus Pada Perangkat Jaringan, dan Pemrograman komputer</p>
                    </div>
                    <div class="col-span-12 sm:col-span-12 md:col-span-3 p-10" data-aos="fade-left">
                        <div class="icons flex justify-center ">
                            <i class="fa-solid fa-gear fa-3x text-blue-950 hover:text-blue-900"></i>
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
    <div class="grid md:grid-cols-12 grid-cols-12 my-14">
        <div class="col-span-10 col-start-2">
            <div class="mt-14" data-aos="fade-up">
                <h3 class="font-bold text-2xl text-center">Gallery <span class="text-blue-950 font-bold">Kami</span>
                </h3>
                <p class="text-center text-sm">Beberapa foto kegiatan yang di lakukan siswa</p>
            </div>
            <div class="col-span-10 mt-14">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <?php
                    $files = scandir('../public/gallery');
                    
                    // Menghapus nilai ". dan .."
                    $filteredFiles = array_filter($files, function ($value) {
                        return $value !== '.' && $value !== '..';
                    });
                    
                    // Reindeks array jika diperlukan
                    $filteredFiles = array_values($filteredFiles); ?>

                    @foreach ($filteredFiles as $file)
                        <div class="grid gap-4 ">
                            <div>
                                <a data-fslightbox="first-lightbox" href="{{ asset('/gallery' . '/' . $file) }}">
                                    <img class="max-w-full rounded-lg hover:grayscale"
                                        src="{{ asset('/gallery' . '/' . $file) }}" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
    {{-- end gallery --}}


    <div class="grid md:grid-cols-12 grid-cols-12 my-14">
        <div class="col-span-10 col-start-2">
            <div class="mt-14" data-aos="fade-up">
                <h3 class="font-bold text-2xl text-center">Sertivikasi<span class="text-blue-950 font-bold">
                        Internasional</span>
                </h3>
                <p class="text-center text-sm">Kami memiliki dan telah bekerja sama dengan beberapa perusahaan
                    internasional</p>
            </div>

            {{-- grid sertivikasi --}}
            <div class="grid md:grid-cols-12 grid-cols-12">
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/mikrotik.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center">Mikrotik Academy</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/google.jpg') }}" class="w-full hover:grayscale" alt="">
                    </div>
                    <h3 class="font-bold text-center">Google Suite</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/365.jpg') }}" class="w-full hover:grayscale" alt="">
                    </div>
                    <h3 class="font-bold text-center">Microsoft 365</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/redhat.jpg') }}" class="w-full hover:grayscale" alt="">
                    </div>
                    <h3 class="font-bold text-center">Redhat Academy</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/fortinet.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center">Fortinet Academy</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/paloalto.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center">Paloalto Network</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/oracle-academy.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center">Oracle Academy</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/vmware.jpg') }}" class="w-full hover:grayscale" alt="">
                    </div>
                    <h3 class="font-bold text-center">VMWARE IT Academy</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/ndg.jpg') }}" class="w-full hover:grayscale" alt="">
                    </div>
                    <h3 class="font-bold text-center">NDG</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/Bootstrap.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center">Bootstrap Studio</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/autodesk.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center">Autodesk</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/lucidchart.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center">Lucidchart</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/jetbrain.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center">Jetbrain For Student</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/canva.png') }}" class="w-full hover:grayscale" alt="">
                    </div>
                    <h3 class="font-bold text-center">Canva For Education</h3>
                </div>

            </div>
        </div>
    </div>


    <script>
        function animateValue(id, start, end, duration) {
            var obj = document.getElementById(id);
            var range = end - start;
            var current = start;
            var increment = end > start ? 1 : -1;
            var stepTime = Math.abs(Math.floor(duration / range));
            var stepValue = Math.ceil(range / (duration / stepTime)); // Hitung nilai langkah

            var timer = setInterval(function() {
                current += stepValue; // Melangkah sebanyak nilai langkah
                if ((increment > 0 && current >= end) || (increment < 0 && current <= end)) {
                    clearInterval(timer);
                    current = end;
                }
                if (current == end) {
                    obj.innerHTML = current + "+"; // Tambahkan "++" setelah nilai akhir
                } else {
                    obj.innerHTML = current;
                }
            }, stepTime);
        }

        // Panggil fungsi animateValue dengan parameter ID, nilai awal, nilai akhir, dan durasi animasi (dalam milidetik)
        animateValue("jumlah_siswa", 0, 800, 1000);
        animateValue("rataSiswa", 0, 439, 1000);
    </script>

    @include('landing.footer')
@endsection
