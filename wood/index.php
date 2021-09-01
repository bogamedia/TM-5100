<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Woodland-Main</title>
</head>

<body>
    <header class="container-fluid">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!--CAROUSEL-->
                <div class="carousel-item active">
                    <img src="./imgs/header-1.png" class="d-block w-100 img-header-filter" alt="nature">
                </div>
                <div class="carousel-item"><img src="./imgs/header-2.png" class="d-block w-100 img-header-filter"
                        alt="nature">
                </div>
                <div class="carousel-item"><img src="./imgs/header-3.jpg" class="d-block w-100 img-header-filter"
                        alt="nature">
                </div>
                <!--NAV-->
                <nav class="navbar navbar-expand-lg navbar-light nav-container">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="./category.php">
                            <img src="./imgs/icon/logo-white.png" class="logo" alt="logo">
                        </a>
                        <button class="navbar-toggler menu-mobile" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars menu-mobile "></span>
                        </button>
                        <!--NAV-->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item ">
                                    <a class="nav-link nav-link-menu active" aria-current="page"
                                        href="./index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-menu active" aria-current="page"
                                        href="./category.php">Special</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-menu active" aria-current="page"
                                        href="./category.php">Explore</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-menu active" aria-current="page"
                                        href="./category.php">Camping</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-menu active" aria-current="page"
                                        href="./category.php">Hikes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-menu active" aria-current="page"
                                        href="./category.php">Night</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link nav-link-menu dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Category
                                    </a>
                                    <ul class="dropdown-menu container-menu-drop" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item nav-link-drop" href="./category.php">volcanoes</a>
                                        </li>
                                        <li><a class="dropdown-item nav-link-drop" href="./category.php">forest</a>
                                        </li>
                                        <li><a class="dropdown-item nav-link-drop" href="./category.php">river</a></li>
                                        <li><a class="dropdown-item nav-link-drop" href="./category.php">flora</a></li>
                                        <li><a class="dropdown-item nav-link-drop" href="./category.php">cerro</a></li>
                                        <li><a class="dropdown-item nav-link-drop" href="./category.php">beach</a></li>
                                        <li><a class="dropdown-item nav-link-drop" href="./category.php">exercise</a>
                                        </li>
                                        <li><a class="dropdown-item nav-link-drop" href="./category.php">breath</a>
                                        </li>
                                        <li><a class="dropdown-item nav-link-drop" href="./category.php">meditation</a>
                                        </li>
                                        <li><a class="dropdown-item nav-link-drop" href="./category.php">cottage</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn-search" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
                <!--SPECIAL DESKTOP-->
                <div class="special-section tablet-special-header desktop-section">
                    <h1>Special Event</h1>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <!--1ST CARD-->
                        <div class="col">
                            <div class="card card-special h-100">
                                <img src="./imgs/special-1.jpg" class="card-img-top img-border" alt="Star">
                                <div class="card-body">
                                    <h3>Rain´s Star</h3>
                                    <p class="card-description">This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content.</p>
                                </div>
                                <a class="special-buttom-main" href="./event.php">GO NOW</a>
                            </div>
                        </div>
                        <!--2ND CARD-->
                        <div class="col desktop-section">
                            <div class="card card-special h-100">
                                <div class="container-img-special">
                                    <img src="./imgs/special-2.jpg" class="card-img-top img-border" alt="Moon">
                                </div>
                                <div class="card-body">
                                    <h3>Full Moon</h3>
                                    <p class="card-description">This card has supporting text below as a natural lead-in
                                        to
                                        additional content.</p>
                                </div>
                                <a class="special-buttom-main" href="./event.php">GO NOW</a>
                            </div>
                        </div>
                        <!--3RD CARD-->
                        <div class="col desktop-section">
                            <div class="card card-special h-100">
                                <img src="./imgs/special-3.jpg" class="card-img-top img-border" alt="Sunset">
                                <div class="card-body">
                                    <h3>Sunset</h3>
                                    <p class="card-description">This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content.</p>
                                </div>
                                <a class="special-buttom-main" href="./event.php">GO NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!--SPECIAL MOVILE SECTION-->
    <section class="special-section mobile-section">
        <h2>Special Event</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!--1ST CARD-->
            <div class="col">
                <div class="card card-special h-100">
                    <img src="./imgs/special-1.jpg" class="card-img-top img-border" alt="Star">
                    <div class="card-body">
                        <h3>Rain´s Star</h3>
                        <p class="card-description">This is a wider card with supporting.</p>
                    </div>
                    <a class="special-buttom-main" href="./event.php">GO NOW</a>
                </div>
            </div>
        </div>
    </section>
    <!--SPECIAL TABLET SECTION-->
    <section class="special-section tablet-special-section">
        <h2>Special Event</h2>
        <p class="card-description">This is a wider card with supporting text below as a natural
            lead-in to additional content.</p>
        <div class="row  row-cols-1 row-cols-md-3 g-4">
            <!--1ST CARD-->
            <div class="col-sm-4">
                <div class="card card-special h-100">
                    <img src="./imgs/special-1.jpg" class="card-img-top img-border" alt="Star">
                    <div class="card-body">
                        <h3>Rain´s Star</h3>
                        <p class="card-description">This is a wider card with supporting.</p>
                        <a class="special-buttom-main" href="./event.php">GO NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-special h-100">
                    <img src="./imgs/special-2.jpg" class="card-img-top img-border" alt="Moon">
                    <div class="card-body">
                        <h3>Full Moon</h3>
                        <p class="card-description">This is a wider card with supporting.</p>
                        <a class="special-buttom-main" href="./event.php">GO NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-special h-100">
                    <img src="./imgs/special-3.jpg" class="card-img-top img-border" alt="Sunset">
                    <div class="card-body">
                        <h3>Sunset</h3>
                        <p class="card-description">This is a wider card with supporting.</p>
                        <a class="special-buttom-main" href="./event.php">GO NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--EXPLORE SECTION-->
    <section class="explore-section">
        <h2>Explore Costa Rica</h2>
        <p class="desktop-section">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus repudiandae <br>
            dolorem consequuntur consectetur tempore voluptatem omnis.</p>
        <!--MOVILE SECTION-->
        <div class="mobile-section">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!--1ST CAROUSEL-->
                        <div class="card d-block w-100 card-explore">
                            <img src="./imgs/explore-1.jpg" class="card-img img-border" alt="Volcanoe">
                            <div class="card-img-overlay card-body-explore">
                                <h3>Poás Volcanoe</h3>
                                <p class="card-description">This is a wider card with supporting text below as a
                                    natural.</p>
                                <a class="special-buttom-main" href="./event.php">GO NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--2ND CAROUSEL-->
                        <div class="card d-block w-100 card-explore">
                            <img src="./imgs/explore-2.jpg" class="card-img img-border" alt="River">
                            <div class="card-img-overlay card-body-explore">
                                <h3>Celeste River</h3>
                                <p class="card-description">This is a wider card with supporting text below as a
                                    natural.</p>
                                <a class="special-buttom-main" href="./event.php">GO NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--DESKTOP SECTION-->
        <div class="row">
            <!--1ST CARD-->
            <div class="card card-explore col-sm-6 desktop-section">
                <img src="./imgs/explore-1.jpg" class="card-img img-border" alt="Volcanoe">
                <div class="card-img-overlay card-body-explore">
                    <h3>Poás Volcanoe</h3>
                    <p class="card-description">This is a wider card with supporting text below as a natural lead-in to
                        additional content.</p>
                    <a class="special-buttom-main" href="./event.php">GO NOW</a>
                </div>
            </div>
            <!--2ST CARD-->
            <div class="card card-explore col-sm-6 desktop-section">
                <img src="./imgs/explore-2.jpg" class="card-img img-border" alt="River">
                <div class="card-img-overlay card-body-explore">
                    <h3>Celeste River</h3>
                    <p class="card-description">This is a wider card with supporting text below as a natural lead-in to
                        additional content.</p>
                    <a class="special-buttom-main" href="./event.php">GO NOW</a>
                </div>
            </div>
        </div>
    </section>
    <!--CAMPING SECTION-->
    <Section class="camping-section">
        <h2>Camping</h2>
        <p class="card-description">
            This is a wider card with supporting text below as a natural lead-in to
            additional content.
        </p>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 desktop-section">
                <div class="col">
                    <div class="card card-camping h-100">
                        <img src="./imgs/camping-1.png" class="card-img-top img-border" alt="Monteverde">
                        <div class="card-body">
                            <h3>Monteverde</h3>
                            <p class="card-description">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content.</p>
                            <a class="special-buttom-main" href="./event.php">GO NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-camping h-100">
                        <img src="./imgs/camping-2.jpg" class="card-img-top img-border" alt="Forest">
                        <div class="card-body">
                            <h3>Fraijanes</h3>
                            <p class="card-description">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content.</p>
                            <a class="special-buttom-main" href="./event.php">GO NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-camping h-100">
                        <img src="./imgs/camping-3.jpg" class="card-img-top img-border" alt="Mountain">
                        <div class="card-body">
                            <h3>Cerro Pelón</h3>
                            <p class="card-description">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content.</p>
                            <a class="special-buttom-main" href="./event.php">GO NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--MOBILE SECTION-->
        <div>
            <div class="container mobile-section">
                <div class="row">
                    <div class="col similar-event-imgs">
                        <div class="card card-camping h-100">
                            <img src="./imgs/camping-1.png" class="card-img-top img-border" alt="...">
                            <div>
                                <p>Monteverde</p>
                                <a class="special-buttom-main" href="./event.php">GO NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col similar-event-imgs">
                        <div class="card card-camping h-100">
                            <img src="./imgs/camping-2.jpg" class="card-img-top img-border" alt="...">
                            <div>
                                <p>Fraijanes</p>
                                <a class="special-buttom-main" href="./event.php">GO NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
        </div>
    </Section>
    <!--Hikes Section-->
    <section class="hikes-section">
        <h2>Hikes</h2>
        <p class="card-description">With supporting text below as a natural lead-in to additional content.</p>
        <div>
            <div class="grid-wrapper">
                <div class="wide">
                    <img class="pics" src="./imgs/cerro-chirripo-1.jpg" alt="Mountain" />
                </div>
                <div class="big">
                    <img class="pics" src="./imgs/cerro-chirripo-5.jpeg" alt="Mountain" />
                </div>
                <div class="wide">
                    <img class="pics" src="./imgs/cerro-chirripo-2.jpg" alt="Mountain" />
                </div>
                <div class="wide">
                    <img class="pics" src="./imgs/cerro-chirripo-3.jpg" alt="Mountain">
                </div>
                <div class="wide">
                    <img class="pics" src="./imgs/cerro-chirripo-4.jpg" alt="Mountain" />
                </div>
            </div>
        </div>
        <div class="container-img-hikes">
            <a class="btn-hikes" href="./event.php">GO NOW</a>
        </div>
    </section>
    <!--Night Section-->
    <section class="night-section">
        <div class="night-dark-section">
            <h2>
                Event Night
            </h2>
            <p class="card-description desktop-section">
                This is a wider card with supporting text below as a natural lead-in to
                additional content.
            </p>
        </div>
        <div class="row night-light-section">
            <!--Desktop-->
            <div class="col-sm-4 desktop-section">
                <img src="./imgs/icon/meteorite.png" alt="Meteor">
                <h3>Meteor</h3>
                <p class="card-description">
                    This is a wider card with supporting text below as a natural lead-in to
                    additional content.
                </p>
                <a class="special-buttom-main" href="./category.php">GO NOW</a>
            </div>
            <div class="col-sm-4 desktop-section">
                <img src="./imgs/icon/moon.png" alt="Moon">
                <h3>Moon</h3>
                <p class="card-description">
                    This is a wider card with supporting text below as a natural lead-in to
                    additional content.a
                </p>
                <a class="special-buttom-main" href="./category.php">GO NOW</a>
            </div>
            <div class="col-sm-4 desktop-section">
                <img src="./imgs/icon/stars.png" alt="Star">
                <h3>Star</h3>
                <p class="card-description">
                    This is a wider card with supporting text below as a natural lead-in to
                    additional content.
                </p>
                <a class="special-buttom-main" href="./category.php">GO NOW</a>
            </div>
            <!--Movile-->
            <div class="col mobile-section">
                <h3>Moon</h3>
                <a class="btn-night" href="./category.php">GO NOW</a>
            </div>
            <div class="col mobile-section">
                <h3>Meteor</h3>
                <a class="btn-night" href="./category.php">GO NOW</a>
            </div>
            <div class="col mobile-section">
                <h3>Star</h3>
                <a class="btn-night" href="./category.php">GO NOW</a>
            </div>
        </div>
    </section>
    <footer class="container-fluid container-footer">
        <a class="copyright" href="./index.php">Copyright ©2021 Woodland.com
        </a>
    </footer>
    <!--SCRIPT-->
    <script src="./js/main.js"></script>
</body>

</html>