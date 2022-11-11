@extends('layouts.navbarMenu')

@section('title', 'Empleados')
@section('main-title', 'Edición de empleados')
@section('navbar-menu')

<form action="{{ url('employee/'.$employer->id.'') }}" method="POST" class="row g-3 needs-validation" validate>
  @csrf
  @method('PUT')
  
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="validationCustom01" value="{{ $employer->name }}" name="nombre" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Apellido paterno</label>
      <input type="text" class="form-control" id="validationCustom01" value="{{ $employer->apellido_p }}" name="apellido_p" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Apellido materno</label>
      <input type="text" class="form-control" id="validationCustom01" value="{{ $employer->apellido_m }}" name="apellido_m" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Dirección</label>
      <input type="text" class="form-control" id="validationCustom01" value="{{ $employer->direction }}" name="direccion" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Código postal</label>
      <input type="number" class="form-control" id="validationCustom01" value="{{ $employer->postcode }}" name="codigo_postal" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Numero de telefono</label>
      <input type="tel" class="form-control" id="validationCustom01" value="{{ $employer->number_phone }}" name="telefono" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Salario</label>
      <input type="number" class="form-control" id="validationCustom01" value="{{ $employer->salario }}" name="salario" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Fecha de contratacion</label>
      <input type="date" class="form-control" id="validationCustom01" value="{{ $employer->fecha_contratacion }}" name="contratacion" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Estado</label>
      <select class="form-select" id="validationCustom04" name="estado" required>
        <option selected disabled value="">...</option>
        @foreach($states as $state)
          <option value="{{ $state -> id }}" @if($state -> id == $employer -> id_state) echo selected @endif>{{ $state -> id }} - {{ $state -> nombre_estado }}</option>
        @endforeach
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>

    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Estatus</label>
      <select class="form-select" id="validationCustom04" value="{{$employer -> nombre_status}}" name="status">
        <option disabled value="">...</option>
        @foreach($statuses as $status)
          <option value="{{ $status -> id }}" @if($status -> id == $employer -> id_status) echo selected @endif>{{ $status -> id }} - {{ $status -> nombre_status }}</option>
        @endforeach
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
  
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Correo electronico</label>
      <input type="email" class="form-control" id="validationCustom01" value="{{ $employer->email }}" name="email" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="validationCustom01" value="{{ $employer->password }}" name="contraseña" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Registrar</button>
    </div>
  
  </form>

  <form action="{{ url('employee/'.$employer->id.'') }}" method="POST">
    @csrf
    @method('delete')
  
    <button type="submit">Eliminar</button>
  </form>

  @endsection