@extends('layouts.navbarMenu')

@section('title', 'Administracion')
@section('main-title', 'Panel de estatus')
@section('navbar-menu')

<aside>
  <a href="{{url('/videogame/create')}}" class="btn btn-primary btn-lg" tabindex="-1" role="button">Crear</a>
</aside>

<br><br>

<table class="table table-hover table-responsive">
  <thead class="table-dark">
    <td>#</td>
    <td>Nombre</td>
    <td>Desarrolladora</td>
    <td>Publicadora</td>
    <td>Fecha de estreno</td>
    <td>Descripción</td>
    <td>Código</td>
    <td>Clasificación</td>
    <td>Región</td>
    <td>Género</td>
    <td>Consola</td>
    <td>Stock</td>
    <td>Precio</td>
    <td>Editar</td>
  </thead>

  @foreach($videogames as $videogame)
  <tbody>
    <td>{{ $videogame -> id }}</td>
    <td><img src="{{asset('img/videojuego').'/'.$videogame -> image}}" width="100px" height="60px"></td>
    <td>{{ $videogame -> nombre }}</td>
    <td>{{ $videogame -> desarrolladora }}</td>
    <td>{{ $videogame -> publicadora }}</td>
    <td>{{ $videogame -> fecha_estreno }}</td>
    <td>{{ $videogame -> descripcion }}</td>
    <td>{{ $videogame -> codigo }}</td>
    <td>{{ $videogame -> nombre_clasificacion }}</td>
    <td>{{ $videogame -> nombre_region }}</td>
    <td>{{ $videogame -> nombre_genero }}</td>
    <td>{{ $videogame -> nombre_consola }}</td>
    <td>{{ $videogame -> stock }}</td>
    <td>${{ $videogame -> precio }}</td>
    <td><center><a href="{{ url('videogame/'.$videogame->id.'/edit') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M3.38 8A9.502 9.502 0 0112 2.5a9.502 9.502 0 019.215 7.182.75.75 0 101.456-.364C21.473 4.539 17.15 1 12 1a10.995 10.995 0 00-9.5 5.452V4.75a.75.75 0 00-1.5 0V8.5a1 1 0 001 1h3.75a.75.75 0 000-1.5H3.38zm-.595 6.318a.75.75 0 00-1.455.364C2.527 19.461 6.85 23 12 23c4.052 0 7.592-2.191 9.5-5.451v1.701a.75.75 0 001.5 0V15.5a1 1 0 00-1-1h-3.75a.75.75 0 000 1.5h2.37A9.502 9.502 0 0112 21.5c-4.446 0-8.181-3.055-9.215-7.182z"></path><path d="M13.414 13.414a2 2 0 11-2.828-2.828 2 2 0 012.828 2.828z"></path></svg></a></center></td>
  </tbody>
  @endforeach
</table>

@endsection