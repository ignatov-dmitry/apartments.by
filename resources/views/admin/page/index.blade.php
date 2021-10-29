@extends('layouts.others')
@section('content')
    <section class="blog_grid_section">
        <div class="container">
            <div class="row">
                @admin
                <div class="col-md-4 offset-md-2">
                    <div class="box">
                        <div class="detail-box">
                            <h5>
                                Добавить страницу
                            </h5>
                            <div class="blog_bottom">
                                <a href="{{ route('addAdminPageForm') }}" class="blog_btn">
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
                                Список страниц
                            </h5>
                            <div class="blog_bottom">
                                <a href="{{ route('listAdminPages') }}" class="blog_btn">
                                    <span>
                                      Перейти
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endadmin
            </div>
        </div>
    </section>
@endsection
