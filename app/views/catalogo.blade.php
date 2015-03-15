@extends('base')
	@section('titulo')
	Farmacia
	@stop
	@section('contenido')
	<?php $productos=DB::table('catalogo')->get()?>
	<h1 class="text-center">Catálogo de la Farmacia</h1>
	<table class="table table-condensed">
	<tr>
	<td colspan="5" class="text-center">
	  <p>Buscar: {{Form::text('buscar')}}</p>
	</td>
	</td>
	<tr>
	  <th>Imagen</th>
	  <th>Medicamento</th>
	  <th>Descripción</th>
	  <th>Precio</th>
	  <th>En stock</th>
	  <th>Carrito</th>
	</tr>
	@foreach($productos as $producto)
	<tr>
	  <td><img src="{{$producto->imagen}}" width="100" heigth="100"></td>
	  <td>{{$producto->medicamento}}</td>
	  <td width=25%>{{$producto->descripcion}}</td>
	  <td>{{$producto->precio}}</td>
	  <td>{{$producto->eninventario}}</td>
	  <td>
	  <a href="producto/{{$producto->id}}">Pedir</a>
	  <!--Añadir al carrito
	  <p>Cantidad</p>
	  {{Form::text('producto' . $producto->id,'0',array('size'=>'2'))}}
	  {{Form::hidden('id_producto' . $producto->id,$producto->id)}}
	  <button type="submit"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>-->
	  </td>
	</tr>
	@endforeach
	</table>
	<p>
	@if(Session::has('mensaje_stock'))
	{{$mensaje_stock}}
	@endif
	</p>
	@stop
@stop 
 
