<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Drognet') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/7394b37805.js" crossorigin="anonymous"></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
  
    <link rel="stylesheet" href="{{ asset('css/style.css')}}"></head>
<body>
   
    <div class="site-navbar py-2">
        
  
        <div class="container">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
              <div class="site-logo">
                <a href="{{ url('/') }}" class="js-logo-clone">Drognet</a>
              </div>
            </div>
            <div class="main-nav d-none d-lg-block">
              <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active"><a href="{{ url('/') }}">Inicio</a></li>
                  <li><a href="{{ url('/admin/Productos/home') }}">Tienda</a></li>
                  <li><a href="{{  url('/Nosotros') }}">Nosotros</a></li>
                  <li><a href="{{  url('/admin/Contacto/Create') }}">QuejaSugerencia</a></li>
                <a href="{{url('/Carrito/carrito')}}"><i class="fa fa-shopping-cart"></i></a>   
                    
                      &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                      &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    
                     
                  
                  @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                      </li>
                  @endif 
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fa fa-user"></i>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Salir') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
                </ul>
              </nav>
            </div>
           
          </div>
        </div>
      </div>
      

        <main class="py-4">
            @yield('content')
        </main>
    
      
        <footer class="site-footer">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
      
                  <div class="block-7">
                    <h3 class="footer-heading mb-4">Sobre Nosotros</h3>
                    <p>Somos una compañía que esta a la vanguardia en farmacia Online y Call Center, nuestra prioridad, respeto absoluto por la formula médic</p>
                  </div>
      
                </div>
                <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
                  <h3 class="footer-heading mb-4">Enlaces rapidos</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Supplementos</a></li>
                    <li><a href="#">Vitaminas</a></li>
                    <li><a href="#">Cuidado Personal</a></li>
                    <li><a href="#">Belleza</a></li>
                  </ul>
                </div>
      
                <div class="col-md-6 col-lg-3">
                  <div class="block-5 mb-5">
                    <h3 class="footer-heading mb-4">Informacion</h3>
                    <ul class="list-unstyled">
                      <li class="address">Las Nieves - Tunja</li>
                      <li class="phone"><a href="tel://23923929210">+57 317 224 89 06</a></li>
                      <li class="email"></li>
                    </ul>
                  </div>
      
      
                </div>
              </div>
              <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                  <p>
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Desarrollado
                    por Esteban Martinez <i class="icon-heart" aria-hidden="true"></i>
                  </p>
                </div>
      
              </div>
            </div>
          </footer>
      
</body>
</html>
