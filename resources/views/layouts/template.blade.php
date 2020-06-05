<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="manifest" href="{{ asset('manifest.json') }}">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Find Apartment">
    <meta name="apple-mobile-web-app-title" content="Find Apartment">
    <meta name="theme-color" content="#6a7be7">
    <meta name="msapplication-navbutton-color" content="#6a7be7">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Selio - Real Estate HTML Template</title>
    <meta name="description" content="">
    <!--<link rel="shortcut icon" href="assets/images/favicon.png">-->

{{--    <link rel="stylesheet" href="{{ asset('client/css/animate.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('client/js/lib/slick/slick.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('client/js/lib/slick/slick-theme.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/responsive.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/color.css') }}">--}}

</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


<div class="wrapper">

    <header>

        <div class="header shd">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="01_Home.html">
                                <img src="/client/images/logo.png" alt="">
                            </a>
                            <button class="menu-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                                <span class="icon-spar"></span>
                                <span class="icon-spar"></span>
                                <span class="icon-spar"></span>
                            </button>

                            <div class="navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item dropdown active">
                                        <a class="nav-link" href="/">
                                            Главная
                                        </a>

                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                            Квартиры
                                        </a>
                                        <div class="dropdown-menu animated">
                                            <a class="dropdown-item" href="#">На сутки</a>
                                            <a class="dropdown-item" href="#">На продолжительное время</a>
                                            <a class="dropdown-item" href="{{ route('apartments') }}">Все</a>
                                        </div>
                                    </li>
                                    <!--<li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                            Listing
                                        </a>
                                        <div class="dropdown-menu animated">
                                            <a class="dropdown-item" href="21_List_Layout_With_Map.html">List Layout with Map</a>
                                            <a class="dropdown-item" href="22_List_Layout_With_Sidebar.html">List Layout with Sidebar</a>
                                            <a class="dropdown-item" href="11_Agent_Profile.html">Agent Profile</a>
                                            <a class="dropdown-item" href="24_Property_Single.html">Property Single</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">
                                            Pages
                                        </a>
                                        <div class="dropdown-menu animated">
                                            <a class="dropdown-item" href="12_Blog_Grid.html">Blog Grid</a>
                                            <a class="dropdown-item" href="13_Blog_Standart.html">Blog Standard</a>
                                            <a class="dropdown-item" href="14_Blog_Open.html">Blog Open</a>
                                            <a class="dropdown-item" href="10_About.html">About</a>
                                            <a class="dropdown-item" href="15_Contact.html">Contact</a>
                                            <a class="dropdown-item" href="09_404.html">404</a>
                                        </div>
                                    </li>-->
                                </ul>
                                @guest
                                <div class="d-inline my-2 my-lg-0">
                                    <ul class="navbar-nav">
                                        <li class="nav-item signin-btn">
                                            <a href="#" class="nav-link">
                                                <i class="la la-sign-in"></i>
                                                <span><b class="signin-op">Войти</b> или <b class="reg-op">Зарегестрироваться</b></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                @else
                                <div class="d-inline my-2 my-lg-0">
                                    <ul class="navbar-nav">
                                        <li class="nav-item submit-btn">
                                            <a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="my-2 my-sm-0 nav-link sbmt-btn">
                                                <!--<i class="icon-plus"></i>-->
                                                <span>Выйти</span>
                                            </a>
                                        </li>
                                        <li class="nav-item submit-btn">
                                            <a href="/admin" class="my-2 my-sm-0 nav-link sbmt-btn">
                                                <!--<i class="icon-plus"></i>-->
                                                <span>Управление</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                                @endguest
                                <a href="#" title="" class="close-menu"><i class="la la-close"></i></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header><!--header end-->
    @guest
    <div class="popup" id="sign-popup">
        <h3>Войти в свой аккаунт</h3>
        <div class="popup-form">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-field">
                    <input type="email" placeholder="e-mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-field">
                    <input placeholder="Пароль" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-cp">
                    <div class="form-field">
                        <div class="input-field">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="cc1">
                            <label for="cc1">
                                <span></span>
                                <small>Запомнить меня</small>
                            </label>
                        </div>
                    </div>
                    <a href="{{ route('password.request') }}" title="">Забыли пароль?</a>
                </div><!--form-cp end-->
                <button type="submit" class="btn2">Sign In</button>
            </form>
            <a href="{{ route('vk_login') }}" title="" class="vk-btn"> <i class="fa fa-vk"></i>Войти через ВКонтакте</a>
            <a href="{{ route('google_login') }}" title="" class="google-btn"> <i class="fa fa-google"></i>Войти через Google</a>
        </div>
    </div><!--popup end-->
    @else
        <!--You're logged-->
    @endguest
    <div class="popup" id="register-popup">
        <h3>Регистрация</h3>
        <div class="popup-form">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-field">
                    <input placeholder="Имя" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-field">
                    <input placeholder="EMAIL" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-field">
                    <select class="form-control" name="role_id">
                        <option value="3">Клиент</option>
                        <option value="2">Арендодатель</option>
                    </select>
                </div>

                <div class="form-field">
                    <input placeholder="Пароль" id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-field">
                    <input placeholder="Подтверждение пароля" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
                <div class="form-cp">
                    <!--<div class="form-field">
                        <div class="input-field">
                            <input type="checkbox" name="ccc" id="cc2">
                            <label for="cc2">
                                <span></span>
                                <small>I agree with terms</small>
                            </label>
                        </div>
                    </div>-->
                    <a href="#" title="" class="signin-op">У вас есть аккаунт?</a>
                </div><!--form-cp end-->
                <button type="submit" class="btn2">Зарегистрироваться</button>
            </form>
            <a href="{{ route('vk_login') }}" title="" class="vk-btn"> <i class="fa fa-vk"></i>Регистрация через ВКонтакте</a>
            <a href="{{ route('google_login') }}" title="" class="google-btn"> <i class="fa fa-google"></i>Регистрация через Google</a>
        </div>
    </div><!--popup end-->

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-content">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-md-6">
                                <div class="copyright">
                                    <p>&copy; Selio theme made in EU. All Rights Reserved.</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="footer-social">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--footer end-->


</div><!--wrapper end-->




<script>
   /* if ('serviceWorker' in navigator) {
        navigator.serviceWorker && navigator.serviceWorker.register('./service-worker.js').then(function(registration) {
            console.log('Excellent, registered with scope: ', registration.scope);
        });
    }*/

</script>




<!-- Maps -->
<script src="https://api-maps.yandex.ru/2.1/?apikey={{ env('YANDEX_MAPS_API') }}&lang=ru_RU" type="text/javascript"></script>
<script src="{{ asset('app.js') }}"></script>
@guest
@else
<script type="text/javascript" src="https://www.gstatic.com/firebasejs/5.8.5/firebase.js"></script>
<script type="text/javascript" src="{{ asset('firebase_subscribe.js') }}"></script>
@endguest
@yield('script')
<noscript>Please enable JavaScript to continue using this application.</noscript>

</body>

</html>
