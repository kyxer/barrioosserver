@include('frontend.forms.login')
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
              @yield('loginForm')
          </div>
        </div>
    </div>
  </section>
@stop