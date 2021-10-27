@php
$head_text = 'Управление блогом';
@endphp
@extends('layouts.others')

@section('content')
    <section class="blog_grid_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="box">
                        <div class="detail-box">
                            <h5>
                                Добавить категорию
                            </h5>
                            <div class="blog_bottom">
                                <a href="{{ route('addBlogCategoryForm') }}" class="blog_btn">
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
                                Список категорий
                            </h5>
                            <div class="blog_bottom">
                                <a href="{{ route('listBlogCategories') }}" class="blog_btn">
                                    <span>
                                      Перейти
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 ">
                    <div class="box">
                        <div class="detail-box">
                            <h5>
                                Добавить статью
                            </h5>
                            <div class="blog_bottom">
                                <a href="{{ route('addBlogPostForm') }}" class="blog_btn">
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
                                Список статей
                            </h5>
                            <div class="blog_bottom">
                                <a href="{{ route('listBlogPosts') }}" class="blog_btn">
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
