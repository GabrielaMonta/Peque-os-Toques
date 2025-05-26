<body>
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container-fluid">
                
            <!--Boton hamburguesa-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Título centrado para mostrar en pantallas grandes-->
            <a class="navbar-brand d-none d-lg-block position-absolute top-50 start-50 translate-middle titulo-central" href="<?php echo base_url('admin');?>">Pequeños Toques</a>
            <!-- Logo solo visible en pantallas chicas -->
            <a class="navbar-brand d-block d-lg-none position-absolute top-50 start-50 translate-middle" href="<?php echo base_url('admin');?>">
                <img src="assets\img\Pequeños toques logo.png" alt="Logo" height="40">
            </a>

            <!-- Contenedor derecho iconos -->
            <div class="d-flex align-items-center order-lg-3">

                <!-- Íconos lupa para consultas -->
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

                    <li class="nav-item ms-3 mt-2">
                        <a class="nav-link letra-nav d-none d-md-block" href="<?php echo base_url('logout');?>">Cerrar sesion</a>
                    </li>
                            
                    
                    
                </ul>
            </div>
            
            <!-- Contenido del menu-->
            <div class="collapse navbar-collapse order-lg-1" id="navbarSupportedContent">

                <!-- Menú a la izquierda -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active letra-nav" aria-current="page" href="<?php echo base_url('admin');?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link letra-nav" href="<?php echo base_url('crud-usuarios');?>">CRUD Usuarios</a>
                    </li>
                    
                    <li class="nav-item ">
                        <a class="nav-link letra-nav" href="<?php echo base_url('crud-productos');?>">CRUD Productos</a>
                    </li>
                
                    <li class="nav-item ">
                        <a class="nav-link letra-nav" href="<?php echo base_url('ventas');?>">Ventas</a>
                    </li>
                </ul>    
                
                <div class="d-block d-md-none ">
                    <a class="nav-link letra-nav " href="<?php echo base_url('logout');?>">Cerrar sesión</a>

                </div>
                        
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
            <div class= "card container-card row g-0">
                <div class="foto-producto col-4 d-flex align-items-center">
                    <img src="assets/img/productos/zapato1.jpeg" style="width: 200px; height: 100px;" class="img-fluid rounded-start" alt="Imagen">
                </div>
                <div class="card-body  col-5">
                    <h5 class="card-title">Stiletto Vizzano</h5>
                    <p class="card-text">$1234,56</p>
                </div>
                <button class="col-1 btn btn-danger d-flex align-items-center justify-content-center" onclick="eliminarProducto(this)">X</button>
            </div>   
            <div class= "card container-card row g-0">
                <div class="foto-producto col-4 d-flex align-items-center">
                    <img src="assets/img/productos/indu1.jpeg" style="width: 200px; height: 100px;" class="img-fluid rounded-start" alt="Imagen">
                </div>
                <div class="card-body  col-5">
                    <h5 class="card-title">Blazer</h5>
                    <p class="card-text">$1234,56</p>
                </div>
                <button class="col-1 btn btn-danger d-flex align-items-center justify-content-center" onclick="eliminarProducto(this)">X</button>
            </div>  
        </div>

        <div class="d-flex justify-content-between p-3">
                <strong class="letra-total" >Subotal</strong>
                <strong class="letra-total" >$1234,56</strong>
        </div>
        <div class="pie-carrito">
                    
            <a href="<?php echo base_url('carrito');?>" class="btn boton-ver-carrito">Ver carrito</a>
            <a href="<?php echo base_url('catalogo-todo');?>" class="btn boton-seguir-comprando">Seguir comprando</a>
            <img src="assets/img/logo.png" class="img-fluid rounded-start mb-2" alt="Imagen" style="width: 50px; height: 50px;">
        
        </div>
    </div>
    <!-- Offcanvas favoritos -->
    <div class="offcanvas offcanvas-end"  data-bs-backdrop="static" tabindex="-1" id="favoritosBackdrop" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title canvas-titulo" id="staticBackdropLabel">Favoritos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <div class="offcanvas-body ">
            <div class= "card container-card row g-0">
                <div class="foto-producto col-4 d-flex align-items-center">
                    <img src="assets/img/productos/marro2.jpeg" style="width: 200px; height: 100px;" class="img-fluid rounded-start" alt="Imagen">
                </div>
                <div class="card-body  col-5">
                    <h5 class="card-title">Billetera</h5>
                    <p class="card-text">$1234,56</p>

                    <div class="d-flex justify-content-end">
                        <button class="boton-fav bi bi-heart d-flex align-items-center " onclick="eliminarProducto(this)"></button>
                        <button class="boton-fav bi bi-basket d-flex  ms-1" onclick="agregarAlCarrito(this)"></button>
                    </div>
                </div>
                
            </div>   
        </div>

        <div class="pie-carrito">
            <img src="assets/img/logo.png" class="img-fluid rounded-start mb-2" alt="Imagen" style="width: 50px; height: 50px;">
        
        </div>
    </div>