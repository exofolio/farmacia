<?php 
class CarritoController extends BaseController{
  public function checkout()
  {
    if(Auth::check())
    {
    $total=0;
    $compras=Session::get('cliente.compra');
    foreach($compras as $compra)
    {
    $tmp = new Compra;
    $tmp->id_cliente=Auth::id();
    $tmp->id_medicamento=$compra['id_producto'];
    $tmp->cantidad=$compra['cantidad'];
    $eninventario=DB::table('catalogo')->where('id',$tmp->id_medicamento)->pluck('eninventario');
    if ($tmp->cantidad<=$eninventario)
    {
    DB::table('catalogo')->where('id',$tmp->id_medicamento)->update(array('eninventario' =>$eninventario-$tmp->cantidad));
    $tarjeta = Input::get('tarjeta1'). Input::get('tarjeta2') . Input::get('tarjeta3') . Input::get('tarjeta4');
    $validador = Validator::make(
  array(
  'tarjeta'=>$tarjeta,
  'codigo'=>Input::get('codigo')
  ),
  array(
  'tarjeta'=>'required|digits:16',
  'codigo'=>'required|digits:4'
  ),
  array(
  'required'=>'Campo requerido',
  'max'=>'Este campo debe tener 4 numeros',
  'integer'=>'Este campo debe contener solo numeros',
  'min'=>'Este campo debe tener 16 numeros'
  )
  );
  if($validador->fails())
  {
  return Redirect::to('carrito')->withInput()->withErrors($validador);
  }
  else{
  $pago = new Formadepago;
  $pago->id_cliente = Auth::id();
  $pago->num_tarjeta = Crypt::encrypt(Input::get('tarjeta'));
  //$pago->codigo = Crypt::encrypt(Input::get('codigo'));
  $tmp->pago=true;
  $tmp->save();
  $pago->save();
  Session::forget('cliente');
  return Redirect::to('gracias');
  }
    }
    else
    {
    
    }
  }
  }
  else
  {
  return Redirect::to('login');
  }
  }
  public function formadepago()
  {
  }
}
