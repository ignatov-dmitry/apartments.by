@extends('layouts.others')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('addAttribute') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Название атрибута</label>
                            <input class="form-control" id="name" name="name" type="text">
                        </div>
                        <div class="form-group">
                                <button class="btn btn-danger">
                                    <span>Сохранить</span>
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>Список атрибутов</h2>
            <table class="table table-hover">
                @foreach($attributes as $attribute)
                    <tr>
                        <td>{{ $attribute->name }}</td>
                        <td><a href="{{ route('getAttribute', ['id' => $attribute->id]) }}">Редактировать</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
@endsection
