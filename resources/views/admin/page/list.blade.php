@extends('layouts.others')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                @if(count($pages) == 0)
                    <div class="col-md-12" style="text-align: center"><strong>Постов не найдено</strong></div>
                @else
                    <table class="table table-hover">
                        <tr>
                            <th>Имя</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->name }}</td>
                                <td><a href="{{ route('getAdminPage', ['id' => $page->id]) }}">Редактировать</a></td>
                                <td>
                                    <a href="#" id="delete" data-toggle="modal" data-target="#modal-{{ $page->id }}">Удалить</a>
                                    <div class="modal fade" id="modal-{{ $page->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <form class="delete-category" action="{{ route('removeAdminPage') }}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id" value="{{ $page->id }}">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                                                        <button type="submit"  class="btn btn-danger">Удалить</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </section>
@endsection