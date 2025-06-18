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
                <img src="assets/img/logo.png" alt="Logo" height="35">
            </a>

            <!-- Contenedor derecho iconos -->
            <div class="d-flex align-items-center order-lg-3">

                <!-- Íconos lupa para consultas -->
                <ul class="navbar-nav flex-row">
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
                        <a class="nav-link active letra-nav" aria-current="page" href="<?php echo base_url('admin'); ?>">
                            <i class="bi bi-house-door-fill"></i> 
                        </a>
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

                    <li class="nav-item">
                        <a class="nav-link letra-nav position-relative" href="<?= base_url('consultas') ?>">
                            Consultas
                            <?php if (isset($consultasPendientes) && $consultasPendientes > 0): ?>
                                <span class="position-absolute start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem; padding: 2px 5px;">
                                    <?= $consultasPendientes ?>
                                </span>
                            <?php endif; ?>
                        </a>
                    </li>
                </ul>    
                
                <div class="d-block d-md-none ">
                    <hr class="my-2">
                    <a class="nav-link letra-nav " href="<?php echo base_url('logout');?>">Cerrar sesión</a>
                </div>
                        
            </div>        

        </div>
    </nav>
