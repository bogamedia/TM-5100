<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="css\styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
    <title>Detalle Evento</title>
</head>

<body class="flex-shrink-0">
    <main>
        <!-- Nav -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">ExpoMedia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="./index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="./event.php">Eventos</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="./index.php">Programación</a></li>
                                <li><a class="dropdown-item" href="./index.php">Diseño</a></li>
                                <li><a class="dropdown-item" href="./index.php">Multimedia</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <form class="d-flex">
                        <button class="btn btn-outline-light" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-light ms-1 rounded-pill">0</span>
                        </button>
                    </form>
            </div>
        </nav>
        <!-- Seccion evento -->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="./imgs/preview.png" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">Codigo: AAA-000</div>
                        <h1 class="display-5 fw-bolder">Comprar tiquete</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">$45.00</span>
                            <span>$40.00</span>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Agregar al carrito
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Seccion eventos relacionados -->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Eventos relacionados</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- imagen -->
                            <img class="card-img-top" src="./imgs/preview.png" alt="..." />
                            <!-- detalles -->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- titulo -->
                                    <h5 class="fw-bolder">Titulo Evento</h5>
                                    <!-- Precio -->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- acciones -->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver más</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100">
                            <!-- imagen -->
                            <img class="card-img-top" src="./imgs/preview.png" alt="..." />
                            <!-- detalles -->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- titulo -->
                                    <h5 class="fw-bolder">Titulo Evento</h5>
                                    <!-- Precio -->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- acciones -->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver más</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>