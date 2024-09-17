{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layout.app')

{{--Definimos el titulo--}}
@section('title', 'Categoria')

{{--DEfinimos el contenido--}}
@section('content')
    
<h5>tabla de categoria</h5>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">categoria</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

  <button type="button" class="btn btn-dark">Nuevo</button>
@endsection