<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Woodland-Event</title>
</head>

<body>
    <header class="container-fluid">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!--CAROUSEL-->
                <div class="carousel-item active"><img src="./imgs/header-1.png" class="d-block w-100 img-header-filter container-img-header"
                        alt="nature"> </div>
                <div class="carousel-item"><img src="./imgs/header-2.png" class="d-block w-100 img-header-filter container-img-header"
                        alt="nature">
                </div>
                <div class="carousel-item"><img src="./imgs/header-3.jpg" class="d-block w-100 img-header-filter container-img-header"
                        alt="nature">
                </div>
                <!--NAV-->
                <nav class="navbar navbar-expand-lg navbar-light nav-container">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="./category.php">
                            <img src="./imgs/icon/logo-white.png" class="logo" alt="">
                        </a>
                        <button class="navbar-toggler menu-mobile" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars menu-mobile "></span>
                        </button>
                        <div class="collapse  navbar-collapse" id="navbarSupportedContent">
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
                                        href=".//category.php">Hikes</a>
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
            </div>
        </div>
        </div>
    </header>
    <!--SPECIFIC SECTION-->
    <section class="specific-event-section">
        <div class="row">
            <!--CARD IMG-->
            <div class="col-sm-6">
                <div class="card card-event">
                    <div class="card card-event">
                        <div class="card-body">
                            <p class="card-title-event">Title</p>
                        </div>
                        <img src="./imgs/default.jpg" class="card-img-bottom" alt="Monteverde">
                    </div>
                </div>
            </div>
            <!--CONTAINER DETAILS-->
            <div class="col-sm-6">
                <ul class="nav nav-pills header-nav-event mb-3 " id="pills-tab" role="tablist">
                    <li class="nav-item card-item-specific" role="presentation">
                        <button class="nav-link card-nav-link  active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Details</button>
                    </li>
                    <li class="nav-item card-item-specific" role="presentation">
                        <button class="nav-link card-nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Description</button>
                    </li>
                    <li class="nav-item card-item-specific" role="presentation">
                        <button class="nav-link card-nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Galery</button>
                    </li>
                </ul>
                <!--DESCRIPTION-->
                <div class="tab-content container-description-specific" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div>
                            <p class="item-specific">Place:</p>
                            <p class="item-specific">Date:</p>
                            <p class="item-specific">Time:</p>
                            <p class="item-specific">Cost:</p>
                            <p class="item-specific">Open to:</p>
                        </div>
                        <div class="container-category-specific">
                            <a class="category-specific" href="#">#category</a>
                            <a class="category-specific" href="#">#category</a>
                            <a class="category-specific" href="#">#category</a>
                            <a class="category-specific" href="#">#category</a>
                            <a class="category-specific" href="#">#category</a>
                        </div>
                    </div>
                    <div class="tab-pane fade  container-description-specific" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <p class="item-specific">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident
                            amet quibusdam et
                            aliquam, est hic
                            quisquam, odio blanditiis voluptatum unde veniam. Perferendis corporis sit facilis
                            consequuntur beatae
                            doloribus. Veritatis, voluptates.</p>
                    </div>
                    <!--GALERY-->
                    <div class="tab-pane fade container-description-specific" id="pills-contact" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                        <div class="grid-wrapper-event">
                            <div>
                                <img class="pics" src="./imgs/default.jpg" alt="default img" />
                            </div>
                            <div>
                                <img class="pics" src="./imgs/default.jpg" alt="default img" />
                            </div>
                            <div>
                                <img class="pics" src="./imgs/default.jpg" alt="default img" />
                            </div>
                            <div>
                                <img class="pics" src="./imgs/default.jpg" alt="default img" />
                            </div>
                            <div>
                                <img class="pics" src="./imgs/default.jpg" alt="default img" />
                            </div>
                            <div>
                                <img class="pics" src="./imgs/default.jpg" alt="default img" />
                            </div>
                            <div>
                                <img class="pics" src="./imgs/default.jpg" alt="default img" />
                            </div>
                            <div>
                                <img class="pics" src="./imgs/default.jpg" alt="default img" />
                            </div>
                            <div>
                                <img class="pics" src="./imgs/default.jpg" alt="default img" />
                            </div>
                            <div>
                                <img class="pics" src="./imgs/default.jpg" alt="default img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-btn-register">
                    <a class="btn event-btn" data-bs-toggle="modal" href="#modal1" role="button">REGISTER</a>
                </div>
            </div>
    </section>
    <!--------REGISTER MODAL-------->
    <!-----------1ST MODAL----------->
    <div class="modal fade" id="modal1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content container-register">
                <div class="header-modal">
                    <img class="white-logo" src="./imgs/icon/logo-white.png" alt="logo-white">
                    <button type="button" class="fas fa-times mob-close-modal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <p class="item-specific">Spaces Available:</p>
                        <p class="item-specific">Cost:</p>
                        <p class="item-specific">Public:</p>
                        <div class="input-group">
                            <span class="input-group-text input-total-specific">Total</span>
                            <span class="input-group-text input-total-specific">0.00</span>
                        </div>
                    </div>
                </div>
                <div class="footer-modal-event">
                    <div class="input-group container-input-specific">
                        <span class="input-group-text input-total-specific">Kids</span>
                        <input type="text" class="form-control" aria-label="Quantity">
                    </div>
                    <div class="input-group container-input-specific">
                        <span class="input-group-text input-total-specific">Adults</span>
                        <input type="text" class="form-control" aria-label="Quantity">
                    </div>
                    <button class="btn btn-primary btn-register-model" data-bs-target="#modal2" data-bs-toggle="modal"
                        data-bs-dismiss="modal">NEXT</button>
                </div>
            </div>
        </div>
    </div>
    <!--------2ND MODAL---------->
    <div class="modal fade" id="modal2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content container-register">
                <div class="header-modal">
                    <img class="white-logo" src="./imgs/icon/logo-white.png" alt="logo-white">
                    <button type="button" class="fas fa-times mob-close-modal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body container-input-specific">
                    <div class="input-group">
                        <span class="input-group-text input-total-specific">Name</span>
                        <input type="text" aria-label="First name" class="form-control">
                        <span class="input-group-text input-total-specific">Last name</span>
                        <input type="text" aria-label="Last name" class="form-control">
                    </div>
                    <div class="input-group container-input-specific">
                        <span class="input-group-text input-total-specific">Gmail</span>
                        <input type="text" class="form-control" aria-label="gmail">
                    </div>
                </div>
                <div class="footer-modal-event">
                    <button class="btn btn-primary btn-register-model" data-bs-target="#modal3" data-bs-toggle="modal"
                        data-bs-dismiss="modal">NEXT</button>
                </div>
            </div>
        </div>
    </div>
    <!--------3RD MODAL----------->
    <div class="modal fade" id="modal3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content container-register">
                <div class="header-modal">
                    <img class="white-logo" src="./imgs/icon/logo-white.png" alt="logo-white">
                    <button type="button" class="fas fa-times mob-close-modal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body card-description">
                    <p>Name and last name of the client, number of the transaction and datails facture.</p>
                    <p>Your registration have been complete properly</p>
                </div>
                <div class="footer-modal-event">
                    <button type="button" class="btn btn-secondary btn-register-model"
                        data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!--RELATED EVENTS-->
    <section class="related-section">
        <h2>Related Event</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <!--CAROUSEL-->
            <div class="carousel-inner">
                <!--1ST CARDS-->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card card-explore">
                                    <a class="event-related-link" href="./event.php">
                                        <img src="./imgs/explore-1.jpg" class="card-img img-related-event"
                                            alt="Volcanoe">
                                        <div class="card-img-overlay">
                                            <h3 class="desktop-section">Volcanoe Poás</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-explore">
                                    <a class="event-related-link" href="./event.php">
                                        <img src="./imgs/explore-1.jpg" class="card-img img-related-event"
                                            alt="Volcanoe">
                                        <div class="card-img-overlay">
                                            <h3 class="desktop-section">Volcanoe Poás</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-explore">
                                    <a class="event-related-link" href="./event.php">
                                        <img src="./imgs/explore-1.jpg" class="card-img img-related-event"
                                            alt="Volcanoe">
                                        <div class="card-img-overlay">
                                            <h3 class="desktop-section">Volcanoe Poás</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2ND CARD-->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card card-explore">
                                    <a class="event-related-link" href="./event.php">
                                        <img src="./imgs/explore-1.jpg" class="card-img img-related-event"
                                            alt="Volcanoe">
                                        <div class="card-img-overlay">
                                            <h3 class="desktop-section">Volcanoe Poás</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-explore">
                                    <a class="event-related-link" href="./event.php">
                                        <img src="./imgs/explore-2.jpg" class="card-img img-related-event"
                                            alt="Waterfall">
                                        <div class="card-img-overlay">
                                            <h3 class="desktop-section">Waterfall</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-explore">
                                    <a class="event-related-link" href="./event.php">
                                        <img src="./imgs/explore-1.jpg" class="card-img img-related-event"
                                            alt="Volcanoe">
                                        <div class="card-img-overlay">
                                            <h3 class="desktop-section">Volcanoe Poás</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3RD CARD -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card card-explore">
                                    <a class="event-related-link" href="./event.php">
                                        <img src="./imgs/explore-1.jpg" class="card-img img-related-event"
                                            alt="Volcanoe">
                                        <div class="card-img-overlay">
                                            <h3 class="desktop-section">Volcanoe Poás</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-explore">
                                    <a class="event-related-link" href="./event.php">
                                        <img src="./imgs/explore-2.jpg" class="card-img img-related-event"
                                            alt="Waterfall">
                                        <div class="card-img-overlay">
                                            <h3 class="desktop-section">Waterfall</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-explore">
                                    <a class="event-related-link" href="./event.php">
                                        <img src="./imgs/explore-1.jpg" class="card-img img-related-event"
                                            alt="Volcanoe">
                                        <div class="card-img-overlay">
                                            <h3 class="desktop-section">Volcanoe Poás</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--PREV AND NEXT BUTTONS-->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!--FOOTER-->
    <footer class="container-fluid container-footer-related">
        <a class="copyright" href="#">Copyright ©2021 Woodland.com
        </a>
    </footer>
        <!--SCRIPT-->
        <script src="./js/main.js"></script>
</body>