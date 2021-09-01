<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Event</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" type="image/png" href="<?php echo asset('imgs/favicon.png') ?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="<?php echo asset('thirds/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo asset('thirds/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">

  <!-- Media Gallery CSS -->
  <link href="<?php echo asset('thirds/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?php echo asset('thirds/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Main CSS -->
  <link href="<?php echo asset('css/style.css') ?>" rel="stylesheet">

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
        <!-- <h1><a href="index.php">The<span>Event</span></a></h1>-->
        <a href="/" class="scrollto"><img src="<?php echo asset('imgs/logo.png') ?>" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{route('login')}}">Login Admin</a></li>
          <li><a class="nav-link scrollto" href="#home">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Quiénes somos</a></li>
          <li><a class="nav-link scrollto" href="#events">Eventos</a></li>
          <li><a class="nav-link scrollto" href="#categories">Categorias</a></li>
          <!-- <li><a class="nav-link scrollto" href="#nexts-events">Próximamente</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#contact">Contáctanos</a></li> -->
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

    <!--==========================
      Home Gallery
    ============================-->
    <section id="home">

      <div class="gallery-slider swiper-container">
        <div class="swiper-wrapper align-items-center">

          <!--
          <div class="swiper-slide">
            <a href="<?php echo asset('imgs/gallery/1.jpg') ?>" class="gallery-lightbox">
              <img src="<?php echo asset('imgs/gallery/1.jpg') ?>" class="img-fluid" alt="">
            </a>
          </div>
          -->

          @foreach ($evento as $event)
          <div class="swiper-slide">

            <a href="{{$event->imagen}}" class="gallery-lightbox">
              <img src="{{$event->imagen}}" class="img-fluid" alt="{{$event->titulo}}">
            </a>

          </div>
          @endforeach

        </div>
      </div>
      <div class="swiper-pagination"></div>
      </div>

    </section><!-- End Home Gallery Section -->

    <!--==========================
      About
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>¿Quiénes somos?</h2>
            <p><strong>Event</strong> tiene como misión poner más experiencias culturales y de osio a tu alcance. Por eso eliminamos cualquier impedimento para que todo el mundo disfrute más a menudo de los mejores eventos de Costa Rica.
              Hemos ayudado a muchas personas a descubrir y a sumergirse en experiencias culturales y de osio por todo el territorio nacional con tickets instantáneos,
              de última hora y digitales. Además, estamos orgullosos de ser la plataforma de venta de tickets para eventos más fiable de Costa Rica.</p>
          </div>
          <div class="col-lg-6">
            <h3>Nuestro objetivo</h3>
            <p>Somos una empresa de venta de tickets que trabaja para convertirse en una solución integral de servicio. Queremos hacer de la compra de entradas una experiencia sencilla, segura, práctica y placentera. Los consumidores esperan de nosotros no solo un ticket, sino también información sobre temas de su interés, beneficios, servicios y espacios de participación.
              Invertimos tiempo y recursos en una búsqueda incansable de procesos y vínculos cada vez más amigables, con un nivel de disponibilidad siempre creciente, en entornos seguros. Estamos atentos a las nuevas tecnologías pero especialmente a las nuevas formas de relaciones sociales.
              Llegamos para innovar.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->


    <!-- ======= Events Section ======= -->
    <section id="events">
      <div class="container">
        <div class="section-header">
          <h2>Eventos</h2>
        </div>
        <div class="row">

          @foreach ($evento as $event)
          <div class="col-lg-4 col-md-6">
            <div class="evento">
              <img src="{{asset($event->imagen)}}" alt="{{$event->titulo}}" class="img-fluid">
              <div class="details">
                <h3><a href="{{route('eventdetails', $event->id_evento)}}">{{$event->titulo}}</a></h3>
                <p>{{$event->lugar_evento}}</p>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>

    </section><!-- End Events Section -->

    <!-- ======= Categories Section ======= -->
    <section id="categories" class="section-with-bg">
      <div class="container">
        <div class="section-header">
          <h2>Categorias eventos</h2>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#all" role="tab" data-bs-toggle="tab">Todos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#free" role="tab" data-bs-toggle="tab">Gratis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#payment" role="tab" data-bs-toggle="tab">Pago</a>
          </li>
        </ul>

        <div class="tab-content row justify-content-center">

          <!-- Categories All Event -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="all">

            @foreach ($evento as $event)
            <div class="row categories-item">
              <div class="col-md-12">
                <div class="evento">
                  <img src="{{$event->imagen}}" alt="{{$event->titulo}}">
                </div>
                <h4>{{$event->titulo}}<span> {{$event->descripcion}}</span></h4>
                <p>Fecha y hora: {{$event->fecha_hora}}</p>
              </div>
            </div>
            @endforeach

          </div>
          <!-- End Categories All Event -->

          <!-- Categories Free Event -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="free">

            @foreach ($evento as $event)
            @if ($event->restriccion_evento === 1)
            <div class="row categories-item">
              <div class="col-md-12">
                <div class="evento">
                  <img src="{{$event->imagen}}" alt="{{$event->titulo}}">
                </div>
                <h4>{{$event->titulo}}<span> {{$event->descripcion}}</span></h4>
                <p>Fecha y hora: {{$event->fecha_hora}}</p>
              </div>
            </div>
            @endif
            @endforeach

          </div>
          <!-- End Categories Free Event -->

          <!-- Categories Payment Event -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="payment">

          @foreach ($evento as $event)
            @if ($event->restriccion_evento === 0)
            <div class="row categories-item">
              <div class="col-md-12">
                <div class="evento">
                  <img src="{{$event->imagen}}" alt="{{$event->titulo}}">
                </div>
                <h4>{{$event->titulo}}<span> {{$event->descripcion}}</span></h4>
                <p>Fecha y hora: {{$event->fecha_hora}}</p>
              </div>
            </div>
            @endif
            @endforeach


          </div>
          <!-- End Categories Payment Event -->

        </div>

      </div>

    </section><!-- End Categories Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="<?php echo asset('imgs/logo.png') ?>" alt="Event">
            <p>La vida esta llena de experiencias...
              <br>Cuidate para que pronto sigamos disfrutando 😷
            </p>
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
        &copy; Copyright 2021 <strong>Event</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://github.com/Estefan-ajd/ProyectoPart1">Estefanía</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-chevron-double-up"></i></a>

  <!-- Bootstrap JS-->
  <script src="<?php echo asset('thirds/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Media Gallery JS-->
  <script src="<?php echo asset('thirds/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?php echo asset('thirds/swiper/swiper-bundle.min.js') ?>"></script>

  <script src="<?php echo asset('js/jquery.min.js') ?>"></script>
  <script src="<?php echo asset('js/jquery-migrate.min.js') ?>"></script>

  <!-- Main JS-->
  <script src="<?php echo asset('js/main.js') ?>"></script>

  <!-- Search JS-->
  <script src="<?php echo asset('js/search.js') ?>"></script>

  <!-- Ticket Clean JS-->
  <script src="<?php echo asset('js/ticket-clean.js') ?>"></script>

</body>

</html>