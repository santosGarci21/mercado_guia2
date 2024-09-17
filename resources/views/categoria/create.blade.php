
{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layout.app')

{{--Definimos el titulo--}}
@section('title', 'Categoria')

{{--DEfinimos el contenido--}}
@section('content')
    
    <div class="container">
      <h1>Crear</h1>
    <h5>Formulario para crear categoria</h5>
    <hr>
      <h1 class="mt-4">Registrar Categoria</h1>
      <form action="/" method="">
          <div class="mb-3">
              <label for="nombre" class="form-label">Nombre categoria</label>
              <input type="text" class="form-control" id="nombre" name="categoia" >
          </div>
         
        
          
          <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
@endsection

