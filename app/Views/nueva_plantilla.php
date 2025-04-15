<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pequeños Toques </title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/estilo.css" rel="stylesheet" > 
    <link href="assets/css/letras.css" rel="stylesheet" > 
  </head>

  <body>
    <nav class="navbar navbar-expand-lg py-2">
        <div class="container-fluid">
            <!-- Contenido del menu-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                 <!-- Menú a la izquierda -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active letra-nav" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link letra-nav" href="#">Novedades</a>
                    </li>
                    <!-- Dropdown Categorias -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle letra-nav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Indumentaria</a></li>
                            <li><a class="dropdown-item" href="#">Calzado</a></li>
                            <li><a class="dropdown-item" href="#">Blanqueria</a></li>
                            <li><a class="dropdown-item" href="#">Marroquineria</a></li>
                        </ul>
                    </li>
                    <!-- Dropdown Nosotros -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle letra-nav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #bfc86a">Nosotros</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sobre Nosotros</a></li>
                            <li><a class="dropdown-item" href="#">Contacto</a></li>
                            <!--<li><hr class="dropdown-divider"></li>-->
                            <li><a class="dropdown-item" href="#">Preguntas frecuentes</a></li>
                        </ul>
                    </li>
                </ul>

                <a class="navbar-brand position-absolute top-50 start-50 translate-middle titulo-central" href="#">Pequeños Toques</a>

                <!-- Menu derecha -->
                <form class="d-flex ms-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-successboton boton-buscar letra-nav" type="submit">Buscar</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item ms-1">
                        <a class="nav-link" href="#">
                            <i class="bi bi-person-circle fs-4" style="color: #bfc86a;"></i>
                        </a>
                    </li>
                    <li class="nav-item ms-1">
                        <a class="nav-link" href="#">
                            <i class="bi bi-heart fs-4" style="color: #bfc86a;"></i>
                        </a>
                    </li>
                    <li class="nav-item ms-1">
                        <a class="nav-link" href="#">
                            <i class="bi bi-basket3 fs-4" style="color: #bfc86a;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   
    <section class="w-100">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 0"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="assets/img/carrusel/zapateria.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h5 class="display-4 titulo-categorias">ZAPATERIA</h5>
                    <a href="#" class="btn boton-comprar letra-botones">Comprar</a>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/img/carrusel/indumentaria.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h5 class="display-4 titulo-categorias">INDUMENTARIA</h5>
                    <a href="#" class="btn boton-comprar letra-botones">Comprar</a>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/img/carrusel/marroquineria.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h5 class="display-4 titulo-categorias">MARROQUINERIA</h5>
                    <a href="#" class="btn boton-comprar letra-botones">Comprar</a>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/img/carrusel/blanqueria.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h5 class="display-4 titulo-categorias">BLANQUERIA</h5>
                    <a href="#" class="btn boton-comprar letra-botones">Comprar</a>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
   

    </div>
    
        

    
     <!-- Contenedor para el título y el párrafo -->
    <div> 
      <h1 class="titulo">Pequeños Toques</h1>
      <p class="parrafo"> Somos un emprendimiento dedicado a la venta de indumentaria</p>
    </div>
   
    
    <!-- Pie de página -->
    <footer>© 2025 - Taller de Programación I </footer> 

    <script src="assets/js/bootstrap.bundle.min.js"></script>
  
  </body>

</html>