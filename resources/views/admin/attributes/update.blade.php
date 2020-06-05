@extends('layouts.others')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('updateAttribute') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$attribute->id}}">
                    <div class="form-group">
                        <label for="name">Название атрибута</label>
                        <input class="form-control" value="{{ $attribute->name }}" name="name" type="text">
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
@endsection
