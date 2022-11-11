@extends('layouts.navbarMenu')

@section('title', 'Administracion')
@section('main-title', 'Creacion de administrador')
@section('navbar-menu')

<form action="{{ url('administration') }}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" validate>
  @csrf

    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="validationCustom01" name="name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Apellido paterno</label>
      <input type="text" class="form-control" id="validationCustom01" name="apellido_p" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Apellido materno</label>
      <input type="text" class="form-control" id="validationCustom01" name="apellido_m" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Dirección</label>
      <input type="text" class="form-control" id="validationCustom01" name="direction" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Código postal</label>
      <input type="number" class="form-control" id="validationCustom01" name="postcode" required>
      <div class="valid-feedback">
        Looks good!
      </div>

    </div>
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Numero de telefono</label>
      <input type="tel" class="form-control" id="validationCustom01" name="number_phone" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Salario</label>
      <input type="number" class="form-control" id="validationCustom01" name="salario" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Fecha de contratacion</label>
      <input type="date" class="form-control" id="validationCustom01" name="fecha_contratacion" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Estado</label>
      <select class="form-select" id="validationCustom04" name="id_state" required>
        <option selected disabled value="">...</option>
        @foreach($states as $state)
          <option value="{{ $state -> id }}">{{ $state -> id }} - {{ $state -> nombre_estado }}</option>
        @endforeach
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Correo electronico</label>
      <input type="email" class="form-control" id="validationCustom01" name="email" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="validationCustom01" name="password" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="mb-3">
      <label for="formFile" class="form-label">Default file input example</label>
      <input class="form-control" type="file" id="formFile" name="image">
    </div>

    <div class="col-12">
      <button class="btn btn-primary" type="submit">Registrar</button>
    </div>

  </form>

@endsection  