@extends('layouts.navbarMenu')

@section('title', 'Empleados')
@section('main-title', 'Creacion de Empleados')
@section('navbar-menu')
  <form method="get" action="" class="row g-3 needs-validation" novalidate>
    <input type="hidden" value="1" name="opcion">

    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="id">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="id" readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="nombre">NOMBRE</label>
        <input type="text" class="form-control" id="validationCustom02" name="nombre">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="apellido_p">APELLIDO PATERNO</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellido_p">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="apellido_m">APELLIDO MATERNO</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellido_m">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <button type="submit" class=" btn btn-primary w-100 fs-5">Editar</button>
      </div>
  </form>

  @endsection