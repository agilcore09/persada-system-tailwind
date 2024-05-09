<div class="grid md:grid-cols-12 grid-cols-12" id="home">
    <section class="col-span-12 font-body bg-center bg-no-repeat  bg-jumbotron bg-cover">
        <div class="px-4 mx-auto text-center py-24 lg:py-56">
            <h1 class="mb-4 text-2xl md:text-5xl lg:text-6xl font-extrabold tracking-tight leading-none text-white ">
                {{ $title }}
            </h1>
            <p class="mb-8 text-md font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">{{ $body }}</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-950 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Daftarkan Dirimu!
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-1 md:py-3 px-3 md:px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>
</div>
