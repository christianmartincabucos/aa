<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- <link href="//db.onlinewebfonts.com/c/edc378fa3251080c5b508b220462efca?family=Gotham" rel="stylesheet" type="text/css" /> -->
    <link rel="https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css">

    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{{ secure_asset('storage/A&A-logo-big-website.jpeg') }}}">

    <!-- <link href="{{ secure_asset('storage/fonts/Gotham/gotham.woff2') }}" rel="stylesheet" type="text/css" /> -->

    <link href="">
    <style>
        @font-face {
            font-family: "Gotham";
            src: 'https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css'
        }

        * {
            font-family: 'Gotham' !important;
            font-weight: 800 !important;
            word-spacing: 5px !important;
        }

        .main-header {
            border-bottom: none !important;
        }

        .content-wrapper {
            background-color: #fff !important;
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.2) !important;
        }

        #button {
            display: inline-block;
            background-color: #FF9800;
            width: 50px;
            height: 50px;
            text-align: center;
            border-radius: 4px;
            position: fixed;
            bottom: 30px;
            right: 30px;
            transition: background-color .3s,
                opacity .5s, visibility .5s;
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }

        #button::after {
            content: "\f077";
            font-family: FontAwesome;
            font-weight: normal;
            font-style: normal;
            font-size: 2em;
            line-height: 50px;
            color: #fff;
        }

        #button:hover {
            cursor: pointer;
            background-color: #333;
        }

        #button:active {
            background-color: #555;
        }

        #button.show {
            opacity: 1;
            visibility: visible;
        }
    </style>
    @stack('css')
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed">
    <div class="wrapper">
        <a id="button"></a>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <a class="navbar-toggler nav-link" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></a>
                <a href="" class="navbar-brand ml-5">
                    <img src="{{ secure_asset('storage/A&A-logo-big-website.jpeg') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
                    <!-- <span class="brand-text font-weight-light"><b>A</b>&<b>A</b></span> -->
                </a>


                <div class="justify-content-center collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav smooth-scroll">
                        <li class="nav-item">
                            <a href="#home" class="nav-link font-weight-bold">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#references" class="nav-link font-weight-bold">References</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link font-weight-bold">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#reviews" class="nav-link font-weight-bold">Reviews</a>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item">
                        <button type="button" class="btn btn-sm bg-gradient-secondary btn-flat">Contact</button>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content">
                    @yield('content')
                </section>
            </div>

        </div>

        <script src="{{ secure_asset('js/app.js') }}"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
            var btn = $('#button');
            $(document).ready(function() {

                // NAVIGATION LOGO SCROLL TOP
                $('.logo').on('click', function(e) {
                    e.preventDefault();
                    $('.nav-toggle').removeClass('open');
                    $('.menu-left').removeClass('collapse');
                    $('html, body').animate({
                        scrollTop: 0
                    }, 750, 'easeInOutQuad')
                });
                // LINKS TO ANCHORS
                $('a[href^="#"]').on('click', function(event) {

                    var $target = $(this.getAttribute('href'));

                    if ($target.length) {
                        event.preventDefault();
                        $('html, body').stop().animate({
                            scrollTop: $target.offset().top
                        }, 750, 'easeInOutQuad');
                    }
                });

                // TOGGLE HAMBURGER & COLLAPSE NAV
                $('.nav-toggle').on('click', function() {
                    $(this).toggleClass('open');
                    $('.menu-left').toggleClass('collapse');
                });
                // REMOVE X & COLLAPSE NAV ON ON CLICK
                $('.menu-left a').on('click', function() {
                    $('.nav-toggle').removeClass('open');
                    $('.menu-left').removeClass('collapse');
                });

                // SHOW/HIDE NAV

                // Hide Header on on scroll down
                var didScroll;
                var lastScrollTop = 0;
                var delta = 5;
                var navbarHeight = $('header').outerHeight();

                $(window).scroll(function(event) {
                    didScroll = true;
                });

                setInterval(function() {
                    if (didScroll) {
                        hasScrolled();
                        didScroll = false;
                    }
                }, 250);

                function hasScrolled() {
                    var st = $(this).scrollTop();

                    // Make sure they scroll more than delta
                    if (Math.abs(lastScrollTop - st) <= delta)
                        return;

                    // If they scrolled down and are past the navbar, add class .nav-up.
                    // This is necessary so you never see what is "behind" the navbar.
                    if (st > lastScrollTop && st > navbarHeight) {
                        // Scroll Down
                        $('header').removeClass('show-nav').addClass('hide-nav');
                        $('.nav-toggle').removeClass('open');
                        $('.menu-left').removeClass('collapse');
                    } else {
                        // Scroll Up
                        if (st + $(window).height() < $(document).height()) {
                            $('header').removeClass('hide-nav').addClass('show-nav');
                        }
                    }

                    lastScrollTop = st;
                }
                $(window).scroll(function() {
                    if ($(window).scrollTop() > 300) {
                        btn.addClass('show');
                    } else {
                        btn.removeClass('show');
                    }
                });

                btn.on('click', function(e) {
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: 0
                    }, '300');
                });
            });
        </script>
        @stack('js')
</body>

</html>
