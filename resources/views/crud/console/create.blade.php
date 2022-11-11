@extends('layouts.navbarMenu')

@section('title', 'Consolas')
@section('main-title', 'Panel de Consolas')
@section('navbar-menu')

<form action="{{ url('console') }}" method="POST" class="row g-3">
@csrf

  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Nombre de la consola</label>
    <input type="text" class="form-control is-invalid" id="validationServer01" name="nombre" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar</button>
  </div>
</form>

@endsection