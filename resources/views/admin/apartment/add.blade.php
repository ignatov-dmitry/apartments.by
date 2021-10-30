@extends('layouts.others')

@section('content')

    <section class="layout_margin pl_mobile_20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('addApartmentPost') }}" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Данные</h2>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Название">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" id="annotation" name="annotation" placeholder="Краткое описание">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="description" name="description" placeholder="Полное описание"></textarea>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="country_id" id="country_id">
                                        <option>--Выберите страну--</option>
                                        @if($countries)
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="region_id" id="region_id">
                                        <option>Нужно выбрать регион</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="city_id" id="city_id">
                                        <option>Нужно выбрать страну</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" id="address" name="address" placeholder="Адрес">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="file" id="image" name="image">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="text" id="rooms" name="rooms" placeholder="Количество комнат">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="text" id="price" name="price" placeholder="Цена">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="text" id="area" name="area" placeholder="Площадь м. кв.">
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="type_id" id="type_id">
                                        @if($types)
                                            @foreach($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->type_text }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h2>Статические атрибуты</h2>
                                <div class="form-group">
                                    <select id="attributes" name="attribute_id[]" multiple>
                                        @foreach($attributes as $attribute)
                                            <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
{{--                                @foreach($attributes as $attribute)--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="attribute-id_{{ $attribute->id }}">--}}
{{--                                            <input type="checkbox" id="attribute-id_{{ $attribute->id }}" name="attribute_id[{{ $attribute->id }}]" value="1">&nbsp;{{ $attribute->name }}--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
                                <button class="btn btn-danger">
                                    <span>
                                      Сохранить
                                    </span>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="{{ asset('assets/js/selectize.js') }}"></script>
    <script>
        $(document).ready(function () {
            $("#attributes").selectize({
                plugins: ["remove_button"],
                delimiter: ",",
                placeholder: 'Выберите аттрибуты',
                persist: false,
                create: function (input) {
                    return {
                        value: input,
                        text: input,
                    };
                },
            });
        });
    </script>
@endsection
