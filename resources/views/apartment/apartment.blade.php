@extends('layouts.others')
@section('content')

    <section class="property_detail_section layout_padding" lang="zxx">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_detail_container blog_grid_section">
                        <div class="box">
                            <div id="customSlider2" class="carousel slide " data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="img-box">
                                            <img src="{{ $apartment->image }}" class="img_w100" alt="Blog image" />
                                        </div>
                                    </div>
                                </div>
                                <ol class="carousel-indicators main_indicator">
                                    <li data-target="#customSlider2" data-slide-to="0" class="active"></li>
                                </ol>
                                <ol class="carousel-indicators second_indicator">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active indicator-li-1">01</li>
                                </ol>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Описание
                                </h5>
                                <div class="property_info">
                                    <h6>
                                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 323.25 475.54">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        isolation: isolate;
                                                    }
                                                </style>
                                            </defs>
                                            <title>location</title>
                                            <g class="cls-1">
                                                <path class="" d="M397.29,537.57q-17.4-22.82-29.89-41.29-54.88-77.16-89.12-148.35Q267.4,325.1,261.44,308.8a265.19,265.19,0,0,1-12-40.75Q233.72,188.18,287,128.4q50.53-57.6,129.87-54.34a147.84,147.84,0,0,1,66.84,18.2,164.16,164.16,0,0,1,53.25,45.92,155.85,155.85,0,0,1,28.8,63.57,166.86,166.86,0,0,1-4.89,85.32q-23.37,73.35-77.7,156.5Q467.37,468,433.7,515.29l-22.83,32.07a12.16,12.16,0,0,0-1.63,1.9c-.36.54-1.72-.27-4.07-2.45A62.64,62.64,0,0,1,397.29,537.57Zm89.66-300a77,77,0,0,0-9-38.31,81.36,81.36,0,0,0-26.62-29.89,72,72,0,0,0-37.23-12.77A84.73,84.73,0,0,0,372,165.07a75,75,0,0,0-30.7,27.45q-11.42,17.92-12.5,41.29a69.89,69.89,0,0,0,9,38.31A84.82,84.82,0,0,0,365.23,302a69.32,69.32,0,0,0,37.49,12.23,81.72,81.72,0,0,0,41.3-8.43,75.29,75.29,0,0,0,30.43-27.44Q485.87,260.45,487,237.62Z" transform="translate(-245.88 -73.88)"></path>
                                            </g>
                                        </svg>
                                        <span>
                                            {{ $apartment->country->name }}, {{ $apartment->city->name }}
                                          </span>
                                    </h6>
                                    <h6 class="blog_comment property_price">
                                      <span>
                                        {{ $apartment->price }} BYN
                                      </span>
                                    </h6>
                                </div>
                                <form action="/add_favorite" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $apartment->id }}">
                                    <button class="btn btn-info" type="submit">В избранное</button>
                                </form>
                                <p>
                                    {{ $apartment->description }}
                                </p>
                            </div>
                        </div>
                        <div class="property_detail_info">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav " data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#ItemDetailsTab" data-toggle="tab">Детали</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#itemFeaturesTab" data-toggle="tab">Особенности</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content ">
                                <div class="tab-pane active" id="ItemDetailsTab">
                                    <div class="property_item_details">
                                        <h5>Цена квадрата: <span>{{ round($apartment->price / $apartment->area, 2) }}&nbsp;BYN</span></h5>
                                        <h5>Площадь: <span> {{ $apartment->area }}</span></h5>
                                        <h5>Комнаты: <span> {{ $apartment->rooms }}</span></h5>
                                        @foreach($dynamic_attributes as $dynamic_attribute)
                                            <h5>{{ $dynamic_attribute->attribute->name }}: <span> {{ $dynamic_attribute->value }}</span></h5>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane" id="itemFeaturesTab">
                                    <div class="property_item_features property_item_details">
                                        @foreach($static_attributes as $static_attribute)
                                            <h5>
                                                <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m512 58.667969c0-32.363281-26.304688-58.667969-58.667969-58.667969h-394.664062c-32.363281 0-58.667969 26.304688-58.667969 58.667969v394.664062c0 32.363281 26.304688 58.667969 58.667969 58.667969h394.664062c32.363281 0 58.667969-26.304688 58.667969-58.667969zm0 0" fill="#4caf50" />
                                                    <path d="m385.75 171.585938c8.339844 8.339843 8.339844 21.820312 0 30.164062l-138.667969 138.664062c-4.160156 4.160157-9.621093 6.253907-15.082031 6.253907s-10.921875-2.09375-15.082031-6.253907l-69.332031-69.332031c-8.34375-8.339843-8.34375-21.824219 0-30.164062 8.339843-8.34375 21.820312-8.34375 30.164062 0l54.25 54.25 123.585938-123.582031c8.339843-8.34375 21.820312-8.34375 30.164062 0zm0 0" fill="#fafafa" />
                                                </svg>
                                                <span> {{ $static_attribute->attribute->name }}</span>
                                            </h5>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user_comment_form">
                            <h4>
                                Оставить заявку
                            </h4>
                            <form method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputBlogUserName">Имя</label>
                                        <input type="text" class="form-control" id="inputBlogUserName" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputBlogUserEmail">Email</label>
                                        <input type="email" class="form-control" id="inputBlogUserEmail" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="BlogUserTextarea">Сообщение</label>
                                        <textarea class="form-control" id="BlogUserTextarea" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <button type="submit" class="btn ">
                                      <span>
                                        Отправить
                                      </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
