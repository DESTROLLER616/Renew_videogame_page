@extends('layouts.navbarMenu')

@section('navbar-menu')
    <a class="btn btn-primary" href="{{url('client/show')}}" role="button">Clientes</a>
    
    @if(auth() -> user() -> id_type_user == 3)
        <a class="btn btn-primary" href="{{url('administration/show')}}" role="button">Administrador</a>
        <a class="btn btn-primary" href="{{url('employee/show')}}" role="button">Empleados</a>
        <a class="btn btn-primary" href="{{url('temployee/show')}}" role="button">Tipo empleado</a>
    @endif

    <a class="btn btn-primary" href="{{url('videogame/show')}}" role="button">Videojuegos</a>

    <br>

    <a class="btn btn-primary" href="{{url('console/show')}}" role="button">Consolas</a>
    <a class="btn btn-primary" href="{{url('region/show')}}" role="button">Regiones</a>
    <a class="btn btn-primary" href="{{url('gender/show')}}" role="button">Generos</a>
    <a class="btn btn-primary" href="{{url('state/show')}}" role="button">Estados de la republica</a>
@endsection