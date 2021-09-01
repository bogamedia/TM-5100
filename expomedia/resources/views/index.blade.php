<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="resources\css\styles.css">
    
    <title>Expomedia</title>
</head>
<body class="flex-shrink-0">
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">ExpoMedia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href={{ route('index') }}>Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href={{ route('index') }}>Eventos</a></li>
                        <li class="nav-item"><a class="nav-link" href={{ route('index') }}>Categorías</a></li>
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="blog-home.html">Blog Home</a></li>
                                    <li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li>
                                </ul>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
    </main>
    <footer>

    </footer>
</body>
</html>
