<?php
class CatalogosController extends BaseController{
  public function carrito()
  {
    $compra=array('id_producto'=>Input::get('id_producto'),'cantidad'=>Input::get('cantidad'));
    $tmp = Session::get('cliente.compra');
//     Session::flush();
//     return Session::flush();
//     return $tmp;
    if(!empty($tmp))
    {
    foreach($tmp as $key=>$valor)
    {
    if(count($valor)>1)
    {
    if($valor['id_producto']==Input::get('id_producto'))
      {
	$tmp[$key]['cantidad']=Input::get('cantidad');
	Session::forget('cliente.compra');
	Session::put('cliente.compra', $tmp);
	return Redirect::to('catalogo');
      }
    }
    else
    {
    Session::push('cliente.compra', $compra);
    return Redirect::to('catalogo');
    }
    }
    Session::push('cliente.compra', $compra);
    return Redirect::to('catalogo');
  }
  else
  {
  Sessi4on::push('cliente.compra', $compra);
  return Redirect::to('catalogo');
  }
  }
}
