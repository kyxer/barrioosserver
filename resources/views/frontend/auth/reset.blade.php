@include('frontend.forms.reset')
@extends('frontend.app')
@section('content')
<div class="container-fluid title">
    <div class="container form">
        <h1 class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">Cambiar Contraseña</h1>
    </div>
</div>
<section class="wrapper-3">
  <div class="container">
    <div class="row form">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            @yield('resetForm')
        </div>
    </div>
  </div>
</section>
@stop