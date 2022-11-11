@extends('layouts.navbarMenu')

@section('title', 'Empleados')
@section('main-title', 'Panel de empleados')
@section('navbar-menu')

<aside>
    <a href="{{url('/employee/create')}}" class="btn btn-primary btn-lg" tabindex="-1" role="button">Crear</a>
</aside>

<article>
    @include('crud.employers.show')
</article>

@endsection