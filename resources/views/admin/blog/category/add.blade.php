@php
    $head_text = 'Добавить категорию';
@endphp
@extends('layouts.others')
@section('content')
    <section class="layout_margin pl_mobile_20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('addBlogCategory') }}" method="POST" enctype="multipart/form-data">
                        <h2>Данные</h2>
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Название категории</label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Название категории">
                        </div>
                        <div class="form-group">
                            <label for="category_description">Описание</label>
                            <textarea class="form-control" type="text" id="category_description" name="description" placeholder="Описание"></textarea>
                        </div>
                        <div class="form-group">
                            <img id="preview_image" src="" alt="">
                            <div class="input__wrapper">
                                <label for=input__file"">Картинка категории</label>
                                <input class="form-control input input__file" type="file" accept="image/*" id="input__file" name="image" placeholder="Описание">
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
    <script>
        $(document).ready(function () {
            $(document).ready(function () {
                var editor = $('#category_description');

                var configFull = {
                    lang: 'ru-RU', // default: 'en-US'
                    shortcuts: false,
                    airMode: false,
                    minHeight: 300, // set minimum height of editor
                    maxHeight: 500, // set maximum height of editor
                    focus: false, // set focus to editable area after initializing summernote
                    disableDragAndDrop: false,
                    callbacks: {
                        onImageUpload: function (files) {
                            uploadFile(files);
                        },

                        onMediaDelete: function ($target, editor, $editable) {

                            var fileURL = $target[0].src;
                            deleteFile(fileURL);
                            $target.remove();
                        }
                    }
                };

                editor.summernote(configFull);
                function uploadFile(filesForm) {

                    data = new FormData();

                    for (var i = 0; i < filesForm.length; i++) {
                        data.append("file", filesForm[i]);
                    }
                    $.ajax({
                        data: data,
                        type: "POST",
                        url: "/ajax/uploader/category",
                        cache: false,
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        contentType: false,
                        processData: false,
                        success: function (image) {
                            if (typeof image['error'] == 'undefined') {
                                console.log(image);
                                editor.summernote('insertImage', image['url'], function ($image) {
                                    //$image.css('width', $image.width() / 3);
                                    //$image.attr('data-filename', 'retriever')
                                });
                            }
                            else {
                                var userLang = navigator.language || navigator.userLanguage;

                                if (userLang === 'ru-RU') {
                                    let error = 'Ошибка, не могу загрузить файл! Пожалуйста, проверьте файл или ссылку. ' +
                                        'Изображение должно быть не менее 500px!';
                                }
                                else {
                                    let error = 'Error, can\'t upload file! Please check file or URL. Image should be more then 500px!';
                                }

                                alert(error);
                            }
                        }
                    });
                }

                function deleteFile(file) {
                    data = new FormData();
                    data.append("file", file);
                    $.ajax({
                        data: data,
                        type: "POST",
                        url: "/ajax/uploader/delete",
                        cache: false,
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        contentType: false,
                        processData: false,
                        success: function (image) { }
                    });
                }
            });
        });
    </script>
@endsection
