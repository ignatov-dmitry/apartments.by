<nav class="navbar navbar-expand-lg  header_navbar">
    <a class="navbar-brand" href="#">
        <img src="/assets/images/logo.png" alt="" />
        <span>
              Evernest
            </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item active">
                <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('apartments') }}">Каталог <span class="sr-only">(current)</span></a>
            </li>

            @if(count($blogMenu))
            <li class="nav-item custom_dropdown page_link_dmenu">
                <a class="nav-link dropdown-toggle" href="#"> Блог </a>
                <div class="custom_dropdown-menu page_link_sm-menu">
                    @foreach($blogMenu as $item)
                        <a class="dropdown-item" href="{{ route('getBlogPostsFromCategory', ['categoryId' => $item->id]) }}">{{ $item->name }}</a>
                    @endforeach
                </div>
            </li>
            @endif
{{--            <li class="nav-item custom_dropdown page_link_dmenu">--}}
{{--                <a class="nav-link dropdown-toggle" href="#"> Pages </a>--}}
{{--                <div class="custom_dropdown-menu page_link_sm-menu">--}}
{{--                    <a class="dropdown-item" href="about.html">About</a>--}}
{{--                    <a class="dropdown-item" href="pricing.html">Pricing</a>--}}
{{--                    <a class="dropdown-item" href="service.html">Services</a>--}}
{{--                    <a class="dropdown-item" href="property_detail.html">Property Detail</a>--}}
{{--                    <a class="dropdown-item" href="team.html">Our Team</a>--}}
{{--                    <a class="dropdown-item" href="testimonial.html">Testimonial</a>--}}
{{--                    <a class="dropdown-item" href="faq.html">Faq</a>--}}
{{--                    <a class="dropdown-item" href="404_error.html">404 Error</a>--}}
{{--                </div>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link" href="property.html"> Properties </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html"> Contact </a>
            </li>

            @auth
            <li class="nav-item custom_dropdown blog_link_dmenu">
                <a class="nav-link dropdown-toggle" href="#"> Управление </a>
                <div class="custom_dropdown-menu blog_link_sm-menu">
                    <a class="dropdown-item" href="{{ route('admin') }}">Панель управления</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Выйти</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
            @endauth
        </ul>

        <div class="user_option">
            @auth
            @else
            <a href="{{ route('auth') }}" class="user_login_link">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 518.95 441.44">
                    <defs>
                        <style>
                            .cls-1 {
                                isolation: isolate;
                            }
                        </style>
                    </defs>
                    <title>user-icon</title>
                    <g class="">
                        <path class="" d="M631.75,452.8A132.22,132.22,0,0,1,659,495.72H140.05q9.84-24.53,30.1-45.27,21.27-21.69,52.41-37.73,89.78-47.16,181.63-45.51T585.83,417.9Q613.32,433,631.75,452.8ZM322.2,73.15q-34.77,17.92-55,49.75A127.59,127.59,0,0,0,247,192.7a126.32,126.32,0,0,0,20.76,70,146.22,146.22,0,0,0,55.53,50.46q35.28,18.87,77.06,18.63t77.07-19.57q34.75-18.86,54.49-50,20.75-32.55,20.75-70.27t-21.27-69.8q-20.25-31.12-54.49-49a163.52,163.52,0,0,0-77.33-18.87Q357.49,54.28,322.2,73.15Z" transform="translate(-140.05 -54.28)" />
                    </g>
                </svg>
            </a>
            @endauth
            <!--
            <form action="#" class="form-inline my-1 my-lg-0">
                <input class="form-control  user_search_input" type="search" placeholder="Search" aria-label="Search" />
                <button class=" my-2 my-sm-0 user_search_btn" type="submit">
                    <svg enable-background="new 0 0 515.558 515.558" height="512" viewBox="0 0 515.558 515.558" width="512" xmlns="http://www.w3.org/2000/svg">
                        <path d="m378.344 332.78c25.37-34.645 40.545-77.2 40.545-123.333 0-115.484-93.961-209.445-209.445-209.445s-209.444 93.961-209.444 209.445 93.961 209.445 209.445 209.445c46.133 0 88.692-15.177 123.337-40.547l137.212 137.212 45.564-45.564c0-.001-137.214-137.213-137.214-137.213zm-168.899 21.667c-79.958 0-145-65.042-145-145s65.042-145 145-145 145 65.042 145 145-65.043 145-145 145z" />
                    </svg>
                </button>
            </form>
            -->
        </div>

    </div>
</nav>
