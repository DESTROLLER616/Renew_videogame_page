@extends('layouts.navbarMenu')

@section('title', 'Administracion')
@section('main-title', 'Panel de empleados')
@section('navbar-menu')

<aside>
    <a href="{{url('/employee/create')}}" class="btn btn-primary btn-lg" tabindex="-1" role="button">Crear</a>
</aside>

<br><br>

<table class="table table-hover table-responsive">
        <thead class="table-dark">
          <td>#</td>
          <td>Imagen</td>
          <td>Nombre</td>
          <td>Apellido paterno</td>
          <td>Apellido materno</td>
          <td>Numero telefonico</td>
          <td>Email</td>
          <td>Fecha de creación</td>
          <td>Fecha de contratación</td>
          <td>Salario</td>
          <td>dirección</td>
          <td>Codigo Postal</td>
          <td>Estado</td>
          <td>Tipo de empleado</td>
          <td>Estatus</td>
          <td>Editar</td>
        </thead>
    
        @foreach($employers as $employer)
        
        @if ($employer -> id_type_user == 1)
        <tbody>
          <td>{{ $employer -> id }}</td>
          <td><img src="{{asset('img/empleado').'/'.$employer -> image}}" width="100px" height="60px"></td>
          <td>{{ $employer -> name }}</td>
          <td>{{ $employer -> apellido_p }}</td>
          <td>{{ $employer -> apellido_m }}</td>
          <td>{{ $employer -> number_phone }}</td>
          <td>{{ $employer -> email }}</td>
          <td>{{ $employer -> fecha_contratacion }}</td>
          <td>{{ $employer -> created_at }}</td>
          <td>${{ $employer -> salario }}</td>
          <td>{{ $employer -> direction }}</td>
          <td>{{ $employer -> postcode }}</td>
          <td>{{ $employer -> nombre_estado }}</td>
          <td>{{ $employer -> tipo_empleado }}</td>
          <td>{{ $employer -> nombre_status }}</td>
          <td><center><a href="{{ url('employee/'.$employer -> id.'/edit') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M3.38 8A9.502 9.502 0 0112 2.5a9.502 9.502 0 019.215 7.182.75.75 0 101.456-.364C21.473 4.539 17.15 1 12 1a10.995 10.995 0 00-9.5 5.452V4.75a.75.75 0 00-1.5 0V8.5a1 1 0 001 1h3.75a.75.75 0 000-1.5H3.38zm-.595 6.318a.75.75 0 00-1.455.364C2.527 19.461 6.85 23 12 23c4.052 0 7.592-2.191 9.5-5.451v1.701a.75.75 0 001.5 0V15.5a1 1 0 00-1-1h-3.75a.75.75 0 000 1.5h2.37A9.502 9.502 0 0112 21.5c-4.446 0-8.181-3.055-9.215-7.182z"></path><path d="M13.414 13.414a2 2 0 11-2.828-2.828 2 2 0 012.828 2.828z"></path></svg></a></center></td>
        </tbody>
        @endif
    
        @endforeach
</table>

@endsection