@extends('layouts.others')

@section('content')
<section class="blog_grid_section layout_padding">
    <div class="container-fluid layout_margin-top">
        <div class="row">
            <div class="col-md-3">
                <h2>Фильтр</h2>
                <div class="filter">
                    <form action="{{ route('apartments') }}" method="get">
                        <div class="form-group">
                            <label for="country">Страна</label>
                            <select name="filter[country]" id="country_id" class="form-control">
                                <option value="0">--Выберите страну--</option>
                                @foreach($countries as $country)
                                    <option  @if($country->id == $filter_param['country']) selected @endif value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="region_id">Регион</label>
                            <select name="filter[region]" id="region_id" class="form-control">

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city_id">Город</label>
                            <select name="filter[city]" id="city_id" class="form-control">

                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6"><label for="price_min">Цена от</label><input value="{{ $filter_param['price']['min'] }}" id="price_min" name="filter[price][min]" type="text" class="form-control" placeholder="Мин. цена"></div>
                                <div class="col-md-6"><label for="price_max">Цена до</label><input value="{{ $filter_param['price']['max'] }}" id="price_max" name="filter[price][max]" type="text" class="form-control" placeholder="Макс. цена"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="area">Минимальная площадь</label>
                            <input id="area" value="{{ $filter_param['area'][0] }}" name="filter[area]" type="text" class="form-control" placeholder="Мин. площадь">
                        </div>
                        <div class="form-group">
                            <label for="type">Тип</label>
                            <select name="filter[type]" class="form-control">
                                @foreach($apartments_types as $apartments_type)
                                    <option @if($apartments_type->id == $filter_param['type'][0]) selected @endif value="{{ $apartments_type->id }}">{{ $apartments_type->type_text }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="attributes">Аттрибуты</label>
                            <select id="attributes" name="filter[attributes][]" multiple>
                                @foreach($filters as $filter)
                                    <option @if(isset($filter_param['attributes']) && in_array($filter->id, $filter_param['attributes'])) selected @endif value="{{ $filter->id }}">{{ $filter->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-danger" type="submit">Фильтр</button>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @foreach($apartments as $apartment)
                        <div class="col-md-4">
                            <div class="box">
                                <div class="img-box">
                                    <img src="{{ $apartment->image }}"  class="img_w100" alt="{{ $apartment->name }}">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        {{ $apartment->name }}
                                    </h5>
                                    <div class="blog_info">
                                        <h6>
                                            <svg viewBox="-42 0 512 512.002" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0"></path>
                                                <path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0"></path>
                                            </svg>
                                            <span>
                                                {{ $apartment->user->name }}
                                            </span>
                                        </h6>
                                        <h6 class="blog_comment">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                      <path d="M6,2h48c3.252,0,6,2.748,6,6v33c0,3.252-2.748,6-6,6H25.442L15.74,57.673C15.546,57.885,15.276,58,15,58
	                                    c-0.121,0-0.243-0.022-0.361-0.067C14.254,57.784,14,57.413,14,57V47H6c-3.252,0-6-2.748-6-6L0,8C0,4.748,2.748,2,6,2z"></path>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                    </svg>
                                            <span>
                                                3
                                            </span>
                                        </h6>
                                        <h6>
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                      <g>
                          <g>
                              <path d="M452,40h-24V0h-40v40H124V0H84v40H60C26.916,40,0,66.916,0,100v352c0,33.084,26.916,60,60,60h392
			c33.084,0,60-26.916,60-60V100C512,66.916,485.084,40,452,40z M472,452c0,11.028-8.972,20-20,20H60c-11.028,0-20-8.972-20-20V188
			h432V452z M472,148H40v-48c0-11.028,8.972-20,20-20h24v40h40V80h264v40h40V80h24c11.028,0,20,8.972,20,20V148z"></path>
                          </g>
                      </g>
                                                <g>
                                                    <g>
                                                        <rect x="76" y="230" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="156" y="230" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="236" y="230" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="316" y="230" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="396" y="230" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="76" y="310" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="156" y="310" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="236" y="310" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="316" y="310" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="76" y="390" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="156" y="390" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="236" y="390" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="316" y="390" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="396" y="310" width="40" height="40"></rect>
                                                    </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                    </svg>
                                            <span>
                                                12 Aug 2017
                                            </span>
                                        </h6>
                                    </div>
                                    <p>
                                        {{ $apartment->description }}
                                    </p>
                                    <div class="blog_bottom">
                                        <a href="{{ route('apartment', ['id' => $apartment->id]) }}" class="blog_btn">
                                            <span>
                                                Read More
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@section('js')
    <script src="{{ asset('assets/js/selectize.js') }}"></script>
    <script>
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
    </script>
@endsection