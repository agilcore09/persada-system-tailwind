 @extends('livewire.dashboard.partials.core')

 @section('content')
     <div class=" ">
         <div class="min-h-screen">
             <div class="p-4">
                 <nav
                     class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
                     <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                         <div class="capitalize">
                             <nav aria-label="breadcrumb" class="w-max">
                                 <ol
                                     class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                                     <li
                                         class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                         <a href="#">
                                             <p
                                                 class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100">
                                                 dashboard</p>
                                         </a>
                                         <span
                                             class="text-gray-500 text-sm antialiased font-sans font-normal leading-normal mx-2 pointer-events-none select-none">/</span>
                                     </li>
                                     <li
                                         class="flex items-center text-blue-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-blue-500">
                                         <p
                                             class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                             home</p>
                                     </li>
                                 </ol>
                             </nav>
                             <h6
                                 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">
                                 home</h6>
                         </div>

                     </div>
                 </nav>
                 <div class="mt-12">
                     <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-2">
                         <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                             <div
                                 class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                 <i class="fa-solid fa-comments-dollar w-6 h-6 text-blue-600"></i>
                             </div>
                             <div class="p-4 text-right">
                                 <p
                                     class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                     Pembayaran </p>
                                 <h4
                                     class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                     {{ $pembayaran }} </h4>
                             </div>
                             <div class="border-t border-blue-gray-50 p-4">
                                 <p
                                     class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                     <strong class="text-dark">Total Jumlah Pembayaran</strong>
                                 </p>
                             </div>
                         </div>
                         <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                             <div
                                 class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                 {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-6 h-6 text-white">
                                    <path fill-rule="evenodd"
                                        d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                        clip-rule="evenodd"></path>
                                </svg> --}}

                                 <i class="fa-solid fa-graduation-cap text-pink-400"></i>
                             </div>
                             <div class="p-4 text-right">
                                 <p
                                     class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                     Total Siswa</p>
                                 <h4
                                     class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                     {{ $totalSiswa }}</h4>
                             </div>
                             <div class="border-t border-blue-gray-50 p-4">
                                 <p
                                     class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                     <strong class="text-dark">Jumlah Total Siswa</strong>
                                 </p>
                             </div>
                         </div>
                         <div class="relative flex  flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                             <div
                                 class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                 <i class="fa-solid fa-users w-6 h-6 text-green-400"></i>
                             </div>
                             <div class="p-4 text-right">
                                 <p
                                     class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                     Pendaftar Baru</p>
                                 <h4
                                     class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                     {{ $pendaftar }}</h4>
                             </div>
                             <div class="border-t border-blue-gray-50 p-4">
                                 <p
                                     class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                     <strong class="text-dark">Total Pendaftaran</strong>
                                 </p>
                             </div>
                         </div>
                         <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                             <div
                                 class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                 <i class="fa-solid fa-users w-6 h-6 text-orange-400"></i>
                             </div>
                             <div class="p-4 text-right">
                                 <p
                                     class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                     Daftar Guru</p>
                                 <h4
                                     class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                     {{ $guru }}</h4>
                             </div>
                             <div class="border-t border-blue-gray-50 p-4">
                                 <p
                                     class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                     <strong class="text-dark">Total Guru</strong>
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
