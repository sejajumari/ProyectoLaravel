@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Drognet</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

     
    </head>
    
    <body bgcolor="#DCD6D5">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="images/dale.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/l.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/w.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
                <hr>
                <hr>
         
          <div class="container mb-5">
              <div class="row">
                  <div class="col-md-4 text-center mb-4">
                      <div class="imagen-servicio">
                          <img src="images/bg_1.jpg" class="img-fluid" width="342">
                          <div class="row no-gutters justify-content-center">
                              <div class="col-md-10 pt-4 servicio-info">
                                  <h2 class="text-center text-uppercase encabezado">
                                      <span class="text-lowercase d-block">Conoce sobre</span> nosotros
                                  </h2>
                                <a href="{{url('/Nosotros')}}" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                              </div>
                          </div> <!--.row-->
                      </div> <!--.imagen-destacada-->
                  </div> <!--.col-md-4-->
                  <div class="col-md-4 text-center mb-4">
                      <div class="imagen-servicio">
                          <img src="images/bg_2.jpg" class="img-fluid">
                          <div class="row no-gutters justify-content-center">
                              <div class="col-md-10 pt-4 servicio-info">
                                  <h2 class="text-center text-uppercase encabezado">
                                      <span class="text-lowercase d-block">Nuestros</span> servicios
                                  </h2>
                                <a href="{{route('productos.index')}}" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                              </div>
                          </div> <!--.row-->
                      </div> <!--.imagen-destacada-->
                  </div> <!--.col-md-4-->
                  <div class="col-md-4 text-center mb-4">
                      <div class="imagen-servicio">
                          <img src="images/hero_1.jpg" class="img-fluid">
                          <div class="row no-gutters justify-content-center">
                              <div class="col-md-10 pt-4 servicio-info">
                                  <h2 class="text-center text-uppercase encabezado">
                                      <span class="text-lowercase d-block">Visita nuestra</span> tienda
                                  </h2>
                                <a href="{{route('productos.index')}}" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                              </div>
                          </div> <!--.row-->
                      </div> <!--.imagen-destacada-->
                  </div> <!--.col-md-4-->
              </div>
          </div>  
          <div class="site-section">
            <div class="container">
              <div class="row">
                <div class="title-section text-center col-12">
                  <h2 class="text-uppercase">Productos Populares</h2>
                </div>
              </div>
      
              <div class="row">
                <div class="col-sm-6 col-lg-4 text-center item mb-4">
                  <span class="tag">Rebaja</span>
                  <a href="shop-single.html"> <img src="images/ace.jfif" alt="Image"></a>
                  <h3 class="text-dark"><a href="shop-single.html">Acetaminofen</a></h3>
                  <p class="price"><del>95.00</del> &mdash; $55.00</p>
                </div>
                <div class="col-sm-6 col-lg-4 text-center item mb-4">
                  <a href="shop-single.html"> <img src="images/aspi.jfif" alt="Image"></a>
                  <h3 class="text-dark"><a href="shop-single.html">Aspirina</a></h3>
                  <p class="price">$70.00</p>
                </div>
                <div class="col-sm-6 col-lg-4 text-center item mb-4">
                  <a href="shop-single.html"> <img src="images/ibu.jfif" alt="Image"></a>
                  <h3 class="text-dark"><a href="shop-single.html">Ibuprofeno</a></h3>
                  <p class="price">$120.00</p>
                </div>
      
                <div class="col-sm-6 col-lg-4 text-center item mb-4">
      
                  <a href="shop-single.html"> <img src="images/gel.jfif" alt="Image"></a>
                  <h3 class="text-dark"><a href="shop-single.html">Gel Antibacterial</a></h3>
                  <p class="price"><del>45.00</del> &mdash; $20.00</p>
                </div>
                <div class="col-sm-6 col-lg-4 text-center item mb-4">
                  <a href="shop-single.html"> <img src="images/pedi.jfif" alt="Image"></a>
                  <h3 class="text-dark"><a href="shop-single.html">Pedialyte</a></h3>
                  <p class="price">$38.00</p>
                </div>
                <div class="col-sm-6 col-lg-4 text-center item mb-4">
                  <span class="tag">Rebaja</span>
                  <a href="shop-single.html"> <img src="images/com.jfif" alt="Image"></a>
                  <h3 class="text-dark"><a href="shop-single.html">Complejo B</a></h3>
                  <p class="price"><del>$89</del> &mdash; $38.00</p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-12 text-center">
                <a href="{{route('productos.index')}}" class="btn btn-primary px-4 py-3">Ver mas productos</a>
                </div>
              </div>
            </div>
          </div>
      
        
      
      <style>

          @font-face {
     font-family: "IndieFlower-Regular";
     src: url("../fonts/Indie_Flower/IndieFlower-Regular.ttf") format("truetype");
  
   }

           /* PRODUCTOS **/
 .productos .card {
      border: none;
 }

 .productos .card a {
      color: #000000;
 }
 .productos .card a:hover {
      text-decoration: none;
 }



 .productos .card p {
      font-size: .8rem;
 }
 .productos .card .precio {
      font-size: 1.6rem;
      color: #979797;
 }
.citas {
  background-image: url(images/cita.jpg);
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  color:#979797;
}

@media (min-width: 992px) {
  .citas {
      background-size: cover;
  }
}
.citas h3 {
  font-size: 3.5rem;
  font-family: 'Lato', sans-serif;
}
.citas p {
  font-size: 1.2rem;
  line-height: 2.6rem;
}
 /** Servicios **/

 .imagen-servicio img {
      border: 6px solid #ffffff;
      -webkit-transition: transform .3s ease;
      -ms-transition: transform .3s ease;
      transition: transform .3s ease;
 }
 .imagen-servicio img:hover {
      -webkit-transform: scale(1.2) rotate(10deg);
      -ms-transform: scale(1.2) rotate(10deg);
      transform: scale(1.2) rotate(10deg);
      -webkit-transition: all 5s ease;
      -moz-transition: all 5s ease;
      -ms-transition: all 5s ease;
      -o-transition: all 5s ease;
      transition: all 5s ease;
 }
 .servicio-info {
      background-color: #ffffff;
      margin-top: -5rem;
 }
 .servicio-info .btn-primary {
      border-radius: 0;
      background-color: #51eaea;;
      border: none;
 }

          </style>

          <div class="citas" >
            <div class="row justify-content-center" >
                <div class="col-md-8 col-lg-6 text-center">
                    <h3 class="text-uppercase">Realiza una consulta</h3>
                    <hr>
                    <p class="mt-5">
                        Realizar una gestión óptima de las referencias en nuestra farmacia 
                        es más que necesario para ofrecer un nivel adecuado de atención al cliente.
                        Tanto la oficina de farmacia como el
                         almacén conforman los activos de la farmacia y hacer una gestión de inventario
                          óptima te ayudará a reconocer errores que pueden derivar en pérdidas.
                    </p>
                    <hr>
                  <a href="{{route('quejas.create')}}" class="btn btn-primary mt-3 text-uppercase">Realizar</a>
             <hr>
                </div>
            </div>
          </div>
      
        
       
      
    </body>
</html>
@endsection
