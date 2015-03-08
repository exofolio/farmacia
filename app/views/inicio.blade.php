@extends('base')
  @section('titulo')
  Bienvenido
  @stop
  @section('usuario')
  @if(Auth::check())
  Bienvenido {{Auth::User()->email}} <a href="logout">Cerrar Sesión</a>
  @else
  Invitado <a href="login">Iniciar Sesion</a>
  @endif
  @stop
  @section('contenido')
   <h1><center>Farmacia</center></h1>
  <br><br>
    <div class="col-lg-12"><center><h2>Bienvenido a la farmacia </h2>
    <h3><br><a href="catalogo">Ver catalogo</a></h3>
    <br>
    <br>
    <br>La información proporcionada en esta página es de caracter privado por lo que esta prohibido copiar, guardar o duplicar cualquier dato mostrado en este portal web
    <br>
    <br>
    Para iniciar sesion de click en la parte superior derecha
    </div>
    <br><br><br>
    <center><img src="imagenes/med.jpg" width=100 height=100></center>
  @stop
@stop