<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Event - Buy Tickets Purchase</title>
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
  
  <!-- Main CSS -->
  <link href="<?php echo asset('css/style.css')?>" rel="stylesheet">
</head>

<body>

  <!--==========================
      Header
    ============================-->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
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
		  <li><a class="nav-link scrollto" href="#purchase-ticket">Recibo Tickets</a></li>
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
	  <section id="purchase-ticket">
      <form action = "{{route('ticketstore')}}" method="POST">
        @csrf
			<div class='text-center marg-bott'>
				<div id='imagen' class="container event-buy-ticket col-md-6 ticket-print">
					&nbsp;
					<div class="section-header">
						<h2>Ticket de compra</h2>
					</div>
					<h3>Información de evento</h3>
					<p>Evento : <span id="p_nombreEvento"></span></p>
          <input type="text" name="id_evento" id="in_idEvento" style="display:none;"/>
					<p id="p_lugarEvento"></p>
					<p id="p_fechayhoraEvento"></p>
          <input type="text" name="fecha_hora" id="in_fechayhoraEvento" style="display:none;"/>
					
					<h3>Información de registro</h3>
					<p>Nombre completo: <span id="p_tickets_name"></span></p>
          <input type="text" name="nombre" id="in_tickets_name" style="display:none;"/>
					<p>Correo Electronico: <span id="p_tickets_email"></span></p>
          <input type="text" name="correo" id="in_tickets_email" style="display:none;"/>
			 
					<h3>Tickets en carrito</h3>
					<p><span id="p_tickets_adult_info"></span></p>
          <input type="text" name="espacio_adulto" id="in_tickets_adult_info" style="display:none;"/>
					<p><span id="p_tickets_children_info"></span></p>
          <input type="text" name="espacio_ninio" id="in_tickets_children_info" style="display:none;"/>
					<p>Total: &#8353;  <span id="p_total_info"></span></p>
          <input type="text" name="total" id="in_total_info" style="display:none;"/>
					
					<h3>Tickets ID Event</h3>
					<p><span id="p_tickets_idEvent"></span></p>
          <input type="text" name="tickets_idevent" id="in_tickets_idEvent" style="display:none;"/>
					&nbsp;
				</div>
        <button id="boton-descarga" class="btn btn-primary" type="submit">Confirmar y Descargar Ticket de Compra</button>
        <a id="boton-cancelar" href="{{route('index')}}" class="btn btn-danger btn-danger-1">Cancelar Compra</a>
			</div>
      </form>
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
  
  <!-- Media Gallery JS-->
  <script src="<?php echo asset('thirds/glightbox/js/glightbox.min.js')?>"></script>
  <script src="<?php echo asset('thirds/swiper/swiper-bundle.min.js')?>"></script>
	
  <script src="<?php echo asset('js/jquery.min.js')?>"></script>
  <script src="<?php echo asset('js/jquery-migrate.min.js')?>"></script>
  
  <!-- Main JS-->
  <script src="<?php echo asset('js/main.js')?>"></script>
  
  <!-- Search JS-->
  <script src="<?php echo asset('js/search.js')?>"></script>
  
  <!-- Buy JS-->
  <script src="<?php echo asset('js/ticket-purchase.js')?>"></script>
  
  <!-- html2canvas JS-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo asset('js/html2canvas.js')?>"></script>
   
</body>

</html>