@extends('layouts.master')
@section('title', 'contacto') {{--agregar titulos complementarios con yield a la plantilla--}}

@section('header')
<h2>excepcion de la plantilla</h2>
@stop

@section('content')
<?php echo 'hola'; ?>
holiwis

<hr>
<h3>Uso if</h3>
@if($edad >= 18)
<p>Es mayor de edad</p>
@else
<p>es menor de edad</p>
@endif

<hr>
<h3>Uso ciclo for</h3>

@for($i = 1; $i <= 10; $i++)
    {{ '8x'.$i.'='. ($i*8) }}<br>
@endfor

<hr>
<h3>ciclo while</h3>
<?php $a=1; ?>

@while($a <= 7)
    {{ $a }}<br>
    <?php $a ++ ?>
@endwhile

<hr>
<h3>foreach</h3>

@foreach($frutas as $fruta)
    <p>{{$fruta}}</p>
@endforeach

@stop

@section('footer')
@parent
<h1>sumado footer de la plantilla</h1>
@stop