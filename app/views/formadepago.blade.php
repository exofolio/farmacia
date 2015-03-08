@extends('base')
  @section('titulo')
    Forma de pago
  @stop
  @section('contenido')
  
    <h2>Forma de pago</h2>
    {{Form::open(array('class'=>'form-inline','post'=>'CarritoController@formadepago'))}}
    <div class="form-group">
    {{Form::label('Tarjeta de credito: ')}}
    {{Form::text('tarjeta1','',array('size'=>4))}}
    {{Form::text('tarjeta2','',array('size'=>4))}}
    {{Form::text('tarjeta3','',array('size'=>4))}}
    {{Form::text('tarjeta4','',array('size'=>4))}}
     @if ($errors->has())
     {{$errors->first('tarjeta')}}
     @endif
    </div>
    <br><br>
    <div class="form-group">
    {{Form::label('Codigo de seguridad: ')}}
    {{Form::password('codigo')}}
    @if ($errors->has())
     {{$errors->first('codigo')}}
     @endif
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Pagar</button>
    {{Form::close()}}
  @stop
@stop
