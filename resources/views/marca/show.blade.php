{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layout.app')

{{--Definimos el titulo--}}
@section('title', 'marca')

{{--DEfinimos el contenido--}}
@section('content')
<h1>Productos</h1>

<h5>Listado de marcas</h5>
<hr>

<!-- Imprimimos el nombre del producto -->
marca: <b>{{$marca}}</b>
@endsection