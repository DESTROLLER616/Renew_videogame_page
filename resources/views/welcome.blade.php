<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @extends('layouts.btHead')

    @section('btscripts')
  
   @include('layouts.navbarMenu')

          <center><h1>Tienda de videojuegos</h1></center>

          <center><h4>UNA PAGINA DONDE ENCONTRARAS LOS VIDEOJUEGOS 
            DE LAS NUEVAS GENERACIONES DE CONSOLAS</h4></center>

          <img src="{{url:: asset('img/Consolas/consolas')}}" alt="">
    </body>
</html>
@endsection
