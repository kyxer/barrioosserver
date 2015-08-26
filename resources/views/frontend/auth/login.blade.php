@extends('frontend.app')
@section('content')
  <div class="container-fluid title">
    <div class="container">
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">
          <h1>Ingresa</h1>
      </div>
    </div>
  </div>
  <section class="wrapper">
    <div class="container form">
      <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
              @if($errors->has())
                  <div class="alert alert-dismissible alert-danger jq-alert">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Error!</strong>
                      @foreach ($errors->all() as $error)
                          {{ $error }}<br>
                      @endforeach
                  </div>
              @endif
              {!! Form::open(['route'=>'login', 'role' => 'form', 'name' => 'loginForm', 'id'=>'loginForm', 'data-toggle' => 'validator', 'class' => 'form-horizontal' ]) !!}
                <div class="form-group has-feedback">
                    <label for="email" class="col-sm-2 control-label hidepola">Email</label>
                    <div class="col-sm-10">
                        <input class="form-control" data-error="El correo de seguir esta forma ejemplo.correo@dominio.com" pattern="^[_a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$" type="email" name="email" placeholder="Correo" required>
                        <div class="help-block with-errors" ></div>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="password" class="col-sm-2 control-label hidepola">Contraseña</label>
                    <div class="col-sm-10">
                      <input data-minlength-error="Minimo son 6 caracteres" data-minlength="6" maxlength="16" class="form-control" type="password" name="password" placeholder="Contraseña" required>
                      <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10 col-xs-12">
                      <div class="checkbox" name="rememberme">
                        <label>
                          <input type="checkbox" name="rememberme"> Recordarme
                          <a href="{{ URL::route('recoverView') }}">¿Olvidaste tu Contraseña?</a>
                        </label>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      {!! Form::submit('Iniciar Sesion',['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
          </div>
        </div>
    </div>
  </section>
@stop