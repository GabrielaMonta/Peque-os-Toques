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
      

     <!-- Contenedor para el título y el párrafo 
    <div> 
      <h1 class="titulo">Pequeños Toques</h1>
      <p class="text-center text-uppercase fw-bold fst-italic">Somos un emprendimiento dedicado a la venta de indumentaria</p>
    </div>-->

    <div class="container mt-5">
    <div class="row g-4">
    
            <!-- Card 1: Indumentaria -->
            <div class="col-md-6">
                <a href="<?php echo base_url('novedades');?>" class="text-decoration-none"> 
                    <div class="categoria-card imagen-derecha">
                        <img src="assets/img/indumentaria.png" class="categoria-imagen" alt="Indumentaria">
                        <div class="categoria-texto categoria-texto-derecha">INDUMENTARIA</div>
                    </div>
                </a>
            </div>

            <!-- Card 2: Calzado -->
            <div class="col-md-6">
                <a href="<?php echo base_url('novedades');?>" class="text-decoration-none"> 
                    <div class="categoria-card">
                        <img src="assets/img/calzado.png" class="categoria-imagen" alt="Calzado">
                        <div class="categoria-texto">CALZADO</div>
                    </div>
                </a>
            </div>

            <!-- Card 3: Blanquería -->
            <div class="col-md-6">
                <a href="<?php echo base_url('novedades');?>" class="text-decoration-none color: inherit;"> 
                    <div class="categoria-card imagen-derecha" >
                        <img src="assets/img/blanqueria.png" class="categoria-imagen" alt="Blanqueria">
                        <div class="categoria-texto categoria-texto-derecha">BLANQUERIA</div>
                    </div>
                </a>
            </div>

            <!-- Card 4: Marroquinería la imagen cambia, le pongo la por defecto de boostrsap-->
            <div class="col-md-6">
                <a href="<?php echo base_url('novedades');?>" class="text-decoration-none"> 
                    <div class="categoria-card">
                        <img src="assets/img/marroquineria.png" class="categoria-imagen" alt="Marroquineria">
                        <div class="categoria-texto">MARROQUINERIA</div>
                    </div>
                 </a>
            </div>
        </div>
    </div>
   

  