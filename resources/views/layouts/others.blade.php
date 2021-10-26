<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- site icons -->
    <link rel="icon" href="/favicon.ico" type="image/gif" />
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <!-- nice select css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nice-select.min.css') }}" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Site css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/selectize.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="default_theme" class="property_page sub_page">
<!-- loader -->
<div class="bg_load"><img class="loader_animation" src="/public/assets/images/loader.svg" alt="#" /></div>
<!-- end loader -->
<!-- hero area starts -->
<div class="hero_area">
    <!-- header section starts -->
    <header class="header_section">
        <!-- navbar starts -->
    @include('partials.menu')
        <!-- navbar ends -->
    </header>
    <!-- header section ends -->
</div>

<div class="page_info layout_padding pr_mobile_20">
    <div class="section_bg section_bg_left "></div>
    <div class="container">
        <div class="page_box">
            <h2 class="page_name">
                {{$head_text}}
            </h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$head_text}}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- hero area ends -->


@yield('content')

<!-- footer section -->
<footer class="footer_section ">
    <p>
        &copy; <span id="displayDate"></span> All Rights Reserved. Design by
        <a href="https://html.design/">Free Html Templates</a>
    </p>
</footer>
<!-- end  footer section -->

<!-- js section -->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
@yield('js')
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
<!-- End Google Map -->
</body>
</html>
