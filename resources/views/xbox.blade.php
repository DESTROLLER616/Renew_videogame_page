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
   background: rgb(0,0,0);
background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(4,119,2,1) 100%);
}
.container{
 max-width: 1200px;
 margin:0 auto;
 padding:3rem 2rem;
}
.container .title{
 font-size: 3.5rem;
 color:rgb(255, 253, 253);
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


   <h3 class="title">VIDEOJUEGOS PARA XBOX SERIES X</h3>

   <div class="products-container">

      <div class="product" data-name="p-1">
         <img src="{{asset('/img/Xbox/assessins.jpg')}}" alt="">
         <h3>Assassins Creed Valhalla Microsoft</h3>
         <div class="price">$ 929.00</div>
         <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-2">
         <img src="{{asset('/img/Xbox/call.jpg')}}">
         <h3>Call Of Duty Black Ops: Cold War</h3>
         <div class="price">$ 1,190.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-3">
         <img src="{{asset('/img/Xbox/elden.webp')}}">
         <h3>	Elden Ring</h3>
         <div class="price">$ 1,190.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-4">
         <img src="{{asset('/img/Xbox/far.jpg')}}">
         <h3>Far Cry 6</h3>
         <div class="price">$ 399.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-5">
         <img src="{{asset('/img/Xbox/fifa22.jpg')}}">
         <h3>FIFA 22</h3>
         <div class="price">$ 299.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-6">
         <img src="{{asset('/img/Xbox/fifa23.jpg')}}">
         <h3>FIFA 23</h3>
         <div class="price">$ 1,699.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-7">
         <img src="{{asset('/img/Xbox/forza.webp')}}">
         <h3>Forza Horizon</h3>
         <div class="price">$ 799.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-8">
         <img src="{{asset('/img/Xbox/gears.jpg')}}">
         <h3>GEARS 5</h3>
         <div class="price">$ 499.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-9">
         <img src="{{asset('/img/Xbox/halo.png')}}">
         <h3>HALO Infinite</h3>
         <div class="price">$ 599.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-10">
         <img src="{{asset('/img/Xbox/RE8.jpg')}}">
         <h3>Resident Evil 8 Village</h3>
         <div class="price">$ 649.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-11">
         <img src="{{asset('/img/Xbox/KNY.jpg')}}">
         <h3>Demon Slayer. Kimetsu no Yaiba - the Hinokami Chronicles </h3>
         <div class="price">$ 999.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-12">
         <img src="{{asset('/img/Xbox/Batle.jpg')}}">
         <h3>Battlefield 2042</h3>
         <div class="price">$ 959.00</div>
          <a href="">Comprar</a>
      </div>

   </div>

</div>


</body>
@endsection
