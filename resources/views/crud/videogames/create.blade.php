@extends('layouts.navbarMenu')

@section('title', 'Videojuegos')
@section('main-title', 'Creacion de Videojuegos')
@section('navbar-menu')

<form action="{{ url('videogame') }}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>
    @csrf

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre del videojuego</label>
        <input type="text" class="form-control" id="validationCustom01" name="nombre" required>
        <div class="valid-feedback">
          Looks good!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre de la desarrolladora</label>
        <input type="text" class="form-control" id="validationCustom01" name="desarrolladora" required>
        <div class="valid-feedback">
          Looks good!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre de la publicadora</label>
        <input type="text" class="form-control" id="validationCustom01" name="publicadora" required>
        <div class="valid-feedback">
          Looks good!
        </div>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" maxlength="255" name="descripcion"></textarea>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Código</label>
        <input type="text" class="form-control" id="validationCustom01" name="codigo" required>
        <div class="valid-feedback">
          Looks good!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Fecha de estreno</label>
        <input type="date" class="form-control" id="validationCustom01" name="fecha_estreno" required>
        <div class="valid-feedback">
          Looks good!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Precio</label>
        <input type="number" class="form-control" id="validationCustom01" name="precio" required>
        <div class="valid-feedback">
          Looks good!
        </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">stock</label>
      <input type="number" class="form-control" id="validationCustom01" name="stock" required>
      <div class="valid-feedback">
        Looks good!
      </div>
  </div>

    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Clasificación</label>
        <select class="form-select" id="validationCustom04" name="clasificacion" required>
          <option selected disabled value="">...</option>
          @foreach ($classifications as $classification)
              <option value="{{ $classification -> id }}">{{ $classification -> id }} - {{ $classification -> nombre_clasificacion }}</option>
          @endforeach
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
    </div>

    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Región</label>
        <select class="form-select" id="validationCustom04" name="region" required>
          <option selected disabled value="">...</option>
          @foreach($regions as $region)
            <option value="{{ $region -> id }}">{{ $region -> id }} - {{ $region -> nombre_region }}</option>
          @endforeach
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
    </div>

    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Género</label>
        <select class="form-select" id="validationCustom04" name="genero" required>
          <option selected disabled value="">...</option>
          @foreach($genders as $gender)
            <option value="{{ $gender -> id }}">{{ $gender -> id }} - {{ $gender -> nombre_genero }}</option>
          @endforeach
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
    </div>

    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Consola</label>
        <select class="form-select" id="validationCustom04" name="consola" required>
          <option selected disabled value="">...</option>
          @foreach($consoles as $console)
            <option value="{{ $console -> id }}">{{ $console -> id }} - {{ $console -> nombre_consola }}</option>
          @endforeach
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
    </div>

    <div class="mb-3">
      <label for="formFile" class="form-label">Imagen del videojuego</label>
      <input class="form-control" type="file" id="formFile" name="image">
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Crear</button>
      </div>
</form>

@endsection