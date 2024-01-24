<nav class="bg-blue-950 w-screen py-5 col-span-12">
    <div class="grid grid-cols-12">
        <div class="col-span-5">
            <div class="container sm:flex">
                <div class="image">
                    <img src="{{ asset('img/logo.png') }}" class="w-10 ml-5 w-sm-5" alt="logo-persada">
                </div>
                <div class="hidden sm:header sm:flex sm:self-center">
                    <h3 class="font-bold text-white ml-4 text-sm font-body">SMK PERSADA MAKASSSAR</h3>
                </div>
            </div>
        </div>
        {{-- yang tampil jika layar besar --}}
        <div class="hidden md:col-span-7 md:flex md:self-center justify-end pr-5">
            <ul class="flex mr-5 font-body font-semi-bold">
                <li class="mx-3 text-sm text-white hover:text-slate-400"><a href="{{ url('/') }}#home">Home</a>
                </li>
                <li class="mx-3 text-sm text-white hover:text-slate-400"><a href="{{ url('/about') }}#about">About</a>
                </li>
                <li class="mx-3 text-sm text-white hover:text-slate-400"><a href="">Contact Us</a></li>
                <li class="mx-3 text-sm text-white hover:text-slate-400"><a href="">Exam Persada</a></li>
                <li class="mx-3 text-sm text-white hover:text-slate-400"><a href="">Ujian</a></li>
                <li class="mx-3 text-sm text-white hover:text-slate-400"><a href="">Virtual Lab</a></li>
            </ul>
        </div>

        {{-- yang tampil jika layar kecil berisi burger --}}
        <div class="md:hidden col-span-7 flex justify-end align-center burger">
            <div class="mr-5 flex self-center">
                <button class="tekan border w-10 h-10 roundend-2xl">
                    <i class="fa-solid fa-bars text-white"></i>
                </button>
            </div>

            <ul class="list hidden absolute bg-blue-950 pb-8 z-10 top-20 font-body font-semi-bold">
                <li class="w-full py-5 text-xl px-5 text-white hover:bg-blue-500"><a href=""
                        class="px-5 py-5">Home</a>
                </li>
                <li class="w-full py-5 text-xl px-5 text-white hover:bg-blue-500"><a href=""
                        class="px-5 py-5">About</a>
                </li>
                <li class="w-full py-5 text-xl px-5 text-white hover:bg-blue-500"><a href=""
                        class="px-5 py-5">Contact
                        Us</a></li>
                <li class="w-full py-5 text-xl px-5 text-white hover:bg-blue-500"><a href=""
                        class="px-5 py-5">Exam
                        Persada</a></li>
                <li class="w-full py-5 text-xl px-5 text-white hover:bg-blue-500"><a href=""
                        class="px-5 py-5">Ujian</a>
                </li>
                <li class="w-full py-5 text-xl px-5 text-white hover:bg-blue-500"><a href=""
                        class="px-5 py-5">Virtual
                        Lab</a></li>
            </ul>
        </div>
    </div>
</nav>
