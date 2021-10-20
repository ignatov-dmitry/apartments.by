@extends('layouts.others')

@section('content')

<div class="container-fluid layout_margin-top">
    <div class="row">
        <div class="col-md-3">
            <h2>Фильтр</h2>
            <div class="filter">
                <form action="{{ route('filter') }}" method="get">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6"><input value="{{ $filter_param['price']['min'] }}" name="filter[price][min]" type="text" class="form-control" placeholder="Мин. цена"></div>
                            <div class="col-md-6"><input value="{{ $filter_param['price']['max'] }}" name="filter[price][max]" type="text" class="form-control" placeholder="Макс. цена"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="filter[area][]" value="{{ $filter_param['area'][0] }}" type="text" class="form-control" placeholder="Мин. площадь">
                    </div>
                    <div class="form-group">
                        <select name="filter[type][]" class="form-control">
                            @foreach($apartments_types as $apartments_type)
                                <option @if($apartments_type->id == $filter_param['type'][0]) selected @endif value="{{ $apartments_type->id }}">{{ $apartments_type->type_text }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="attributes" name="filter[static][]" id="" multiple>
                            @foreach($filters as $filter)
                            <option @if(isset($filter_param['static']) && in_array($filter->id, $filter_param['static'])) selected @endif value="{{ $filter->id }}">{{ $filter->name }}</option>
                            @endforeach
                        </select>
                    </div>

<!--                    @foreach($filters as $filter)-->
<!--                        <div class="form-check">-->
<!--                            <input  @if(isset($filter_param['static']) && in_array($filter->id, $filter_param['static'])) checked @endif value="{{ $filter->id }}" type="checkbox" name="filter[static][]" id="filter_id_{{ $filter->id }}" class="form-check-input">-->
<!--                            <label class="form-check-label" for="filter_id_{{ $filter->id }}">{{ $filter->name }}</label>-->
<!--                        </div>-->
<!--                    @endforeach-->
                    <button class="btn btn-danger" type="submit">Фильтр</button>
                </form>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                @foreach($apartments as $apartment)
                    <div style="margin-bottom: 25px" class="col-md-4 col-sm-6">
                    <div class="box">
                        <div class="img-box">
                            <img style="width: 100%;" src="{{ $apartment->image }}" alt="{{ $apartment->name }}">
                        </div>
                        <div>
                            <p>{{ $apartment->name }}</p>
                        </div>
                        <div class="detail-box">
                            <a class="btn btn-danger" href="{{ route('apartment', ['id' => $apartment->id]) }}">
                              <span>
                                Перейти
                              </span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="{{ asset('assets/js/selectize.js') }}"></script>
@endsection