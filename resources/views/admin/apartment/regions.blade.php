@if($regions)
    <option value="0">--Выберите регион--</option>
    @foreach ($regions as $region)
        <option id="city_id_{{ $region->id }}" value="{{ $region->id }}">{{ $region->name }}</option>
    @endforeach
@endif