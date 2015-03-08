@extends('base')
  @section('titulo')
  @stop
  @section('contenido')
<table class="table table-bordered">
<?php $producto=Producto::find($id);?>
{{Form::open(array('post'=>'CatalogosController@carrito'))}}
  <tr>
    <th>Imagen</th>
    <th>Medicamento</th>
    <th>Descripción</th>
    <th>Precio</th>
    <th>En stock</th>
    <th>Añadir al carrito</th>
  </tr>
  <tr>
  <td><img src="..\{{$producto->imagen}}" width="100" heigth="100"></td>
	  <td>{{$producto->medicamento}}</td>
	  <td width=25%>{{$producto->descripcion}}</td>
	  <td>{{$producto->precio}}</td>
	  <td>{{$producto->cantidad}}</td>
	  <td>
	  <p>Cantidad</p>
	  {{Form::text('cantidad','0',array('size'=>'2'))}}
	  {{Form::hidden('id_producto',$producto->id)}}
	  <button type="submit"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
	  </td>
  
  </tr>
</table>
{{Form::close()}}
  @stop
@stop 
