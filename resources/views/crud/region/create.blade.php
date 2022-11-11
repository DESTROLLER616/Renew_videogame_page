@extends('layouts.navbarMenu')

@section('title', 'Region')
@section('main-title', 'Creacion de Region')
@section('navbar-menu')

  <form action="{{ url('region') }}" method="POST" class="row g-3">
    @csrf

    <div class="col-md-3">
      <label for="validationDefault03" class="form-label">Nombre de la región</label>
      <input type="text" class="form-control" id="validationDefault03" name="nombre" required>
    </div>

    <div class="col-12">
      <button class="btn btn-primary" type="submit">Registrar</button>
    </div>
  </form>

@endsection