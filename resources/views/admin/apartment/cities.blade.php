@if($cities)
    <option value="0">--Выберите город--</option>
    @foreach ($cities as $city)
        <option id="city_id_{{ $city->id }}" value="{{ $city->id }}">{{ $city->name }}</option>
    @endforeach
@endif
