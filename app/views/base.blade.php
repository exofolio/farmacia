<!DOCTYPE html>
<html>
  <head>
      <title>@yield('titulo')</title>
      {{HTML::style('css/bootstrap.min.css')}}
  </head>
  <body>
  <div class="container">
  <div class="row">
  <br>
  <p class="text-right">@yield('usuario')</p>
  </div>
  @yield('contenido')
  
  {{HTML::script('js/jquery.min.js')}}
  {{HTML::script('js/bootstrap.min.js')}}
  @yield('programasjs')
  </body>
</html> 
