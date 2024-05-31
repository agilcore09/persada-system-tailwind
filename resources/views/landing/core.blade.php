<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="SMK PERSADA MAKASSAR">
    <meta name="keywords" content="SMK PERSADA MAKASSAR">


    <meta property="og:title" content="SMK PERSADA MAKASSAR" />
    <meta property="og:description"
        content="SMK PERSADA adalah sekolah kejuruan yang memiliki 2 jurusan yaitu TKJ (Teknik Komputer Jaringan) dan TKR (Teknik Kendaraan Ringan)" />
    <link href="{{ asset('img/bg.png') }}" rel="stylesheet">

    <title>SMK PERSADA</title>
</head>
<style>
    /* script blank page AOS */
    @media (max-width: 768px) {
        .hideOverflowOnMobile {
            overflow: hidden;
        }
    }
</style>

<body>

    @yield('body')

    <script src="jquery.js"></script>
    <script src="custom.js"></script>
    <script src="{{ asset('lightbox/fslightbox.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        $(".tekan").on("click", function() {
            if ($(".list").first().is(":hidden")) {
                $(".list").slideDown();
            } else {
                $(".list").slideUp();
            }
        });

        // inisialiasi jika aos dalam keadaan mobile untuk mengatasi blank page
        $('[data-aos]').parent().addClass('hideOverflowOnMobile');
    </script>
</body>

</html>
