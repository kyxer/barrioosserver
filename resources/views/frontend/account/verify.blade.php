@extends('frontend.app')
@section('content')
    <div class="container-fluid title">
    <div class="container">
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">
          <h1>Verificacion de cuenta</h1>
      </div>
    </div>
  </div>
  <section class="wrapper">
    <div class="container form">
      <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        @if($errors->has())
            <div class="alert alert-dismissible alert-danger">
                <strong>Error!</strong>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                <br>
                <a href="/">Inicio</a>
            </div>
        @else
            <div class="alert alert-dismissible alert-success">
                <strong>Fabuloso!</strong>Tu cuenta ha sido Verificada
                <br>
                <a href="/" class="alert-link">Inicio</a>
            </div>
        @endif
        </div>
        </div>
    </div>
  </section>

@stop