@extends('landing.core')
@section('body')
    @include('landing.navbar')
    @include('landing.jumbotron')

    {{-- vISI --}}
    <div class="grid md:grid-cols-12 grid-cols-12 my-14 md:my-7">
        <div class="col-span-10 col-start-2">

            <div class="col-span-10">
                <div class="grid md:grid-cols-12 grid-cols-12">
                    <div class="col-span-12 md:col-span-12 my-5" data-aos="fade-up">
                        <div class="grid grid-cols-12 md:col-span-12">






                            {{-- berita --}}
                            <div class="col-span-10 col-start-2">
                                <div class="md:mt-14" data-aos="fade-up">
                                    <h3 class="font-bold text-2xl text-center">Berita <span
                                            class="text-blue-950 font-bold">Kami</span>
                                    </h3>
                                    <p class="text-center text-sm mb-5">Nantikan berita terbaru dari kami</p>

                                    <form class="max-w-md mx-auto">
                                        <label for="default-search"
                                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                                </svg>
                                            </div>
                                            <input type="search" id="default-search"
                                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Cari Berita" required />

                                        </div>
                                    </form>
                                </div>
                                <div class="col-span-10">
                                    <div class="grid md:grid-cols-12 grid-cols-12">

                                        <div class="col-span-12 md:col-span-4 md:mx-2 my-5  bg-blue-950 rounded-md hover:bg-blue-900 hover:border-none "
                                            data-aos="fade-up">
                                            <div class="grid grid-cols-12 md:col-span-6">
                                                <div class="col-span-12 icons flex justify-center">
                                                    <img src="{{ asset('img/akiyama.jpg') }}" alt="tkj"
                                                        class="w-full h-96 object-cover rounded-md ">
                                                </div>
                                                <div class="col-span-12 md:col-span-12 md:flex ">
                                                    <div class="md:self-center md:px-4 md:pt-5 md:pb-10">
                                                        <h3
                                                            class=" px-3 md:px-0 text-white font-bold text-md md:text-xl mt-3 font-body ">
                                                            Teknik Komputer Jaringan</h3>
                                                        <p
                                                            class="text-xs md:text-md text-justify md:text-justify font-body px-3 md:px-0 text-white">
                                                            Pendidikan terkini
                                                            dalam bidang
                                                            teknologi informasi, mempersiapkan siswa dengan keterampilan
                                                            yang dibutuhkan untuk
                                                            menjadi ahli jaringan komputer yang handal dan berkualitas
                                                            tinggi di era digital
                                                            saat ini.</p>

                                                        <button class="px-3 my-5 mt-5">
                                                            <a href="#"
                                                                class=" py-2 px-2 bg-white rounded-md text-blue-950 font-bold text-xs">Baca
                                                                Selengkapnya</a>
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-4 md:mx-2 my-5  bg-blue-950 rounded-md hover:bg-blue-900 hover:border-none "
                                            data-aos="fade-up">
                                            <div class="grid grid-cols-12 md:col-span-6">
                                                <div class="col-span-12 icons flex justify-center">
                                                    <img src="{{ asset('img/akiyama.jpg') }}" alt="tkj"
                                                        class="w-full h-96 object-cover rounded-md ">
                                                </div>
                                                <div class="col-span-12 md:col-span-12 md:flex ">
                                                    <div class="md:self-center md:px-4 md:pt-5 md:pb-10">
                                                        <h3
                                                            class=" px-3 md:px-0 text-white font-bold text-md md:text-xl mt-3 font-body ">
                                                            Teknik Komputer Jaringan</h3>
                                                        <p
                                                            class="text-xs md:text-md text-justify md:text-justify font-body px-3 md:px-0 text-white">
                                                            Pendidikan terkini
                                                            dalam bidang
                                                            teknologi informasi, mempersiapkan siswa dengan keterampilan
                                                            yang dibutuhkan untuk
                                                            menjadi ahli jaringan komputer yang handal dan berkualitas
                                                            tinggi di era digital
                                                            saat ini.</p>

                                                        <button class="px-3 my-5 mt-5">
                                                            <a href="#"
                                                                class=" py-2 px-2 bg-white rounded-md text-blue-950 font-bold text-xs">Baca
                                                                Selengkapnya</a>
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-4 md:mx-2 my-5  bg-blue-950 rounded-md hover:bg-blue-900 hover:border-none "
                                            data-aos="fade-up">
                                            <div class="grid grid-cols-12 md:col-span-6">
                                                <div class="col-span-12 icons flex justify-center">
                                                    <img src="{{ asset('img/akiyama.jpg') }}" alt="tkj"
                                                        class="w-full h-96 object-cover rounded-md ">
                                                </div>
                                                <div class="col-span-12 md:col-span-12 md:flex ">
                                                    <div class="md:self-center md:px-4 md:pt-5 md:pb-10">
                                                        <h3
                                                            class=" px-3 md:px-0 text-white font-bold text-md md:text-xl mt-3 font-body ">
                                                            Teknik Komputer Jaringan</h3>
                                                        <p
                                                            class="text-xs md:text-md text-justify md:text-justify font-body px-3 md:px-0 text-white">
                                                            Pendidikan terkini
                                                            dalam bidang
                                                            teknologi informasi, mempersiapkan siswa dengan keterampilan
                                                            yang dibutuhkan untuk
                                                            menjadi ahli jaringan komputer yang handal dan berkualitas
                                                            tinggi di era digital
                                                            saat ini.</p>

                                                        <button class="px-3 my-5 mt-5">
                                                            <a href="#"
                                                                class=" py-2 px-2 bg-white rounded-md text-blue-950 font-bold text-xs">Baca
                                                                Selengkapnya</a>
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            {{-- end berita --}}


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
