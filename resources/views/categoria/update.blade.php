{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layout.app')

{{--Definimos el titulo--}}
@section('title', 'Categoria')

{{--DEfinimos el contenido--}}
@section('content')
    
    <div class="container">
      <h1>Actualizar</h1>
      <h5>Formulario para actualizar</h5>
      <form  class="row g-3">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">nombre de categoria</label>
            <input type="text" class="form-control" id="inputEmail4">
          </div>
      
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
@endsection