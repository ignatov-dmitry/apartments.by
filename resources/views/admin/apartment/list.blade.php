@extends('layouts.others')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <table class="table table-hover">
                <tr>
                    <th>Имя</th>
                    <th>Модерация</th>
                    <th>Блокировка</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($apartments as $apartment)
                    <tr>
                        <td>{{ $apartment->name }}</td>
                        <td>{{ $apartment->moderated }}</td>
                        <td>{{ $apartment->lock }}</td>
                        <td><a href="{{ route('getApartment', ['id' => $apartment->id]) }}">Редактировать</a></td>
                        <td>
                            <a href="#" id="delete" data-toggle="modal" data-target="#modal-{{ $apartment->id }}">Удалить</a>
                            <div class="modal fade" id="modal-{{ $apartment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Подтвердите удаление</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Вы уверены что хотите удалить эту запись?
                                        </div>
                                        <div class="modal-footer">
                                            <form class="delete-apartment" action="{{ route('removeApartment') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $apartment->id }}">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                                                <button type="submit" name="apartment_{{ $apartment->id }}" class="btn btn-danger">Удалить</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>

@endsection
