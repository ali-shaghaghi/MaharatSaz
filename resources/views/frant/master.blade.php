<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <title> دوره آنلاین و آموزش</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content=" دوره آنلاین و آموزش">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('front/assets/images/favicon.ico') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('front/assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('front/assets/vendor/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('front/assets/vendor/glightbox/css/glightbox.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('front/assets/css/style-rtl.css') }}">
    @livewireStyles
</head>

<body>
    <!-- **************** Header CONTENT **************** -->
    <livewire:front.layouts.header />

    <!-- **************** MAIN CONTENT **************** -->
    {{ $slot }}

    <!-- **************** Footer CONTENT **************** -->
    <livewire:front.layouts.footer />

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
    </div>


    @livewireScripts
    <!-- Bootstrap JS -->
    <script src="{{ url('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendors -->
    <script src="{{ url('front/assets/vendor/tiny-slider/tiny-slider-rtl.js') }}"></script>
    <script src="{{ url('front/assets/vendor/glightbox/js/glightbox.js') }}"></script>
    <script src="{{ url('front/assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>

    <!-- Template Functions -->
    <script src="{{ url('front/assets/js/functions.js') }}"></script>
    <!-- rtl-theme script-->
    <script src="https://files-de.rtl-theme.com/jsdemos/79df7d11747f944da7628dfc1c76f709661cfe8f.js?pid=257550"></script>
</body>

</html>
