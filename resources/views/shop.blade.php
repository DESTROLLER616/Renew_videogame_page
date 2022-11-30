@extends('layouts.app1')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tienda</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="{{asset('img/videojuego').'/'.$pro -> image}}"
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px;display: block;"
                                     alt="{{ $pro->image }}"
                                >
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">{{ $pro->nombre }}</h6></a>
                                    <p>${{ $pro->precio }}</p>
                                    <p>{{ $pro -> nombre_consola }}</p>
                                    <p>Stock disponible: {{ $pro->stock }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->nombre }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->precio }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->nombre_consola }}" id="console" name="console">
                                        <input type="hidden" value="{{ $pro->stock }}" id="stock" name="stock">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                                @if(auth() -> check())
                                                <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart" @if($pro -> stock == 0) disabled @endif>
                                                    <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                </button>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
