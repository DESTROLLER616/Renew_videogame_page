@extends('layouts.navbarMenu')

@section('title', 'Genero')
@section('main-title', 'Creacion de Genero')
@section('navbar-menu')
  
<form action="{{ url('gender') }}" method="POST">
  @csrf

  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nombre del género</label>
    <input type="text" class="form-control" id="validationDefault01" name="nombre" required>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar</button>
  </div>

</form>

@endsection