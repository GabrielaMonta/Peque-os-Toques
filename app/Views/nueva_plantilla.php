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
    <link rel="icon" type="image/x-icon" href="assets\img\Pequeños-toques.ico">

  </head>

  <body>
    <nav class="navbar fixed-top navbar-expand-lg ps-2">
        <div class="container-fluid">
            
            <!--Boton hamburguesa-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Título centrado para mostrar en pantallas grandes-->
            <a class="navbar-brand d-none d-lg-block position-absolute top-50 start-50 translate-middle titulo-central" href="#">Pequeños Toques</a>
            <!-- Logo solo visible en pantallas chicas -->
            <a class="navbar-brand d-block d-lg-none position-absolute top-50 start-50 translate-middle" href="#">
                <img src="assets\img\Pequeños toques logo.png" alt="Logo" height="40">
            </a>

            <!-- Contenedor derecho, buscador e icoonos -->
            <div class="d-flex align-items-center order-lg-3 ms-auto">
            
                <!-- Buscador -->
                <form class="d-flex align-items-center form-busqueda position-relative me-2" role="search">
                    <input type="checkbox" id="toggleBusqueda" class="toggle-busqueda">
            
                    <!-- Lupa (solo visible en responsive) -->
                    <label for="toggleBusqueda" class="btn lupa-busqueda p-0 d-lg-none">
                        <a class="lupa" href="#"><i class=" bi bi-search fs-4" style="color: #bfc86a;"></i></a>
                    </label>

                    <!-- Input visible en pantallas grandes -->
                    <input class="form-control input-busqueda d-none d-lg-block" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-successboton boton-buscar letra-nav d-none d-lg-block" type="submit">Buscar</button>
                </form>


            <!-- Íconos -->
            <ul class="navbar-nav flex-row">
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#"><i class="bi bi-person-circle fs-4" style="color: #bfc86a;"></i></a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#"><i class="bi bi-heart fs-4" style="color: #bfc86a;"></i></a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#"><i class="bi bi-basket3 fs-4" style="color: #bfc86a;"></i></a>
                </li>
            </ul>
        </div>
            <!-- Contenido del menu-->
            <div class="collapse navbar-collapse order-lg-1" id="navbarSupportedContent">

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
                            <li><a class="dropdown-item" href="#">Quienes somos</a></li>
                            <li><a class="dropdown-item" href="#">Contacto</a></li>
                            <li><a class="dropdown-item" href="#">Comercialización</a></li>
                            <!--<li><hr class="dropdown-divider"></li>-->
                            <li><a class="dropdown-item" href="#">Preguntas frecuentes</a></li>
                        </ul>
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
      <p class="text-center text-uppercase fw-bold fst-italic">Somos un emprendimiento dedicado a la venta de indumentaria</p>
    </div>
   
    
    <!-- Pie de página -->
    <footer class="mt-5" style="background-color: #bfc86a;">
        <div class="container-p1">
                <div class="row">
                    <!-- Newsletter -->
                    <div class="col-12 col-md-5 mb-3 ">
                        <h6 class = "footer-news ms-4 ">Newsletter</h6>
                        <p class="letra-footer ms-4 me-4">Suscribete a nuestro newsletter.<br> Recibe novedades, descuentos y lanzamientos exclusivos.</p>
                        <form class="form-suscription ms-4 me-5">
                            <input type="email" class="input-email" placeholder="Su e-mail" required>
                            <button type="submit" class="boton-ok">Suscribirme</button>
                        </form>
                    </div>
                    
                    <div class="col-12 col-md-3 mb-3 "> </div>
                    <!-- Horarios -->
                    <div class="col-12 col-md-4 mb-3">
                        <h6 class = "footer-hora ms-4 me-4">Horarios de atención</h6>
                        <p class="letra-footer ms-4 me-4">Lunes a viernes de 17 a 21hs.<br>Sábados y domingos de 9 a 21hs.</p>
                    </div>
                </div>
            
            <!-- Redes sociales centradas -->
            <div class="text-center pt-1">
                <a href="#" class="text-dark me-3"><i class="bi bi-whatsapp fs-4"style="color: #9da53a;"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-facebook fs-4"style="color: #9da53a;"></i></a>
                <a href="#" class="text-dark "><i class="bi bi-instagram fs-4"style="color: #9da53a;"></i></a>
            </div>

            <h4 class="footer-consulta ms-0 ">¿Tiene alguna otra duda o sugerencia? <span class="resaltado"> Contactenos </span></h4> 
        
        </div>
        <div class= "container-p2">
            <p class="creditos">Copyright © 2025 |<b> Desarrolladoras Web:</b> Isasi Vitale Bianca Ailín - Montanaro Gabriela Antonella </p>
        </div>
    </footer>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
  
  </body>

</html>