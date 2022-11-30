@extends('layouts.navbarMenu')

@section('navbar-menu')
    @if (auth() -> user() -> id_type_user == 2)
    <form action="{{ url('usuario/editar') }}" method="POST" class="row g-3 needs-validation" validate>
        @csrf

            <input type="hidden" name="id" value="{{auth() -> user() -> id}}">
        
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="validationCustom01" value="{{auth() -> user() -> name}}" name="nombre">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Apellido paterno</label>
            <input type="text" class="form-control" id="validationCustom01" value="{{auth() -> user() -> apellido_p}}" name="apellido_p">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Apellido materno</label>
            <input type="text" class="form-control" id="validationCustom01" value="{{auth() -> user() -> apellido_m}}" name="apellido_m">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="validationCustom01" value="{{auth() -> user() -> direction}}" name="direccion">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Código postal</label>
            <input type="number" class="form-control" id="validationCustom01" value="{{auth() -> user() -> postcode}}" name="codigo_postal">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Numero de telefono</label>
            <input type="tel" class="form-control" id="validationCustom01" value="{{auth() -> user() -> number_phone}}" name="telefono">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">saldo</label>
            <input type="number" class="form-control" id="validationCustom01" value="{{auth() -> user() -> saldo}}" name="saldo">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        
          <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Estado</label>
            <select class="form-select" id="validationCustom04" value="{{auth() -> user() -> id_state}}" name="estado">
              <option disabled value="">...</option>
              @foreach($states as $state)
                <option value="{{ auth() -> user() -> id_state }}" @if($state -> id == auth() -> user() -> id_state) echo selected @endif>{{ $state -> id }} - {{ $state -> nombre_estado }}</option>
              @endforeach
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
        
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="validationCustom01" value="{{auth() -> user() -> email}}" name="email">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Actualizar</button>
          </div>
        
        </form>

        
    @else
        
    @endif
@endsection