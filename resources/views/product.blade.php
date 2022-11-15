@extends('layouts.navbarMenu')

@section('navbar-menu')

@foreach ($videogames as $videogame)
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$videogame->nombre}}</h5>
      <p class="card-text">{{$videogame->descripcion}}</p>
      <a href="#" class="btn btn-primary">Agregar al carrito</a>
    </div>
  </div>
@endforeach

@endsection