@extends('layouts.others')
@section('content')
    <section class="blog_grid_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-2">
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
            </div>
        </div>
    </section>
@endsection
