<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Designed and Developed by Luke Hardcastle - virtuallyketa.com -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtually Keta | Virtual Assistant</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<style>
    .swiper-button-next, .swiper-button-prev {
        font-size: 10px !important;
    }
</style>
<body class="bg-white text-gray-800">

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    const swiper = new Swiper('.testimonial-swiper', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        breakpoints: {
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
        },
        autoplay: {
            delay: 4000, // 4 seconds between slides
            disableOnInteraction: false, // keeps autoplay running after manual nav
        },
        navigation: {
            nextEl: '.custom-swiper-next',
            prevEl: '.custom-swiper-prev',
        },
    });
    </script>

</body>
</html>
