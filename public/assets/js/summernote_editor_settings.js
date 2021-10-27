/**
 * Settings for summernote editor.
 */

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

// remove element in editor
                    $target.remove();
                }
            }
        };

// Featured editor
        editor.summernote(configFull);

// Upload file on the server.
        function uploadFile(filesForm) {

            data = new FormData();

// Add all files from form to array.
            for (var i = 0; i < filesForm.length; i++) {
                data.append("file", filesForm[i]);
            }
            $.ajax({
                data: data,
                type: "POST",
                url: "/ajax/uploader/upload",
                cache: false,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                contentType: false,
                processData: false,
                success: function (image) {



// If not errors.
                    if (typeof image['error'] == 'undefined') {
                        console.log(image);
                        editor.summernote('insertImage', image['url'], function ($image) {
                            //$image.css('width', $image.width() / 3);
                            //$image.attr('data-filename', 'retriever')
                        });
                    }
                    else {
// Get user's browser language.
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

// Delete file from the server.
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
                success: function (image) {
//console.log(image);
                }
            });
        }

    });

});