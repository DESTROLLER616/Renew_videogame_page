@extends('layouts.navbarMenu')

@section('navbar-menu')
<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap');
*{
   font-family: 'Nunito', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   transition: all .2s linear;
   text-transform: capitalize;
}
html{
   font-size: 62.5%;
   overflow-x: hidden;
}
body{
   background: rgb(212,0,0);
background: radial-gradient(circle, rgb(255, 0, 0) 23%, rgb(100, 95, 93) 100%);
}
.container{
   max-width: 1200px;
   margin:0 auto;
   padding:3rem 2rem;
}
.container .title{
   font-size: 3.5rem;
   color:rgb(255, 255, 255);
   margin-bottom: 3rem;
   text-transform: uppercase;
   text-align: center;
}
.container .products-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:2rem;
   box-shadow: 0 12px 16px rgb(0, 0, 0); 

}
.container .products-container .product{
   text-align: center;
   padding:3rem 2rem;
   background: #fff;
   
   outline: .1rem solid #ccc;
   outline-offset: -1.5rem;
   cursor: pointer;
}
.container .products-container .product:hover{
   outline: .2rem solid #222;
   outline-offset: 0;
   transform: translateY(-15px);
   box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}
.container .products-container .product img{
   height: 25rem;
}
.container .products-container .product:hover img{
   transform: scale(.9);
}
.container .products-container .product h3{
   padding:.5rem 0;
   font-size: 2rem;
   color:#444;
}
.container .products-container .product:hover h3{
   color:#27ae60;
}
.container .products-container .product .price{
   font-size: 2rem;
   color:#444;
}
@media (max-width:991px){
   html{
      font-size: 55%;
   }
}
@media (max-width:450px){
   html{
      font-size: 50%;
   }
}
a{
   font-size: 200%;
}
    </style>
<div class="container">

   <h3 class="title">JUEGOS PARA NITENDO</h3>

   <div class="products-container">

      <div class="product" data-name="p-1">
         <img src="{{asset('img//Nitendo/ark.jpg')}}">
         <h3>Ark Survival Evolved </h3>
         <div class="price">$ 1,060.00</div>
       <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-2">
         <img src="{{asset('img//Nitendo/futbol.jpg')}}">
         <h3>Mario Strikers: Battle League</h3>
         <div class="price">$ 1,199.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-3">
         <img src="{{asset('img//Nitendo/kirby.jpg')}}">
         <h3>Kirby and the Forgotten Land </h3>
         <div class="price">$ 1,199.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-4">
         <img src="{{asset('img//Nitendo/luigi.jpg')}}">
         <h3>Luigi’s Mansion 3</h3>
         <div class="price">$ 1,299.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-5">
         <img src="{{asset('img//Nitendo/mario.jpg')}}">
         <h3>Luigi’s Mansion 3</h3>
         <div class="price">$ 1,349.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-6">
         <img src="{{asset('img//Nitendo/mario_kar.jpg')}}">
         <h3>Mario Kart 8 Deluxe</h3>
         <div class="price">$ 1,900.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-7">
         <img src="{{asset('img//Nitendo/mortal.jpg')}}">
         <h3>Mortal Kombat 11 Ultimate</h3>
         <div class="price">$ 1,187.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-8">
         <img src="{{asset('img//Nitendo/smash.jpg')}}">
         <h3>Super Smash Bros. Ultimate</h3>
         <div class="price">$ 1,124.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-9">
         <img src="{{asset('img//Nitendo/street.jpg')}}">
         <h3>Street Fighter - 30th Anniversary Collection</h3>
         <div class="price">$ 670.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-10">
         <img src="{{asset('img//Nitendo/zelda.jpg')}}">
         <h3>The Legend of Zelda: Breath of the Wild</h3>
         <div class="price">$ 1,185.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-11">
         <img src="{{asset('img//Nitendo/metroid.jfif')}}">
         <h3>TMetroid Dread</h3>
         <div class="price">$ 1,099.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-12">
         <img src="{{asset('img//Nitendo/mario3D.jpg')}}">
         <h3>Super Mario 3D World + Bowser’s Fury</h3>
         <div class="price">$ 1,124.00</div>
          <a href="">Comprar</a>
      </div>

   </div>

</div>

</body>
@endsection
