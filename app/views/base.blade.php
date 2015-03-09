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
  <div class="text-left col-lg-8"><a href="carrito">Ver carrito</a></p>
  </div>
  <div class="text-right col-lg-4">@yield('usuario')
  </div>
  </div>
  @yield('contenido')
  
  {{HTML::script('js/jquery.min.js')}}
  {{HTML::script('js/bootstrap.min.js')}}
  @yield('programasjs')
  </body>
</html> 
