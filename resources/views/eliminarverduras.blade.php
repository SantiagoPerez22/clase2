@extends('layouts.master')
@section('title','contacto')

@section('header')
{{--Importante recordar el section o produce un error--}}
<h2>Index verduras</h2>
@stop
12351235123

@section('content')
<hr>
<a href="{{ route ('AgregarVerduras')}}">Agregar</a>
<a href="{{ route ('EliminarVerduras')}}">Eliminar</a>
<hr>
@stop

