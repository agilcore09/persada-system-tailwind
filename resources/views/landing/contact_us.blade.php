@extends('landing.core')
@section('body')
    @include('landing.navbar')
    @include('landing.jumbotron')

    {{-- vISI --}}
    <div class="grid md:grid-cols-12 grid-cols-12 my-14 md:my-7">
        <div class="col-span-10 col-start-2">

            <div class="col-span-10">
                <div class="grid md:grid-cols-12 grid-cols-12">
                    <div class="col-span-12 md:col-span-6 my-5" data-aos="fade-up">
                        <div class="grid grid-cols-12 md:col-span-6">
                            <div class="col-span-12 md:col-span-12 icons px-5">
                                <div class="header">
                                    <h3 class="font-bold text-xl text-center mb-3">ADA PERTANYAAN ? </h3>
                                    <p class="md:text-center text-sm text-center mb-3">Temui kamu di beberpa paltform dan
                                        media
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
                                    <button
                                        class="w-full bg-blue-950 text-white mt-5 py-3 font-bold hover:bg-blue-800">Submit</button>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 md:mx-2 my-5  bg-blue-950 rounded-md py-14 hover:bg-blue-900 hover:border-none shadow-lg"
                        data-aos="fade-up">
                        <div class="social-media-header">
                            <h3 class="font-bold text-xl text-center mb-3 text-white">CONTACT US</h3>
                            <div class="flex justify-center">
                                <ul class="pl-10">
                                    <li>
                                        <a href="#" class="flex py-3">
                                            <i class="fa-solid fa-envelope font-xl text-white pr-2 self-center"> </i>
                                            <p class="font-bold text-white self-center md:text-md text-sm">
                                                smkspersada@gmail.com</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex py-3">
                                            <i class="fa-brands fa-whatsapp font-xl text-white pr-2 self-center"></i>
                                            <p class="font-bold text-white self-center md:text-md text-sm">+62 823-9311-8939
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex py-3">
                                            <i class="fa-solid fa-phone font-xl text-white pr-2 self-center"></i>
                                            <p class="font-bold text-white self-center md:text-md text-sm">+62 823-9311-8939
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex py-3">
                                            <i class="fa-brands fa-instagram font-xl text-white pr-2 self-center"></i>
                                            <p class="font-bold text-white self-center md:text-md text-sm">
                                                smkspersada@gmail.com</p>
                                        </a>
                                    </li>
                                </ul>
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
