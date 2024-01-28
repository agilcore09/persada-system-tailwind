<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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

        // var a = document.createElement("a");
        // a.setAttribute("data-fslightbox", "gallery");
        // a.setAttribute("href", "/sertivikasi/mikrotik.jpg");
        // document.body.appendChild(a);
        // refreshFsLightbox();
        //fsLightbox.open();
    </script>
</body>

</html>
