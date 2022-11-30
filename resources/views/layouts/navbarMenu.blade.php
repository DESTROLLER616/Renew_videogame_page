<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>@yield('title')</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('videojuego')}}">INICIO</a>
          <a class="navbar-brand" href="{{route('nosotros')}}">SOBRE NOSOTROS</a>
          <a class="navbar-brand" href="{{url('shop')}}">Tienda</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
              </li>
              <li class="nav-item">
                @if (!(auth() -> check()))
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="false">REGISTRO CLIENTE</a>
                @endif
              </li>
            </ul>
          </div>
        </div>

        @if (auth() -> check())

          @if(auth() -> user() -> id_type_user == 2)
            <a href="{{url('/editar')}}" title="Editar cliente">bienvenido {{auth() -> user() -> name}} {{auth() -> user() -> apellido_p}}</a>
          @else
            <a href="{{url('/admin')}}" title="Menu exclusivo">bienvenido {{auth() -> user() -> name}} {{auth() -> user() -> apellido_p}}</a>
          @endif
            
        @else
          <div class="d-flex">
            <a href="{{route('login')}}">Inicio de sesión</a>
          </div>

        @endif
      </nav>

      <center><h1>@yield('main-title')</h1></center>

      @yield('navbar-menu')
</body>
</html>