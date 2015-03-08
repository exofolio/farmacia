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
    DB::table('catalogo')->where('id', 1)->update(array('eninventario' =>$eninventario-$tmp->cantidad));
    $tmp->save();
    Session::forget('cliente');
    return DB::table('catalogo')->where('id',$tmp->id_medicamento)->pluck('eninventario');
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
}
