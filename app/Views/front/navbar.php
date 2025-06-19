<body>
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container-fluid">
                
            <!--Boton hamburguesa-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Título centrado para mostrar en pantallas grandes-->
            <a class="navbar-brand d-none d-lg-block position-absolute top-50 start-50 translate-middle titulo-central" href="<?php echo base_url(' ');?>">Pequeños Toques</a>
            <!-- Logo solo visible en pantallas chicas -->
            <a class="navbar-brand d-block d-lg-none position-absolute top-50 start-50 translate-middle" href="<?php echo base_url(' ');?>">
                <img src="assets/img/logo.png" alt="Logo" height="35">
            </a>

            <!-- Contenedor derecho iconos -->
            <div class="d-flex align-items-center order-lg-3">

                <!-- Íconos lupa para buscador -->
                <ul class="navbar-nav flex-row">
                    <li class="nav-item  mx-2 ms-3">
                        <form class=" form-busqueda" role="search" action="<?= site_url('catalogo-todo'); ?>" method="get">
                            <input type="checkbox" id="toggleBusqueda" class="toggle-busqueda">
                                    
                            <label for ="toggleBusqueda" class="btn lupa-busqueda p-0 ">
                            <a class="nav-link"><i class="bi bi-search fs-4" style="color: #bfc86a;"></i></a>
                            </label>
                                
                            <input class="form-control input-busqueda" type="search" name="buscar" placeholder="Buscar" aria-label="Buscar" value="<?= esc($buscar ?? '') ?>">
                        </form>
                    </li>
                    
                    <!-- Si el usuario aun no esta logueado, o sea no es 2, mostrar el icono -->
                    <?php if (session()->get('perfil_id') != 2): ?>
                    <li class="nav-item ms-3 mx-2">
                        <button type="button" class="nav-link d-none d-md-block btn" data-bs-toggle="modal" data-bs-target="#loginModal" style="background: none; border: none; padding: 0;">
                            <i class="bi bi-person-circle fs-4" style="color: #bfc86a; line-height: 2.1;"></i>
                        </button>
                    </li>
                    <?php endif; ?>

                    <!-- Si esta logueado y es perfil 2, mostrar el icono de opciones  -->
                    <?php if (session()->get('logged_in') && session()->get('perfil_id') == 2): ?>
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link dropdown-toggle d-none d-md-block" href="#" id="dropdownSesion" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background: none; border: none;">
                                <i class="bi bi-person-circle fs-4" style="color: #bfc86a;"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownSesion">
                                <li><a class="dropdown-item" href="<?= base_url('cuenta'); ?>">Cuenta</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('mis-compras'); ?>">Mis compras</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('logout'); ?>">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item ms-3 mx-2">
                        <button type="button" class="nav-link btn btn-primary"  data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
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
                            <li><a class="dropdown-item" href="<?= base_url('catalogo?categoria=1'); ?>">Indumentaria</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('catalogo?categoria=2'); ?>">Calzado</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('catalogo?categoria=3'); ?>">Blanqueria</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('catalogo?categoria=4'); ?>">Marroquineria</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('catalogo'); ?>">Ver todo</a></li>
                        </ul>
                    </li>
                <!-- Dropdown Nosotros -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle letra-nav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #bfc86a">Nosotros</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('sobre-nosotros');?>">Quienes somos</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('comercializacion');?>">Comercializacion</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('contacto');?>">Contacto</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('preguntas-frecuentes');?>">Preguntas frecuentes</a></li>
                        </ul>
                    </li>
                </ul>    
                
                <!-- Si no es cliente, mostrar el icono -->
                <?php if (session()->get('perfil_id') != 2): ?>
                    <div class="d-block d-md-none">
                        <hr class="my-2">
                        <button type="button" class="btn p-0 text-decoration-none d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#loginModal" style="color: #bfc86a;">
                            <i class="bi bi-person-circle fs-4 me-2"></i>
                            <span class="fs-6">Iniciar Sesión</span>
                        </button>
                    </div>
                <?php endif; ?>

                <!-- Si es cliente -->
                <?php if (session()->get('logged_in') && session()->get('perfil_id') == 2): ?> 
                    <li class="nav-item dropdown d-block d-md-none">
                        <hr class="my-2">
                        <a class="nav-link dropdown-toggle letra-nav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #bfc86a;">
                            <i class="bi bi-person-circle fs-4 me-1"></i> Usuario
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('cuenta'); ?>">Cuenta</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('mis-compras'); ?>">Mis compras</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('logout'); ?>">Cerrar sesión</a></li>
                        </ul>
                    </li>
                <?php endif; ?>


               
                        
            </div>        

        </div>
    </nav>
     <!-- Offcanvas carrito -->
    <div class="offcanvas offcanvas-end"  data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title canvas-titulo" id="staticBackdropLabel">Carrito</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <div class="offcanvas-body ">
            <?php $cart = \Config\Services::cart(); ?>
            <?php if (!empty($cart->contents())): ?>
                <?php foreach ($cart->contents() as $item): ?>
                    <div class= "card container-card row g-0">
                        <div class="foto-producto col-4 d-flex align-items-center">
                            <img src="<?= base_url($item['options']['img']) ?>" style="width: 200px; height: 100px;" class="img-fluid rounded-start" alt="Imagen">
                        </div>
                        <div class="card-body  col-5">
                            <h5 class="card-title"><?= esc(ucfirst ($item['name'])) ?></h5>
                            <div class="card-text p-0">Color: <?= esc(ucfirst ($item['options']['color'])) ?></div>
                            <div class="card-text p-0">Talle: <?= esc(ucfirst ($item['options']['nota'])) ?></div>
                            <div class="card-text p-0">$ <?= number_format($item['price'], 2, ',', '.') ?></div>
                        </div>
                        <div class="col-1 d-flex align-items-start justify-content-center pt-2">
                            <form method="post" action="<?= base_url('carrito-eliminar') ?>" >
                                <input type="hidden" name="rowid" value="<?= esc($item['rowid']) ?>">
                                <button type="submit" class="btn-trash">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form> 
                         </div>           
                    </div>   
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center">El carrito está vacío.</p>
            <?php endif; ?>
        </div>


        <div class="d-flex justify-content-between p-3">
                <strong class="letra-total" >Subotal</strong>
                <strong class="letra-total">$<?= number_format($cart->total(), 2, ',', '.') ?></strong>
        </div>
        <div class="pie-carrito">
                    
            <a href="<?php echo base_url('verCarrito');?>" class="btn boton-ver-carrito">Ver carrito</a>
            <a href="<?php echo base_url('catalogo');?>" class="btn boton-seguir-comprando">Seguir comprando</a>
            <img src="<?= base_url('assets/img/logo.png') ?>" class="img-fluid rounded-start mb-2" alt="Imagen" style="width: 50px; height: 50px;">
        
        </div>
    </div>
   