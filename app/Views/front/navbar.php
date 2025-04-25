<body>
    <nav class="navbar fixed-top navbar-expand-lg">
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

                <!-- Contenedor derecho iconos -->
                <div class="d-flex align-items-center order-lg-3">

                    <!-- Íconos lupa para buscador -->
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item  ms-3">
                            <form class=" form-busqueda" role="search">
                                <input type="checkbox" id="toggleBusqueda" class="toggle-busqueda">
                                
                                <label for ="toggleBusqueda" class="btn lupa-busqueda p-0">
                                <a class="nav-link"><i class="bi bi-search fs-4" style="color: #bfc86a;"></i></a>
                                </label>
                               
                                <input class="form-control input-busqueda" type="search" placeholder="Buscar" aria-label="Buscar">
                            </form>
                        </li>

                        <li class="nav-item ms-3">
                            <button type="button" class="nav-link d-none d-md-block btn" data-bs-toggle="modal" data-bs-target="#loginModal" style="background: none; border: none; padding: 0;">
                                <i class="bi bi-person-circle fs-4" style="color: #bfc86a; line-height: 2.1;"></i>
                            </button>
                        </li>
                        
                        <li class="nav-item ms-3">
                            <a class="nav-link d-none d-md-block " href="#"><i class="bi bi-heart fs-4" style="color: #bfc86a;"></i></a>
                        </li>

                        <li class="nav-item ms-3">
                            <button type="button" class="nav-link btn btn-primary"  data-bs-toggle="offcanvas" data-bs-target="#carritoOffcanvas">
                                <i class="bi bi-basket3 fs-4" style="color: #bfc86a;"></i></button>
                        </li>
                    </ul>
                </div>
                <!-- Contenido del menu-->
                <div class="collapse navbar-collapse order-lg-1" id="navbarSupportedContent">

                    <!-- Menú a la izquierda -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active letra-nav" aria-current="page" href="<?php echo base_url(' ');?>">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link letra-nav" href="<?php echo base_url('novedades');?>">Novedades</a>
                        </li>
                        <!-- Dropdown Categorias -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle letra-nav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url('catalogo-indumentaria');?>">Indumentaria</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('catalogo-calzado');?>">Calzado</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('catalogo-blanqueria');?>">Blanqueria</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('catalogo-marroquineria');?>">Marroquineria</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('catalogo-todo');?>">Ver todo</a></li>
                            </ul>
                        </li>
                        <!-- Dropdown Nosotros -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle letra-nav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #bfc86a">Nosotros</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url('sobre-nosotros');?>">Quienes somos</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('comercializacion');?>">Comercializacion</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('contacto');?>">Contacto</a></li>
                                <!--<li><hr class="dropdown-divider"></li>-->
                                <li><a class="dropdown-item" href="<?php echo base_url('preguntas-frecuentes');?>">Preguntas frecuentes</a></li>
                            </ul>
                        </li>
                    </ul>    
             
                    <div class="d-block d-md-none">
                    <button type="button" class="btn p-0 text-decoration-none d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#loginModal" style="color: #bfc86a;">
                        <i class="bi bi-person-circle fs-4 me-2"></i>
                        <span class="fs-6">Iniciar Sesión</span>
                    </button>
                    </div>
                    
                    <div class="d-block d-md-none">
                     <a href="#"><i class="bi bi-heart fs-4 me-3" style="color: #bfc86a;"></i>Favoritos</a>
                    </div>
                    
                </div>        

            </div>
        </nav>