<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! HTML::favicon('assets/images/favicon.png') !!}
    <title>Not Found :(</title>
    {!! HTML::style('assets/css/bootstrap.min.css') !!}
    {!! HTML::style('assets/css/style.css') !!}
    {!! HTML::style('assets/css/responsive.css') !!}
    {!! HTML::style('assets/css/font-awesome.min.css') !!}
    {!! HTML::style('assets/css/menu.css') !!}
@if(Auth::check())
    @include('frontend.sections.headerDashboardAuth')
@else
    @include('frontend.sections.headerAuth')
@endif
<div class="container-fluid title">
    <div class="container">
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">
          <h1>La pagina buscada no existe lo Sentimos :(</h1>
      </div>
    </div>
  </div>
@include('frontend.sections.footerAuth')
{!! HTML::script('assets/js/jquery-1.11.3.min.js') !!}
{!! HTML::script('assets/js/bootstrap.min.js') !!}
</body>
</html>