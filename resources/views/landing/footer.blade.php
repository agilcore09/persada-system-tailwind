{{-- <footer class="bg-blue-950 shadow">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{ url('/') }}" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('/logo.png') }}" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PERSADA SCHOOL</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="{{ url('/about/#about') }}" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="{{ url('/') }}"
                class="hover:underline">Persadaschool™</a>. All Rights Reserved.</span>
    </div>
</footer> --}}

<footer class="bg-blue-950">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <h2 class="text-center md:text-2xl text-xl text-white font-bold">Come Join With Us</h2>
        <p class="text-white px-10 text-sm  text-justify md:text-center">Gabunglah bersama kami di SMK Persada Makassar
            untuk
            meniti
            jalan
            sukses
            dalam
            program
            unggulan Teknik
            Komputer Jaringan dan Teknik Kendaraan Ringan!</p>
        <div class="grid grid-cols-12 mt-8">
            <div class="md:col-span-7 col-span-12">
                <h4 class="text-center text-white font-bold text-md  mb-3">Ajukan Pertanyaan</h4>
                <div class="container px-5">
                    <div>
                        <input class="w-full rounded-md placeholder:text-sm" type="text" name=""
                            placeholder="Nama Kamu" required autocomplete="off">
                    </div>
                    <div class="py-3">
                        <input class="w-full rounded-md placeholder:text-sm" type="text" name=""
                            placeholder="Pertanyaan Kamu" required autocomplete="off">
                    </div>
                    <button class="w-full bg-orange-600 rounded-md py-2 font-bold text-white">Submit</button>
                </div>
            </div>

            <div class=" md:col-span-2 col-span-4 mt-5 md:mt-0">
                <h4 class="text-center text-white font-bold md:text-sm text-sm mb-3">Our Service</h4>
                <ul class="text-center">
                    <li><a href="{{ url('/') }}" class="text-slate-200 md:text-sm text-xs">Home</a></li>
                    <li><a href="{{ url('/') }}" class="text-slate-200 md:text-sm text-xs">About</a></li>
                    <li><a href="{{ url('/') }}" class="text-slate-200 md:text-sm text-xs">Contact Us</a></li>
                    <li><a href="{{ url('/') }}" class="text-slate-200 md:text-sm text-xs">Ujian</a></li>
                    <li><a href="{{ url('/') }}" class="text-slate-200 md:text-sm text-xs">Persada Exam </a></li>
                </ul>
            </div>
            <div class="md:col-span-2  col-span-4 mt-5 md:mt-0">
                <h4 class="text-center text-white font-bold md:text-md text-sm mb-3">Join With Us</h4>
                <ul class="text-center">
                    <li><a href="{{ url('/') }}" class="text-slate-200 md:text-sm text-xs">Daftar SMK</a></li>
                    <li><a href="{{ url('/') }}" class="text-slate-200 md:text-sm text-xs">Daftar SMP</a></li>

                </ul>
            </div>
            <div class="md:col-span-1 col-span-4 md:mt-0 flex justify-center ">
                <ul class="text-center content-center">
                    <li class="pb-1">
                        <a href="{{ url('/') }}" class="text-slate-200"><i
                                class="fa-brands text-md fa-instagram"></i></a>
                    </li>
                    <li class="py-1"><a href="{{ url('/') }}" class="text-slate-200"><i
                                class="fa-brands text-md fa-facebook"></i></a>
                    <li class="py-1"><a href="{{ url('/') }}" class="text-slate-200"><i
                                class="fa-brands text-md fa-whatsapp"></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</footer>
