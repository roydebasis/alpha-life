<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">

    @include('frontend.includes.meta')

    <!-- Shortcut Icon -->
{{--    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">--}}
{{--    <link rel="icon" type="image/ico" href="{{asset('img/favicon.png')}}" />--}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('before-styles')

{{--    <link rel="stylesheet" href="{{ mix('css/frontend.css') }}">--}}
    <!--  favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/ico/favicon.png') }}" >
    <!--  apple-touch-icon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{ asset('assets/images/ico/apple-touch-icon-144-precomposed.png')}}" >
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{ asset('assets/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/ico/apple-touch-icon-57-precomposed.png')}}">


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
    <!-- animate CSS -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Flat Icon CSS -->
    <link href="{{ asset('assets/fonts/flaticon/flaticon.css') }}" rel="stylesheet">
    <!-- magnific-popup -->
    <link href="{{ asset('assets/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <!-- owl.carousel -->
    <link href="{{ asset('assets/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/owl-carousel/owl.theme.css') }}" rel="stylesheet">
    <!-- swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- Bootstrap -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('assets/jquery-ui-1.13.0/jquery-ui.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">


{{--    @stack('after-styles')--}}

    <x-google-analytics />
</head>

<body>

    @include('frontend.includes.header')

    <x-preloader />

    <main>
        @yield('content')
    </main>

    @include('frontend.includes.footer')

</body>

<!-- Scripts -->
@stack('before-scripts')

<script src="{{ mix('js/frontend.js') }}"></script>
<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.min.js') }}"></script>
<script src="{{ asset('assets/js/smoothscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countTo.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.shuffle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.BlackAndWhite.min.js') }}"></script>
<script src="{{ asset('assets/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.js"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/jquery-ui-1.13.0/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/calculator.js') }}"></script>
<script type="text/javascript">
    function activeCalculator() {
        $('#calculatorActivator').trigger('click');
        scrollToSection('servicetabs');
    }

    function scrollToSection(id) {
        $('html, body').animate({
            scrollTop: $('#' + id).offset().top
        }, 1000);
    }

    function vidplay() {
        var video = document.getElementById("videoPlayer");
        var button = document.getElementById("playbtn");
        if (video.paused) {
            video.play();
            button.className = "pause"
        } else {
            video.pause();
            button.className = "play"
        }
    }
</script>

@stack('after-scripts')

</html>
