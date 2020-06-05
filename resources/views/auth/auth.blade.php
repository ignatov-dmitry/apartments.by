@extends('layouts.others')

@section('content')
    <section class="find_section layout_padding">
        <div class="section_bg section_bg_left"></div>
        <div class="container">
            <div class="heading_container">
                <h2>
                    Account
                </h2>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="form_tab_container">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav " data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#login" data-toggle="tab">Войти</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#signup" data-toggle="tab">Регистрация</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content text-center">
                            <div class="tab-pane active" id="login">
                                <div class="login_form find_form">
                                    <form method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <div class="input-group ">
                                                <input type="email" class="form-control" id="loginEmail" placeholder="EMAIL" name="email" value="{{ old('email') }}" required autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <input type="password" class="form-control" id="loginPassword" placeholder="Пароль"name="password" required>

                                            </div>
                                        </div>

                                            <div class="col-md-12" style="text-align: initial;">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня
                                                    </label>
                                                </div>
                                            </div>


                                            <div class="col-md-6" style="text-align: initial;">
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    Забыли пароль?
                                                </a>
                                            </div>

                                        <div class="btn-box">
                                            <button type="submit" class="">
                                              <span>
                                                Войти
                                              </span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane " id="signup">
                                <div class="signup_form find_form">
                                    <form method="POST" action="{{ route('register') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <div class="input-group ">
                                                <input type="text" class="form-control" id="signupFullName" placeholder="Полное имя" name="name" value="{{ old('name') }}" required>
                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <div class="input-group ">
                                                <input type="email" class="form-control" id="signupEmail" placeholder="Email"name="email" value="{{ old('email') }}" required>
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <div class="input-group ">
                                                <input type="password" class="form-control" id="signupPassword" placeholder="Введите пароль" name="password" required>
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group ">
                                                <input type="password" class="form-control" id="signupRepeatPassword" placeholder="Повторите пароль" name="password_confirmation" required>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <button type="submit" class="">
                                              <span>
                                                Зарегестрироваться
                                              </span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
