@extends('layouts.navbarMenu')

@section('navbar-menu')
<body>
  <style>
    body{   
      background: rgb(74,58,180);
background: linear-gradient(90deg, rgb(34, 1, 255) 0%, rgb(247, 2, 2) 51%, rgb(115, 236, 131) 100%);
    }
  </style>
    <center><h1> TIENDA DE VIDEOJUEGOS</h1></center>

    <center><h4 style="color: rgb(255, 255, 255)">UNA PAGINA DONDE ENCONTRARAS LOS VIDEOJUEGOS 
      DE LAS NUEVAS GENERACIONES DE CONSOLAS</h4></center>
  
                  <center><img  src="{{asset('img/Consolas/plataformas.jpg')}}" height="500" width="1365"></center>
</body>         
@endsection