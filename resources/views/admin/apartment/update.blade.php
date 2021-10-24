@extends('layouts.others')

@section('content')

    <section class="layout_margin pl_mobile_20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('updateApartment') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="apartment_id" name="id" value="{{ $apartment->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Данные</h2>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input value="{{ $apartment->name }}" class="form-control" type="text" id="name" name="name" placeholder="Название">
                                </div>
                                <div class="form-group">
                                    <input value="{{ $apartment->annotation }}" class="form-control" type="text" id="annotation" name="annotation" placeholder="Краткое описание">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="description" name="description" placeholder="Полное описание">{{ $apartment->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="country_id" id="country_id">
                                        <option>Выбирете страну</option>
                                        @if($countries)
                                            @foreach ($countries as $country)
                                                <option @if($apartment->country_id == $country->id) selected="selected" @endif value="{{ $country->id }}">{{ $country->name }}</option>
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
                                        <option>Нужно выбрать город</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input required value="{{ $apartment->address }}" class="form-control" type="text" id="address" name="address" placeholder="Адрес">
                                </div>

                                <div class="form-group">
                                    <input value="{{ $apartment->image }}" class="form-control-file" type="file" id="image" name="image">
                                </div>

                                <div class="form-group">
                                    <input value="{{ $apartment->rooms }}" class="form-control" type="text" id="rooms" name="rooms" placeholder="Количество комнат">
                                </div>

                                <div class="form-group">
                                    <input value="{{ $apartment->price }}" class="form-control" type="text" id="price" name="price" placeholder="Цена">
                                </div>

                                <div class="form-group">
                                    <input value="{{ $apartment->area }}" class="form-control" type="text" id="area" name="area" placeholder="Площадь м. кв.">
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="type_id" id="type_id">
                                        @if($types)
                                            @foreach($types as $type)
                                                <option @if($apartment->type_id == $type->id) selected @endif value="{{ $type->id }}">{{ $type->type_text }}</option>
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
                                            <option @if(in_array($attribute->id, $checked_attributes)) selected @endif value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
{{--                                @foreach($attributes as $attribute)--}}

{{--                                    <div class="form-group">--}}
{{--                                        <label for="attribute-id_{{ $attribute->id }}">--}}
{{--                                            <input @if(in_array($attribute->id, $checked_attributes)) checked @endif type="checkbox" id="attribute-id_{{ $attribute->id }}" name="attribute_id[{{ $attribute->id }}]" value="1">&nbsp;{{ $attribute->name }}--}}
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
            let countryId = @if(isset($apartment->country_id)) {{ $apartment->country_id }} @else false @endif;
            let regionId = @if(isset($apartment->region_id)) {{ $apartment->region_id }} @else false @endif;
            let cityId = @if(isset($apartment->city_id)) {{ $apartment->city_id }} @else false @endif;

            if (countryId) {
                getRegions(countryId, regionId);
            }

            if (regionId) {
                getCities(regionId, cityId)
            }
        });
    </script>
@endsection