<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verdura;
use App\Models\Almacen;

class VerdurasController extends Controller
{
    //public function index(){
    //    return view('verduras')
    //    ->with('verduras', array('lechuga', 'tomate', 'palta', 'papa'));
    //}

    public function index(){
        $verduras = Verdura::where('id', 2)
        ->get()
        ->load('almacenes');

        dd($verduras[0]->almacenes->nombre);
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

        $this -> validate($request, [
            'nombre' => 'required|min:3|max:7' ,
            'precio' => 'required|integer'
        ]);

        return "Nombre: ". $request->input("nombre"). ", Precio: ". $request->input("precio");
    }
}
