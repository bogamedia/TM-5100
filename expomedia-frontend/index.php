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
    <title>Expomedia</title>
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
                                <li><a class="dropdown-item" href="./category.php">Programación</a></li>
                                <li><a class="dropdown-item" href="./category.php">Diseño</a></li>
                                <li><a class="dropdown-item" href="./category.php">Multimedia</a></li>
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
        <!-- Header-->
        <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Header 1</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut facilis mollitia fuga quaerat corrupti itaque culpa eius, inventore beatae distinctio laboriosam suscipit ab sequi similique. Aut temporibus accusantium minus iste.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Book Now</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="./imgs/preview.png" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Eventos -->
            <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Imagen evento-->
                            <img class="card-img-top" src="./imgs/preview.png" alt="..." />
                            <!-- Detalles evento -->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Titulo Evento-->
                                    <h5 class="fw-bolder">Evento</h5>
                                    <!-- Precio Evento -->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Acciones Evento -->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver más</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Imagen evento-->
                            <img class="card-img-top" src="./imgs/preview.png" alt="..." />
                            <!-- Detalles evento -->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Titulo Evento-->
                                    <h5 class="fw-bolder">Evento</h5>
                                    <!-- Precio Evento -->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Acciones Evento -->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver más</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Imagen evento-->
                            <img class="card-img-top" src="./imgs/preview.png" alt="..." />
                            <!-- Detalles evento -->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Titulo Evento-->
                                    <h5 class="fw-bolder">Evento</h5>
                                    <!-- Precio Evento -->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Acciones Evento -->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver más</a></div>
                            </div>
                        </div>
                    </div>
            </section>
    </main>
    <footer>

    </footer>
</body>

</html>