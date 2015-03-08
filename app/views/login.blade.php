@extends('base')
  
  @section('titulo')
    Prueba
  @stop
  @section('usuario')
  Bienvenido Invitado
  <a href="signup">Registrarse</a>
  @stop
  @section('contenido')
  <div class="col-lg-4">
  
{{Form::open(array('post'=>'ClientesController@iniciarSesion','class'=>'signin',
'role'=>'form'))}}
  <h2 class="form-signin-heading">Iniciar Sesión</h2>
  <div class="form-group">
  {{Form::label('E-mail')}}
  <br>
  {{Form::text('email',null,array('class'=>'form-control'))}}
  <br>
  {{Form::label('Contraseña')}}
  <br>
  {{Form::password('password',array('class'=>'form-control'))}}
  <br>
  {{Form::submit('Iniciar Sesion',array('class'=>'btn btn-primary'))}}
  {{Form::close()}}
  </div>
  </div>
  <div class="col-lg-2">
  </div>
  <div class="col-lg-5 text-right">
  <br>
  <br>
  <br>
  <h3>Para registrarse de click en la parte superior derecha</h3><br>
  
  </div>
  @stop
@stop
