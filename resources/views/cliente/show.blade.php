{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layout.app')

{{--Definimos el titulo--}}
@section('title', 'Cliente')

{{--DEfinimos el contenido--}}
@section('content')
    
<h5>tabla de cliente</h5>
<br>
<a class="btn btn-danger btn-sm" href="/cliente/create">Agregar nuevo cliente</a>

<hr>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nombre</th>
        <th scope="col">edad</th>
        <th scope="col">categoria</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($cliente as $item) 
        <tr>
        <td>{{ $item->codigo }}</td>
        <td>{{ $item->nombre }}</td>
        <td>{{ $item->edad }}</td>
        <td>{{ $item->categoria }}</td>
        <td>
       <a class="btn btn-success btn-sm" href="/cliente/edit/{{$item->codigo}}">Modificar</a>
       <button class="btn btn-danger btn-sm" url="/cliente/destroy/{{$item->codigo}}" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</a>
       </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  
@endsection
@section('scripts') 
 {{-- SweetAlert --}}
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 {{-- JS --}}
 <script src="{{ asset('js/product.js') }}"></script>
@endsection