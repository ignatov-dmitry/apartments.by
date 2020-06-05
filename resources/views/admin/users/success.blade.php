@extends('layouts.others')
@section('content')
    <section class="layout_margin blog_grid_section">
        <div class="container">
            <h2>Пользователь создан</h2>
            <p><strong>EMAIL: </strong>{{ $email }}</p>
            <p><strong>Пароль: </strong>{{ $password }}</p>
        </div>
    </section>
@endsection
