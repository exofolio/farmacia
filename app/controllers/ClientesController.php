<?php
class ClientesController extends BaseController {

    public function iniciarSesion()
    {
    if(Auth::attempt(array('email'=>Input::get('email'),'password'=>Input::get('password'))))
    {
    return Redirect::to('/')->with('usuario',Input::get('email'));
    }
    else
    return 'no funciona';
    }
    public function nuevoCliente()
    {
    $usuario = new Cliente;
    $usuario->nombre_s=Input::get('nombre_s');
    $usuario->ape_p=Input::get('ape_p');
    $usuario->ape_m=Input::get('ape_m');
    $usuario->direccion=Input::get('direccion');
    $usuario->telefono=Input::get('num_tel');
    $usuario->email=Input::get('email');
    $usuario->password=Hash::make(Input::get('password'));
    $validador = Validator::make(
    Input::all(),
    array(
    'nombre_s'=>'required',
    'ape_p'=>'required',
    'ape_m'=>'required',
    'direccion'=>'required',
    'num_tel'=>'required',
    'email'=>'required|min:8|unique:clientes',
    'password'=>'required|min:5'
    ),array(
    'required'=>'Campo requerido',
    'min'=>'Minimo ocho caracteres',
    'unique'=>'Ya existe'
    ));
    if ($validador->fails())
    {
    return Redirect::to('signup')->withInput()->withErrors($validador);
    }
    else
    {
    $usuario->save();
    return Redirect::to('login');
    }
    }
    public function prueba()
    {
      return 'Funciona';
    }
}
