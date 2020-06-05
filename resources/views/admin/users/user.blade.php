@extends('layouts.others')
@section('content')
    <section class="layout_margin blog_grid_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Редактировать пользователя</h2>
                    <form action="{{ route('updateUser') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="form-froup{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Имя</label>
                            <input value="{{ old('name') ? old('name') : $user->name }}" class="form-control" type="text" id="name" name="name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-froup{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">EMAIL</label>
                            <input value="{{ old('email') ? old('email') : $user->email }}" class="form-control" type="text" id="email" name="email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-froup">
                            <button class="btn btn-danger" type="submit">Обновить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
