@extends('layouts.navbarMenu')

@section('navbar-menu')
    <body>   
        <style>
            
@import url('https://fonts.googleapis.com/css?family=Open+Sans|Roboto');

 body{
    margin: 0;
    padding: 0;
}
body{
    background: rgb(74,58,180);
    background: linear-gradient(90deg, rgb(255, 255, 255) 36%, rgb(0, 0, 0) 69%, rgb(190, 21, 21) 100%);
    width: 100%;
    height: 100%;
    font-family: sans-serif;
    letter-spacing: 0.03em;
    line-height: 1.6;
    font-family: 'Open Sans', sans-serif;
}
.container{
    width: 100%;
    max-width: 1200px;
    height: 430px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: auto;
}
.container .card{
    width: 330px;
    height: 500px;
    border-radius: 10spx;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    margin: 20px;
    text-align: center;
    transition: all 0.25s;
}
.container .card:hover{
    transform: translateY(-15px);
}
.container .card img{
    width: 330px;
    height: 220px;
}
.container .card h4{
    font-weight: 600;
}
.container .card p{
    padding: 0 1rem;
    font-size: 20px;
    font-weight: 500;
}
.container .card a {
    font-weight: 200px;
    text-decoration: #000000;
    color: #ffffff;
}
      
        </style>
   
    <h1 class="title"></h1>

    <div class="container">

        <div class="card" style="background-color:#00439c; 
        box-shadow: 0 12px 16px rgb(4, 0, 247); ">
            <img src="{{asset('img/Consolas/PLAY.jpg')}}">
            <h4>PLAY STATION</h4>
            <p>DESDE EL PLAY STATION 4 Y PLAY STATION 5</p>
            <a href="{{route('playstation4')}}">VER VIDEOJUEGOS DE PS4</a>
            <a href="{{route('playstation5')}}">VER VIDEOJUEGOS DE PS5</a>
        </div>

        <div class="card" style="background-color: green;
        box-shadow: 0 12px 16px rgb(2, 139, 32);" >
            <img src="{{asset('img/Consolas/xbox.jpg')}}">
            <h4>X-BOX</h4>
            <p>X-BOX SERIES X</p>
            <a href="{{route('xbox')}}">VER VIDEOJUEGOS</a>
        </div>

        <div class="card" style="background-color: #e7000a;
        box-shadow: 0 12px 16px rgb(199, 5, 5);">
            <img src="{{asset('img/Consolas/nite.png')}}">
            <h4>NITENDO</h4>
            <p>NITENDO SWITCH</p>
            <a href="{{route('nitendo')}}">VER VIDEOJUEGOS</a>
        </div>

    </div>

</body>
 @endsection