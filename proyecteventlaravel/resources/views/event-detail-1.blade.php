<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Event - Events Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" type="image/png" href="<?php echo asset('imgs/favicon.png')?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="<?php echo asset('thirds/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo asset('thirds/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
  
  <!-- Media Gallery CSS -->
  <link href="<?php echo asset('thirds/glightbox/css/glightbox.min.css')?>" rel="stylesheet">
  <link href="<?php echo asset('thirds/swiper/swiper-bundle.min.css')?>" rel="stylesheet">

  <!-- Main CSS -->
  <link href="<?php echo asset('css/style.css')?>" rel="stylesheet">
  
  <!-- Import Vue.js -->
  <script src="https://unpkg.com/vue@next"></script>
</head>

<body>

  <!--==========================
      Header
    ============================-->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="indexEvent">The<span>Event</span></a></h1>-->
        <a href="/" class="scrollto"><img src="<?php echo asset('imgs/logo.png')?>" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{route('index')}}#home">Inicio</a></li>
		      <li><a class="nav-link scrollto" href="{{route('index')}}#about">Quiénes somos</a></li>
          <li><a class="nav-link scrollto" href="{{route('index')}}#events">Eventos</a></li>
          <li><a class="nav-link scrollto" href="{{route('index')}}#categories">Categorias</a></li>
          <!-- <li><a class="nav-link scrollto" href="{{route('index')}}#nexts-events">Próximamente</a></li> -->
          <!--<li><a class="nav-link scrollto" href="{{route('index')}}#contact">Contáctanos</a></li> -->
		  <li><a class="nav-link scrollto" href="#event-details">Detalles de Evento</a></li>
		  <form class="d-flex search-div">
			<input class="form-control search-form-bar" type="text" placeholder="Buscar" name="search" id="search_text">
			<button class="btn-search" type="submit" id="search_submit"><i class="bi bi-search"></i></button>
		  </form>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  
  <main id="main">

    <!-- ======= Event Details Sectionn ======= -->
    <section id="event-details">
      <div class="container event-details">
        <div class="section-header">
          <h2>Detalles del Evento</h2>
        </div>

        <div class="row">
          <div class="col-md-6">
            <img id="imagenEvento" src="{{asset($detalle_evento->imagen)}}" alt="Events 1" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="details det-marg">
              <h2 id="nombreEvento">{{$detalle_evento->titulo}}</h2>
              <p id="idEvento" style="display: none;">{{$detalle_evento->id_evento}}</p>
              <p id="lugarEvento">Lugar en dónde se realizará : {{$detalle_evento->lugar_evento}}</p>
              <p id="fechayhoraEvento">Fecha y hora : {{$detalle_evento->fecha_hora}}</p>
              <p>Categoría del evento : {{$detalle_evento->categoria}}</p>
			        <p>Descripción del evento : {{$detalle_evento->descripcion}}</p>
              @if ($detalle_evento->inventario >= 1 )
               
                @if ($detalle_evento->tipo_pago)
                  <p>Evento de Pago</p>
                  <a href="{{route('ticketpart1', $detalle_evento->id_evento)}}" class="btn btn-primary">Comprar</a>
                @else
                  <p>Evento Gratis</p>
                  <a href="{{route('ticketpart1', $detalle_evento->id_evento)}}" class="btn btn-primary">Registrarte</a> 
                 @endif

              @else
               <p style="color: red; font-size: 1.5em;">No quedan cupos disponibles para el evento</p>
              @endif
              
              
			      </div>
          </div>

        </div>
      </div>

    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="<?php echo asset('imgs/logo.png')?>" alt="Event">
            <p>La vida esta llena de experiencias...
			<br>Cuidate para que pronto sigamos disfrutando	 😷 </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Quiénes somos</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Contáctanos</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Términos y condiciones</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Politica de privacidad</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contáctanos</h4>
            <p>
              Puntarenas <br>
              Costa Rica <br>
              <strong>Número de teléfono:</strong> +506 2661 0101<br>
              <strong>Email:</strong> infoeventcr@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-google"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>
			
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2021  <strong>Event</strong>.  All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://github.com/Estefan-ajd/ProyectoPart1">Estefanía</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-chevron-double-up"></i></a>
  
  <!-- Bootstrap JS-->
  <script src="<?php echo asset('thirds/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  
  <!-- Media Gallery JS-->
  <script src="<?php echo asset('thirds/glightbox/js/glightbox.min.js')?>"></script>
  <script src="<?php echo asset('thirds/swiper/swiper-bundle.min.js')?>"></script>
	
  <script src="<?php echo asset('js/jquery.min.js')?>"></script>
  <script src="<?php echo asset('js/jquery-migrate.min.js')?>"></script>
  
  <!-- Main JS-->
  <script src="<?php echo asset('js/main.js')?>"></script>
  
  <!-- Search JS-->
  <script src="<?php echo asset('js/search.js')?>"></script>
  <script src="<?php echo asset('js/event-info.js')?>"></script>

</body>

</html>