@extends('layouts.navbarMenu')

@section('title', 'Empleados')
@section('main-title', 'Creacion de Empleados')
@section('navbar-menu')
  
  <form action="{{ url('temployee') }}" method="POST" class="row g-3">
    @csrf

    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Tipo de empleado</label>
      <input type="text" class="form-control" id="validationDefault01" name="nombre" required>
    </div>

    <div class="col-12">
      <button class="btn btn-primary" type="submit">Registrar</button>
    </div>
  </form>

  @endsection