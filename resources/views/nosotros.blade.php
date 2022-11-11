@extends('layouts.navbarMenu')

@section('navbar-menu')
<body>
  <style>
    body{
    
      background: rgb(74,58,180);
background: linear-gradient(90deg, rgba(74,58,180,1) 0%, rgb(24, 167, 8) 51%, rgb(190, 21, 21) 100%);
    }
  </style>
  
   <center><h1>GAMES FOR ALL</h1></center>
   <center><P style="margin: 0; font-size:150%; color: rgb(255, 255, 255) " > SOMOS UN EQUIPO FANATICO DE LOS VIDEOJUEGOS QUE LES ESTAMOS AFRECIEND LOS JUEGOS 
    MAS COTIZADOS DE LAS 3 PRINCIPALES CONSOLAS</P></center>    
    <center><P style="margin: 0; font-size:150%; color: rgb(255, 255, 255)" > COMO LO SON EL PLAY STATION
       4 Y 5, XBOX SERIES X Y DEL NITENDO.</P></center>  
       <center><p style="color: rgb(255, 255, 255)">MANTENDREMOS LA PAGINA SIEMPRE ACTUALIZADA CON LOS JUEGOS MAS ESPERADOS POR LA COMUNIDAD  </P></center>  

          <center><img  src="{{asset('img/Consolas/consolas.webp')}}" height="400" width="1365"></center>

   </body>        
          @endsection