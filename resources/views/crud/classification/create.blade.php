@extends('layouts.navbarMenu')

@section('title', 'Administracion')
@section('main-title', 'Panel de creacion')
@section('navbar-menu')

  <form action="{{ url('classification') }}" method="POST" class="row g-3">
  @csrf

    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Nombre de la clasificación</label>
      <input type="text" class="form-control" id="validationDefault01" name="nombre" required>
    </div>

    <div class="col-12">
      <button class="btn btn-primary" type="submit">Registrar</button>
    </div>

  </form>

  @endsection