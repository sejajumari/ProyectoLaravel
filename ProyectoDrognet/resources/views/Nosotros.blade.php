@extends('layouts.app')
@section('content')
    
<style> 

.timeline {
  position: relative;
  padding: 0;
  list-style: none;
}

.timeline:before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 40px;
  width: 2px;
  margin-left: -1.5px;
  content: '';
  background-color: #8c92a0;
}

.timeline > li {
  position: relative;
  min-height: 50px;
  margin-bottom: 50px;
}

.timeline > li:after, .timeline > li:before {
  display: table;
  content: ' ';
}

.timeline > li:after {
  clear: both;
}

.timeline > li .timeline-panel {
  position: relative;
  float: right;
  width: 100%;
  padding: 0 20px 0 100px;
  text-align: left;
}

.timeline > li .timeline-panel:before {
  right: auto;
  left: -15px;
  border-right-width: 15px;
  border-left-width: 0;
}

.timeline > li .timeline-panel:after {
  right: auto;
  left: -14px;
  border-right-width: 14px;
  border-left-width: 0;
}

.timeline > li .timeline-image {
  position: absolute;
  z-index: 100;
  left: 0;
  width: 80px;
  height: 80px;
  margin-left: 0;
  text-align: center;
  color: white;
  border: 7px solid #e9ecef;
  border-radius: 100%;
  background-color:#51eaea;;
}

.timeline > li .timeline-image h4 {
  font-size: 10px;
  line-height: 14px;
  margin-top: 12px;
}

.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
  padding: 0 20px 0 100px;
  text-align: left;
}

.timeline > li.timeline-inverted > .timeline-panel:before {
  right: auto;
  left: -15px;
  border-right-width: 15px;
  border-left-width: 0;
}

.timeline > li.timeline-inverted > .timeline-panel:after {
  right: auto;
  left: -14px;
  border-right-width: 14px;
  border-left-width: 0;
}

.timeline > li:last-child {
  margin-bottom: 0;
}

.timeline .timeline-heading h4 {
  margin-top: 0;
  color: inherit;
}

.timeline .timeline-heading h4.subheading {
  text-transform: none;
}

.timeline .timeline-body > ul,
.timeline .timeline-body > p {
  margin-bottom: 0;
}

@media (min-width: 768px) {
  .timeline:before {
    left: 50%;
  }
  .timeline > li {
    min-height: 100px;
    margin-bottom: 100px;
  }
  .timeline > li .timeline-panel {
    float: left;
    width: 41%;
    padding: 0 20px 20px 30px;
    text-align: right;
  }
  .timeline > li .timeline-image {
    left: 50%;
    width: 100px;
    height: 100px;
    margin-left: -50px;
  }
  .timeline > li .timeline-image h4 {
    font-size: 13px;
    line-height: 18px;
    margin-top: 16px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    float: right;
    padding: 0 30px 20px 20px;
    text-align: left;
  }
}

@media (min-width: 992px) {
  .timeline > li {
    min-height: 150px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px;
  }
  .timeline > li .timeline-image {
    width: 150px;
    height: 150px;
    margin-left: -75px;
  }
  .timeline > li .timeline-image h4 {
    font-size: 18px;
    line-height: 26px;
    margin-top: 30px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 20px 20px;
  }
}

@media (min-width: 1200px) {
  .timeline > li {
    min-height: 170px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px 100px;
  }
  .timeline > li .timeline-image {
    width: 170px;
    height: 170px;
    margin-left: -85px;
  }
  .timeline > li .timeline-image h4 {
    margin-top: 40px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 100px 20px 20px;
  }
}

</style>

<section class="page-section" id="about">
    <div class="container">
      <div class="site-section bg-light custom-border-bottom" data-aos="fade">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="block-16">
                        <figure>
                            <img src="images/bg_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                        </figure>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
    
    
                    <div class="site-section-heading pt-3 mb-4">
                        <h2 class="text-black">Como Empezamos</h2>
                    </div>
                    <p>
                        El coordinador de la oficina de Medicamentos de la Territorial de Salud expresó :
                        «debemos tener identificado los procesos de estimación de necesidades, recepción,
                        almacenamiento, dispensación de medicamentos, controles de humedad y de temperatura; entonces,
                        ya que algunas personas que comercian medicamentos no manejan estos conceptos, nosotros los capacitamos».
                    </p>
    
                </div>
            </div>
        </div>
    </div>
    
<br>

      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="images/1.jfif" alt="" width="300px" height="300px">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                
                    <hr>
                  <h4 class="subheading">Inicio</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted ">Somos una cadena de droguerías líder en el suministro de medicamentos, 
                    productos de higiene personal, cuidado del bebé y cosméticos entre otros, que tiene como 
                    compromiso principal la salud y el bienestar de nuestros clientes.
                    1.979 El inicio
                    Fundada en Febrero de 1.979 en Valledupar como distribuidora mayorista en el sur de la Guajira y el Cesar.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="images/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  
                  <h4 class="subheading">Desarrollo</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Se inaugura la primera sucursal de 
                    Droguería La Economía en Santa Marta iniciándose así nuestra
                     cadena de droguerías con cubrimiento en toda la costa norte de 
                     Colombia distinguiéndose por su excelencia operacional, procesos 
                     innovadores, un extenso surtido y calida atención.
                    </p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="images/3.jfif" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                 
                  <h4 class="subheading">VISIÓN</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Ser una empresa de continuo crecimiento profesional para la satisfacion de  nuestros clientes, orientandonos a una atencion personalizada, y en continua busqueda de los productos que se adecuen a sus necesidades, ofreciendo la mejor calidad y bienestar.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="images/4.jfif" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                
                  <h4 class="subheading">MISIÓN</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Prestar y brindar soluciones para las necesidades de nuestros clientes. Satisfacer los requisitos de nuestros clientes y preveedores mediante la comerlializacion de productos populares, garactizando la calidad, eficiencia y competitividad, asegurando el crecimiento personal,profesional y economico de nuestra empresa, asi como el bienestar de la comunidad.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>¡Gracias!
                  <br>Por tú
                  <br>Atención</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
 

<div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-truck text-primary"></span>
                </div>
                <div class="text">
                    <h2>Envio Gratis</h2>

                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-refresh2 text-primary"></span>
                </div>
                <div class="text">
                    <h2>Devoluciones Gratis</h2>

                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-help text-primary"></span>
                </div>
                <div class="text">
                    <h2>Atencion Al Cliente</h2>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-section bg-light custom-border-bottom" data-aos="fade">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>Equipo de Trabajo</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 mb-5">

                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src="images/manisql.jpg" alt="Image placeholder" class="mb-4">
                            <h3 class="block-38-heading h4">Esteban Martinez</h3>
                            <p class="block-38-subheading">Desarrollador</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-5">
                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src="images/santa.jpg" alt="Image placeholder" class="mb-4">
                            <h3 class="block-38-heading h4">Brayan Santafe</h3>
                            <p class="block-38-subheading">Desarrollador</p>
                        </div>
@endsection