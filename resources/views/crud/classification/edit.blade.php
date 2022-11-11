@extends('layouts.navbarMenu')

@section('title', 'Classificación')
@section('main-title', 'Panel de clasificacion')
@section('navbar-menu')

  <form class="p-4 needs-validation" action="" method="get" novalidate>
    <input type="hidden" name="opcion" value="2">
    <input type="hidden" name="id" value="">

    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="id">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="id" value="" readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="nombre">NOMBRE</label>
        <input type="text" class="form-control" id="validationCustom02" name="nombre" value="" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

    <div class="col-md-3 mb-3">
      <button type="submit" class=" btn btn-primary w-100 fs-5">Editar</button>
    </div>
  </form>
@endsection