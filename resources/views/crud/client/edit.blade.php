@extends('layouts.navbarMenu')

@section('title', 'Cliente')
@section('main-title', 'Panel de Cliente')
@section('navbar-menu')

<form action="{{ url('client/'.$client->id.'') }}" method="POST" class="row g-3 needs-validation" validate>
@csrf
@method('PUT')

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01" value="{{$client -> name}}" name="nombre">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Apellido paterno</label>
    <input type="text" class="form-control" id="validationCustom01" value="{{$client -> apellido_p}}" name="apellido_p">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Apellido materno</label>
    <input type="text" class="form-control" id="validationCustom01" value="{{$client -> apellido_p}}" name="apellido_m">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="validationCustom01" value="{{$client -> direction}}" name="direccion">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Código postal</label>
    <input type="number" class="form-control" id="validationCustom01" value="{{$client -> postcode}}" name="codigo_postal">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Numero de telefono</label>
    <input type="tel" class="form-control" id="validationCustom01" value="{{$client -> number_phone}}" name="telefono">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">saldo</label>
    <input type="number" class="form-control" id="validationCustom01" value="{{$client -> saldo}}" name="saldo">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Estado</label>
    <select class="form-select" id="validationCustom04" value="{{$client -> nombre_estado}}" name="estado">
      <option disabled value="">...</option>
      @foreach($states as $state)
        <option value="{{ $state -> id }}" @if($state -> id == $client -> id_state) echo selected @endif>{{ $state -> id }} - {{ $state -> nombre_estado }}</option>
      @endforeach
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>

  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Estatus</label>
    <select class="form-select" id="validationCustom04" value="{{$client -> nombre_status}}" name="status">
      <option disabled value="">...</option>
      @foreach($statuses as $status)
        <option value="{{ $status -> id }}" @if($status -> id == $client -> id_status) echo selected @endif>{{ $status -> id }} - {{ $status -> nombre_status }}</option>
      @endforeach
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Correo electronico</label>
    <input type="email" class="form-control" id="validationCustom01" value="{{$client -> email}}" name="email">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="validationCustom01" value="{{$client -> password}}" name="contraseña">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar</button>
  </div>

</form>

<form action="{{ url('client/'.$client->id.'') }}" method="POST">
  @csrf
  @method('delete')

  <button type="submit">Eliminar</button>
</form>

@endsection