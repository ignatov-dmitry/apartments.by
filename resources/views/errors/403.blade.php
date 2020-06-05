@extends('layouts.others', ['head_text' => 'Ошибка 403'])

@section('content')
{{$exception->getMessage()}}
@endsection
