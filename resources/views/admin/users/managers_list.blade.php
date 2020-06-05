@extends('layouts.others')
@section('content')
    <section class="layout_margin blog_grid_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Добавить менеджера</h2>
                    <form action="{{ route('addManager') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-froup{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Имя</label>
                            <input value="{{ old('name') }}" class="form-control" type="text" id="name" name="name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-froup{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">EMAIL</label>
                            <input value="{{ old('email') }}" class="form-control" type="text" id="email" name="email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-froup">
                            <button class="btn btn-danger" type="submit">Создать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

     <section>
         <div class="container">
             <table class="table table-hover">
                 <tr>
                     <th>Имя</th>
                     <th>EMAIL</th>
                     <th>Создан</th>
                     <th></th>
                     <th></th>
                 </tr>
                 @foreach($managers as $manager)
                     <tr>
                         <td>{{ $manager->name }}</td>
                         <td>{{ $manager->email }}</td>
                         <td>{{ $manager->created_at }}</td>
                         <td><a href="{{ route('getUser', ['id' => $manager->id]) }}">Редактировать</a></td>
                         <td>
                             <a href="#" id="delete" data-toggle="modal" data-target="#modal-{{ $manager->id }}">Удалить</a>
                             <div class="modal fade" id="modal-{{ $manager->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                             <form class="delete-apartment" action="{{ route('deleteUser') }}" method="POST">
                                                 {{ csrf_field() }}
                                                 <input type="hidden" name="id" value="{{ $manager->id }}">
                                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                                                 <button type="submit" name="apartment_{{ $manager->id }}" class="btn btn-danger">Удалить</button>
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
     </section>

@endsection
