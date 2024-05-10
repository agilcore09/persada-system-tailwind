@extends('landing.core')
@section('body')
    @include('landing.navbar')
    @include('landing.jumbotron')

    {{-- vISI --}}
    <div class="grid md:grid-cols-12 grid-cols-12 my-14 md:my-7">
        <div class="col-span-10 col-start-2">

            <div class="col-span-10">
                <div class="grid md:grid-cols-12 grid-cols-12">
                    <div class="col-span-12 md:col-span-6 my-5 border border-black" data-aos="fade-up">
                        <div class="grid grid-cols-12 md:col-span-6">
                            <div class="col-span-12 md:col-span-12 icons px-5">
                                <div class="header">
                                    <h3 class="font-bold text-xl text-center">CONTACT US</h3>
                                    <p class="md:text-center text-sm text-center">Temui kamu di beberpa paltform dan media
                                        social. Kamu dapat mengajukan pertanyaan atau menyapa kami. </p>
                                </div>
                                <div class="form-body">
                                    <input type="text" name="nama" placeholder="Nama Kamu"
                                        class="w-full border border-t-0 border-x-0 placeholder:text-center focus:text-center"
                                        required autocomplete="off">
                                    <input type="email" name="email" placeholder="Email Kamu ex: azizi@gmail.com"
                                        class="w-full border border-t-0 border-x-0 placeholder:text-center focus:text-center mt-5"
                                        autocomplete="off" required>
                                    <input type="text" name="pertanyaan" placeholder="Pertanyaan Kamu"
                                        class="w-full border border-t-0 border-x-0 placeholder:text-center focus:text-center mt-5"
                                        autocomplete="off" required>
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
