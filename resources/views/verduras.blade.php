@extends('layouts.master')
@section('title','contacto')

@section('header')
{{--Importante recordar el section o produce un error--}}
<h2>Index verduras</h2>
@stop


@section('content')
@foreach($verduras as $verdura)
<p>{{$verdura}}</p>
@endforeach
<hr>
<a href="{{ route ('AgregarVerduras')}}">Agregar</a>
<a href="{{ route ('EliminarVerduras')}}">Eliminar</a>
<hr>
@stop

