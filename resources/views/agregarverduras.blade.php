@extends('layouts.master')
@section('title','contacto')

@section('header')
{{--Importante recordar el section o produce un error--}}
<h2>Index verduras</h2>
@stop

@section('content')
<form method="POST" action="{{url('/verdurasGuardar')}}">
    <label for="nombre">nombre</label>
    <input type="text" id="nombre" name="nombre">
    <label for="precio">precio</label>
    <input type="text" id="precio" name="precio">
    <button type="submit">Guardar</button>
    @if($errors->any())
    <div>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif
</form>

<hr>
<a href="{{ route ('AgregarVerduras')}}">Agregar</a>
<a href="{{ route ('EliminarVerduras')}}">Eliminar</a>
<hr>
@stop

