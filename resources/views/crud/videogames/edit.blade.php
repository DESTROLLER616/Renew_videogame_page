@extends('layouts.navbarMenu')

@section('title', 'Videojuegos')
@section('main-title', 'Creacion de Videojuegos')
@section('navbar-menu')
  
<form action="{{ url('videogame/'.$videogame->id.'') }}" method="POST" class="row g-3 needs-validation" validate>
  @csrf
  @method('PUT')

  <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nombre del videojuego</label>
      <input type="text" class="form-control" id="validationCustom01" value="{{ $videogame -> nombre }}" name="nombre" required>
      <div class="valid-feedback">
        Looks good!
      </div>
  </div>

  <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nombre de la desarrolladora</label>
      <input type="text" class="form-control" id="validationCustom01" value="{{ $videogame -> desarrolladora }}" name="desarrolladora" required>
      <div class="valid-feedback">
        Looks good!
      </div>
  </div>

  <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nombre de la publicadora</label>
      <input type="text" class="form-control" id="validationCustom01" value="{{ $videogame -> publicadora }}" name="publicadora" required>
      <div class="valid-feedback">
        Looks good!
      </div>
  </div>

  <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Fecha de estreno</label>
      <input type="date" class="form-control" id="validationCustom01" value="{{ $videogame -> fecha_estreno }}" name="fecha_estreno" required>
      <div class="valid-feedback">
        Looks good!
      </div>
  </div>

  <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" maxlength="255" name="descripcion">{{ $videogame -> descripcion }}</textarea>
  </div>

  <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Código</label>
      <input type="text" class="form-control" id="validationCustom01" value="{{ $videogame -> codigo }}" name="codigo" required>
      <div class="valid-feedback">
        Looks good!
      </div>
  </div>

  <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Precio</label>
      <input type="number" class="form-control" id="validationCustom01" value="{{ $videogame -> precio }}" name="precio" required>
      <div class="valid-feedback">
        Looks good!
      </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">stock</label>
    <input type="number" class="form-control" id="validationCustom01" value="{{ $videogame -> stock }}" name="stock" required>
    <div class="valid-feedback">
      Looks good!
    </div>
</div>

  <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Clasificación</label>
      <select class="form-select" id="validationCustom04" value="{{ $videogame -> id_clasificacion }}" name="clasificacion" required>
        <option selected disabled value="">...</option>
        @foreach ($classifications as $classification)
            <option value="{{ $classification -> id }}" @if($classification -> id == $videogame -> id_clasificacion) selected @endif>{{ $classification -> id }} - {{ $classification -> nombre_clasificacion }}</option>
        @endforeach
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
  </div>

  <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Región</label>
      <select class="form-select" id="validationCustom04" value="{{ $videogame -> id_region }}" name="region" required>
        <option selected disabled value="">...</option>
        @foreach($regions as $region)
          <option value="{{ $region -> id }}" @if($region -> id == $videogame -> id_region) selected @endif>{{ $region -> id }} - {{ $region -> nombre_region }}</option>
        @endforeach
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
  </div>

  <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Género</label>
      <select class="form-select" id="validationCustom04" value="{{ $videogame -> id_genero }}" name="genero" required>
        <option selected disabled value="">...</option>
        @foreach($genders as $gender)
          <option value="{{ $gender -> id }}" @if($gender -> id == $videogame -> id_genero) selected @endif>{{ $gender -> id }} - {{ $gender -> nombre_genero }}</option>
        @endforeach
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
  </div>

  <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Consola</label>
      <select class="form-select" id="validationCustom04" value="{{ $videogame -> id_consola }}" name="consola" required>
        <option selected disabled value="">...</option>
        @foreach($consoles as $console)
          <option value="{{ $console -> id }}" @if($console -> id == $videogame -> id_consola) selected @endif>{{ $console -> id }} - {{ $console -> nombre_consola }}</option>
        @endforeach
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
  </div>

  <div class="col-12">
      <button class="btn btn-primary" type="submit">Editar</button>
  </div>
</form>

<form action="{{ url('videogame/'.$videogame->id.'') }}" method="POST">
  @csrf
  @method('delete')

  <button type="submit">Eliminar</button>
</form>

@endsection