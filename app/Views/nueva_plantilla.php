<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pequeños Toques </title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="assets/css/estilo.css" rel="stylesheet" > 
  </head>

  <body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- Contenido del menu-->
             
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                 <!-- Menú a la izquierda -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Novedades</a>
                    </li>
                    <!-- Dropdown Categorias -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Indumentaria</a></li>
                            <li><a class="dropdown-item" href="#">Calzado</a></li>
                            <li><a class="dropdown-item" href="#">Blanqueria</a></li>
                            <li><a class="dropdown-item" href="#">Marroquineria</a></li>
                        </ul>
                    </li>
                    <!-- Dropdown Nosotros -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Nosotros</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sobre Nosotros</a></li>
                            <li><a class="dropdown-item" href="#">Contacto</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Preguntas frecuentes</a></li>
                        </ul>
                    </li>
                </ul>

                <a class="navbar-brand position-absolute top-50 start-50 translate-middle" href="#">Pequeños Toques</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Menu derecha -->
                <form class="d-flex ms-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Carrito</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img src="assets/img/carrusel/imagen1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carrusel/imagen2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carrusel/imagen3.jpg" class="d-block w-100" alt="...">
                </div>
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