<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerdurasController extends Controller
{
    public function index(){
        return view('verduras')
        ->with('verduras', array('lechuga', 'tomate', 'palta', 'papa'));
    }

    public function agregar(){
        return view("agregarverduras");
    }

    public function eliminar(){
        return view("eliminarverduras");
    }

    //muestra los parametros pasados por el arreglo
    //public function guardar(Request $request){
    //    dd($request);
    //}

    public function guardar(Request $request){
        return "Nombre: ". $request->input("nombre"). ", Precio: ". $request->input("precio");
    }
}
