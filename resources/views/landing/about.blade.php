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
                    <div class="col-span-12 md:col-span-6 md:mx-2 my-5  bg-blue-950 rounded-md py-14 hover:bg-blue-900 hover:border-none shadow-lg "
                        data-aos="fade-up">
                        <div class="grid grid-cols-12 md:col-span-6">
                            <div class="col-span-12 md:col-span-6 icons flex justify-center">

                                <img src="{{ asset('img/visi.png') }}" alt="visi" class="w-60">

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


    {{-- start pengajar --}}
    <div class="grid md:grid-cols-12 grid-cols-12 my-14">
        <div class="col-span-10 col-start-2">
            <div class="md:mt-14" data-aos="fade-up">
                <h3 class="font-bold text-2xl text-center">TIM <span class="text-blue-950 font-bold">Pengajar</span>
                </h3>
                <p class="text-justify md:text-center text-sm">Tim pengajar SMK Persada terdiri dari para profesional
                    berpengalaman yang
                    berdedikasi, siap menginspirasi dan membimbing siswa-siswa dalam mencapai keunggulan dalam bidangnya
                    masing-masing, memastikan pengalaman belajar yang berharga dan relevan untuk kesuksesan masa depan.</p>
            </div>
            <div class="col-span-10">
                <div class="grid md:grid-cols-12 grid-cols-12">
                    @foreach ($data as $item)
                        <div class="col-span-12 md:col-span-4 md:mx-2 my-5 shadow hover:border-none " data-aos="fade-up">


                            <div class="grid grid-cols-12 md:col-span-6">
                                <div class="col-span-12 icons flex justify-center">
                                    <img src="{{ $item['img'] == null ? asset('img/gambar2.jpeg') : asset('img/' . $item['img']) }} "
                                        alt="tkj" class="w-full h-96 object-cover rounded-md hover:grayscale">
                                </div>
                                <div class="col-span-12 md:col-span-12 md:flex md:justify-center ">
                                    <div class="py-3">
                                        <h3
                                            class="px-3 md:px-0 text-blue-950 font-bold text-md md:text-xl font-body text-center">
                                            {{ $item['nama'] }}</h3>
                                        <p class="text-center">{{ $item['job'] }}</p>
                                    </div>
                                </div>
                            </div>



                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    {{-- end pengajar --}}

    {{-- popup --}}
    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">

                    <div class="visi">
                        <div class="modal-header flex justify-center">
                            <img src="{{ asset('/img/visi.png') }}" alt="gambar visi" class="w-20">
                        </div>
                        <div class="modal-body">
                            <h3 class="text-blue-950 font-bold">VISI SMK PERSADA</h3>
                            <p>Menyiapkan tenaga Ahli Terampil Mandiri mengikuti perkembangan teknologi</p>
                        </div>
                    </div>

                    <div class="misi mt-5">
                        <div class="modal-header flex justify-center">
                            <img src="{{ asset('/img/misi.png') }}" alt="gambar misi" class="w-20">
                        </div>
                        <div class="modal-body">
                            <h3 class="text-blue-950 font-bold">MISI SMK PERSADA</h3>
                            <ul class="text-center">
                                <li>1. Menciptakan lapangan kerja baru
                                </li>
                                <li>2. Meningkatkan keterampilan dan keahlian siswa
                                </li>
                                <li>3. Meningkatkan kualitas siswa
                                </li>
                                <li>4. Meningkatkan sumber daya manusia</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- endpopu --}}

    {{-- start footer --}}
    @include('landing.footer')
    {{-- end footer --}}
@endsection
