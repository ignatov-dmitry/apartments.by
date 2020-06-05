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
    <link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
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
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="default_theme" class="home_page">
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
    <!-- slider section starts -->
    <section class="slider_section pl_mobile_20">
        <div class="section_bg section_bg_right"></div>
        <div class="name_design">
            <h6>
                RealEstate
            </h6>
        </div>
        <div id="customSlider1" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="detail-box mb_md_75">
                                    <h1>
                                        Квартиры <br />
                                        на любой вкус
                                    </h1>
                                    <p>
                                       Множество вариантов для вашего уюта
                                    </p>
                                    <a href="contact.html" class="hero_btn">
                        <span>
                          Связаться
                        </span>
                                        <span class="icon_span">
                          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 331.64 322.79">
                            <defs>
                              <style>
                                .cls-1 {
                                    isolation: isolate;
                                }
                              </style>
                            </defs>
                            <title>right-arrow</title>
                            <g class="cls-1">
                              <path class="" d="M259.32,281.46H448.91l-70.75-70.74a13.44,13.44,0,0,1,0-17.69L408,163.73a12.05,12.05,0,0,1,17.68,0L574.38,312.42a12,12,0,0,1,0,17.68L425.69,478.79a12,12,0,0,1-17.68,0l-29.85-29.3a13.43,13.43,0,0,1,0-17.68l75.72-75.73H259.32a12.28,12.28,0,0,1-12.71-12.71V293.63a11.68,11.68,0,0,1,3.59-8.57A12.4,12.4,0,0,1,259.32,281.46Z" transform="translate(-246.61 -159.87)" />
                            </g>
                          </svg>
                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="img-box">
                                    <img src="/public/assets/images/slider-img.png" alt="Appartment Image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators main_indicator">
                <li data-target="#customSlider1" data-slide-to="0" class="active"></li>
            </ol>
            <ol class="carousel-indicators second_indicator">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active indicator-li-1">01</li>
            </ol>
        </div>
    </section>
    <!-- slider section ends -->
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
<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- owl slider -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- nice select -->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- users scripts -->
@yield('js')
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
<!-- End Google Map -->
</body>
</html>
