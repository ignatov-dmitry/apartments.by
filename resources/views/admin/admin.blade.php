@extends('layouts.others')
@section('content')
    <section class="blog_grid_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="box">
                        <div class="detail-box">
                            <h5>
                                Добавить квартиру
                            </h5>
                            <div class="blog_bottom">
                                <a href="{{ route('addApartmentGet') }}" class="blog_btn">
                                    <span>
                                      Перейти
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="box">
                        <div class="detail-box">
                            <h5>
                                Список квартир
                            </h5>
                            <div class="blog_bottom">
                                <a href="{{ route('list') }}" class="blog_btn">
                                    <span>
                                      Перейти
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @admin
                <div class="col-md-4 ">
                    <div class="box">
                        <div class="detail-box">
                            <h5>
                                Атрибуты квартир
                            </h5>
                            <div class="blog_bottom">
                                <a href="{{ route('attributes') }}" class="blog_btn">
                                    <span>
                                      Перейти
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="box">
                        <div class="detail-box">
                            <h5>
                                Менеджеры
                            </h5>
                            <div class="blog_bottom">
                                <a href="{{ route('managers') }}" class="blog_btn">
                                    <span>
                                      Перейти
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endadmin
                @manager
                <div class="col-md-4 ">
                    <div class="box">
                        <div class="detail-box">
                            <h5>
                                Ползователи
                            </h5>
                            <div class="blog_bottom">
                                <a href="{{ route('customers') }}" class="blog_btn">
                                    <span>
                                      Перейти
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endmanager
                @admin
                <div class="col-md-4 ">
                    <div class="box">
                        <div class="detail-box">
                            <h5>
                                Аналитика
                            </h5>
                            <div class="blog_bottom">
                                <a href="{{ route('charts') }}" class="blog_btn">
                                    <span>
                                      Перейти
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endadmin
                @manager
                <div class="col-md-4 ">
                    <div class="box">
                        <div class="detail-box">
                            <h5>
                                Блог
                            </h5>
                            <div class="blog_bottom">
                                <a href="{{ route('adminBlog') }}" class="blog_btn">
                                    <span>
                                      Перейти
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endmanager
            </div>
        </div>
    </section>
@endsection
