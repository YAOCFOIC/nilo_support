<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>BUY MODULE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{'css/bootstrap.min.css'}}">
    <link rel="stylesheet" href="{{'css/magnific-popup.css'}}">
    <link rel="stylesheet" href="{{'css/jquery-ui.css'}}">
    <link rel="stylesheet" href="{{'css/owl.carousel.min.css'}}">
    <link rel="stylesheet" href="{{'css/owl.theme.default.min.css'}}">
    <link rel="stylesheet" href="{{'css/bootstrap-datepicker.css'}}">
    <link rel="stylesheet" href="{{'css/mediaelementplayer.css'}}">
    <link rel="stylesheet" href="{{'css/animate.css'}}">
    <link rel="stylesheet" href="{{'fonts/flaticon/font/flaticon.css'}}">
    <link rel="stylesheet" href="{{'css/fl-bigmug-line.css'}}">
    <link rel="stylesheet" type="text/css" href="{{'css/style.css'}}">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <div class="site-loader"></div>
    
  
 
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> 

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li><a href="#">Soporte</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12" style="margin-top: -100px;">
            <div class="row  align-items-end">
              <div class="col-md-3">
                <label for="list-types">Tipos de Preguntas</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="list-types" id="list-types" class="form-control d-block rounded-0">
                    <option value="">General</option>
                    <option value="">Factura</option>
                    <option value="">CRM</option>
                    <option value="">Contacto</option>
                    <option value="">Facturación Eléctronica</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <label for="offer-types">Describe el Problema</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                    <input type="Search" class="form-control" placeholder="Buscar">
                </div>
              </div>
           
              <div class="col-md-3">
                <input type="submit" class="btn  btn-block btn-yellow-dark " value="Buscar">
              </div>
            </div>
          </form>
        </div>  

        <div class="row">
          <div class="col-md-12">
            <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
              <div class="mr-auto">
                <a href="index.html" class="icon-view view-module active"><span class="icon-view_module"></span></a>
                <a href="view-list.html" class="icon-view view-list"><span class="icon-view_list"></span></a>
                
              </div>
              <div class="ml-auto d-flex align-items-center">
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">
      
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3 mb-3">
            <div class="property-entry h-100">
              <a href="{{url('/Preguntas')}}" class="property-thumbnail">
                <img src="{{'images/facturacionelectronica.jpg'}}" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                
                <h2 class="property-title"><a href="{{url('/Preguntas')}}">Facturación Electrónica</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>Nominapp es una aplicación externa para liquidar la nómina. Está disponible en Colombia y te permite llevar el control de los pagos.</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-3">
            <div class="property-entry h-100">
              <a href="{{url('/Preguntas')}}" class="property-thumbnail ">
                <img src="{{'images/CRM.jpg'}}" alt="Image" class="img-fluid text-center">
              </a>
              <div class="p-4 property-body">
                <h2 class="property-title text-center"><a href="{{url('/Preguntas')}}">CRM</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> La factura electrónica es un documento para soportar la venta de productos o servicios, se elabora por computador y a diferencia de la facturación tradicional.</span>        
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-3">
            <div class="property-entry h-100">
              <a href="{{url('/Preguntas')}}" class="property-thumbnail">
                <img src="{{'images/Contacto.jpg'}}" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <h2 class="property-title text-center"><a href="{{url('/Preguntas')}}">Contacto</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>El Cierre de Turno es un procedimiento que permite realizar cortes al dinero existente en el punto de venta, estos pueden ser al final de la jornada.</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-3">
            <div class="property-entry h-100">
              <a href="{{url('/Preguntas')}}" class="property-thumbnail text-center">
                <img src="{{'images/Facturafisica.png'}}" alt="Image" class="img-fluid" width="60%">
              </a>
              <div class="p-4 property-body">
                <h2 class="property-title text-center"><a href="{{url('/Preguntas')}}">Facturación Fisica</a></h2>
               </span>Nominapp es una aplicación externa para liquidar la nómina. Está disponible en Colombia y te permite llevar el control de los pagos a los empleados.</span>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
  <script src="{{'js/jquery-3.3.1.min.js'}}"></script>
  <script src="{{'js/jquery-migrate-3.0.1.min.js'}}"></script>
  <script src="{{'js/jquery-ui.js'}}"></script>
  <script src="{{'js/popper.min.js'}}"></script>
  <script src="{{'js/bootstrap.min.js'}}"></script>
  <script src="{{'js/owl.carousel.min.js'}}"></script>
  <script src="{{'js/mediaelement-and-player.min.js'}}"></script>
  <script src="{{'js/jquery.stellar.min.js'}}"></script>

  <!-- hasta aquí-->
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    </body>
</html>
