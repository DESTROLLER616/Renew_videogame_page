@extends('layouts.navbarMenu')

@section('title', 'Region')
@section('main-title', 'Creacion de Estados')
@section('navbar-menu')
  
  <form action="{{ url('state') }}" method="POST" class="row g-3">
  @csrf

    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Nombre del estado de la republica mexicana</label>
      <input type="text" class="form-control" id="validationDefault01" name="nombre" required>
    </div>

    <div class="col-12">
      <button class="btn btn-primary" type="submit">Crear</button>
    </div>
  
  </form>

@endsection