@extends('base')
  @section('titulo')
  @stop
  @section('contenido')
  <h2 class="text-center">Resumen del carrito de compras</h2>
  <br>
<table class="table table-striped">
<?php $carrito=Session::get('cliente.compra');
  $total=0;
?>
@if(Session::has('cliente'))
{{Form::open(array('post'=>'CarritoController@checkout'))}}
<tbody>
  <tr>
    <th>Imagen</th>
    <th>Medicamento</th>
    <th>Precio</th>
    <th>Cantidad</th>
    <th>En stock</th>
    <th>Subtotal</th>
  </tr>
  @foreach($carrito as $item)
  <?php $producto=Producto::find($item['id_producto']);?>
  <tr>
  <td><img src=".\{{$producto->imagen}}" width="100" heigth="100"></td>
	  <td>{{$producto->medicamento}}</td>
	  <td>{{$producto->precio}}</td>
	  <td>{{$item['cantidad']}}</td>
	  <td>{{$producto->eninventario}}
	  <td>$ {{$producto->precio*$item['cantidad']}} pesos</td>
	  <p></p>
	  </td>
  </tr>
  <?php $total=$total + $producto->precio*$item['cantidad'];?>
  @endforeach
  <tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
<!--   <td>Checkout <button type="submit"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span></button></td> -->
  <td></td>
  <td>Total = $ {{$total}} pesos</td>
  </tr>
  </tbody>
</table>
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
@else
<br><br>
<h2 class="text-center">No has realizado ninguna compra</h2>
@endif

  @stop
@stop 
 
