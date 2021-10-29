@php
    $head_text = 'Редактировать страницу';
@endphp
@extends('layouts.others')
@section('content')
    <section class="layout_margin pl_mobile_20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('addAdminPage') }}" method="POST" enctype="multipart/form-data">
                        <h2>Данные</h2>
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $page->id }}">
                        <div class="form-group">
                            <label for="name">Название страницы</label>
                            <input value="{{ $page->name }}" class="form-control" type="text" id="name" name="name" placeholder="Название страницы">
                        </div>
                        <div class="form-group">
                            <label for="post_content">Контент</label>
                            <textarea class="form-control" type="text" id="post_content" name="content" placeholder="Контент">{{ $page->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="order">Порядоковый номер</label>
                            <input class="form-control" type="text" id="order" name="order" placeholder="Порядоковый номер" value="{{ $page->order }}">
                        </div>
                        <div class="form-group">
                            <label for="show_menu">Показывать в меню</label>
                            <input @if($page->show_menu == 1) checked @endif type="checkbox" id="show_menu" name="show_menu" placeholder="Порядоковый номер" value="1">
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
                var editor = $('#post_content');

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
                        url: "/ajax/uploader/page",
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