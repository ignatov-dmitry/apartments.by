@php
    $head_text = 'Обновить категорию';
@endphp
@extends('layouts.others')
@section('content')
    <section class="layout_margin pl_mobile_20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('updateBlogCategory') }}" method="POST" enctype="multipart/form-data">
                        <h2>Данные</h2>
                        {{ csrf_field() }}
                        <input type="hidden" id="apartment_id" name="id" value="{{ $blogCategory->id }}">
                        <div class="form-group">
                            <label for="name">Название категории</label>
                            <input class="form-control" value="{{ $blogCategory->name }}" type="text" id="name" name="name" placeholder="Название категории">
                        </div>
                        <div class="form-group">
                            <label for="category_description">Описание</label>
                            <textarea class="form-control" type="text" id="category_description" name="description" placeholder="Описание">{{ $blogCategory->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <img id="preview_image" src="{{ $blogCategory->image }}" alt="">
                            <div class="input__wrapper">
                                <label for=input__file"">Картинка категории</label>
                                <input value="{{ $blogCategory->image }}" class="form-control input input__file" type="file" accept="image/*" id="input__file" name="image" placeholder="Описание">
                                <label for="input__file" class="input__file-button">
                                    <span class="input__file-icon-wrapper"><img class="input__file-icon" src="{{ asset('assets/images/add.svg') }}" alt="Выбрать файл" width="25"></span>
                                    <span class="input__file-button-text">Выберите файл</span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-danger">
                            <span>
                              Сохранить
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <link rel="stylesheet" href="{{ asset('assets/css/summernote.css') }}" />
    <script src="{{ asset('assets/js/summernote.js') }}"></script>
    <script src="{{ asset('assets/js/summernote-ru-RU.js') }}"></script>
    <script src="{{ asset('assets/js/summernote_editor_settings.js') }}"></script>
@endsection
