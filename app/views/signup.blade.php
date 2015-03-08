@extends('base')
  
  @section('titulo')
    Registro de Nuevo Paciente
  @stop
  
  @section('contenido')
  {{Form::open(array('post'=>'ClientesController@nuevoCliente'))}}
  <h2 class="">Registrar Medico</h2>
  <div class="form-signin-heading col-lg-3 text-right">
<!--   <div class="form-group"> -->
  {{Form::label('Nombre(s): ')}}
  <br>
  <br>
  {{Form::label('Apellido Paterno: ')}}
  <br>
  <br>
  {{Form::label('Apellido Materno: ')}}
  <br>
  <br>
  {{Form::label('Dirección: ')}}
  <br>
  <br>
  {{Form::label('Número Telefónico: ')}}
  <br>
  <br>
  {{Form::label('E-mail: ')}}
  <br>
  <br>
  {{Form::label('Contraseña: ')}}
  <br>
  <br>
  </div>
  <div class="col-lg-4 text-left form-group">
  {{Form::text('nombre_s')}}
  @if ($errors->has())
  {{$errors->first('nombre_s')}}
  @endif
  <br>
  <br>
  {{Form::text('ape_p')}}
  @if ($errors->has())
  {{$errors->first('ape_p')}}
  @endif
  <br>
  <br>
  {{Form::text('ape_m')}}
  @if ($errors->has())
  {{$errors->first('ape_m')}}
  @endif
  <br>
  <br>
  {{Form::text('direccion')}}
  @if ($errors->has())
  {{$errors->first('direccion')}}
  @endif
  <br>
  <br>
  {{Form::text('num_tel')}}
  @if ($errors->has())
  {{$errors->first('num_tel')}}
  @endif
  <br>
  <br>
  {{Form::text('email')}}
  @if ($errors->has())
  {{$errors->first('email')}}
  @endif
  <br>
  <br>
  {{Form::password('password')}}
  @if ($errors->has())
  {{$errors->first('password')}}
  @endif
  <br>
  <br>
  </div>
  <div class="col-lg-3 text-right">
  {{Form::submit('Registrar',array('class'=>'btn btn-primary'))}}
  </div>
  {{Form::close()}}
  @stop