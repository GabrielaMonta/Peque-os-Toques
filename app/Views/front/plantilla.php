<link href="assets/css/novedades.css" rel="stylesheet" > 
<main>

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
                    <a href="<?= base_url('catalogo?categoria=2'); ?>" class="btn boton-comprar letra-botones">Comprar</a>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/img/carrusel/indumentaria.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h5 class="display-4 titulo-categorias">INDUMENTARIA</h5>
                    <a href="<?= base_url('catalogo?categoria=1'); ?>"class="btn boton-comprar letra-botones">Comprar</a>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/img/carrusel/marroquineria.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h5 class="display-4 titulo-categorias">MARROQUINERIA</h5>
                    <a href="<?= base_url('catalogo?categoria=4'); ?>"class="btn boton-comprar letra-botones">Comprar</a>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/img/carrusel/blanqueria.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h5 class="display-4 titulo-categorias">BLANQUERIA</h5>
                    <a href="<?= base_url('catalogo?categoria=3'); ?>"class="btn boton-comprar letra-botones">Comprar</a>
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
      

    <div class="container-fluid mt-5 mb-5 ingresos">
        <h2>¡Descubrí nuestras últimas novedades!</h2>
        <p>Productos exclusivos, promociones especiales y mucho más. ¡No te lo pierdas!</p>
        <a href="<?php echo base_url('novedades');?>" class="btn-novedades">Ver más</a>
    </div>


    <div class="container mt-5 mb-5">
    <div class="row g-4">
    
            <!-- Card 1: Indumentaria -->
            <div class="col-md-6">
                <a href="<?= base_url('catalogo?categoria=1'); ?>" class="text-decoration-none"> 
                    <div class="categoria-card imagen-derecha">
                        <img src="assets/img/indumentaria.png" class="categoria-imagen" alt="Indumentaria">
                        <div class="categoria-texto categoria-texto-derecha">INDUMENTARIA</div>
                    </div>
                </a>
            </div>

            <!-- Card 2: Calzado -->
            <div class="col-md-6">
                <a href="<?= base_url('catalogo?categoria=2'); ?>" class="text-decoration-none"> 
                    <div class="categoria-card">
                        <img src="assets/img/calzado.png" class="categoria-imagen" alt="Calzado">
                        <div class="categoria-texto">CALZADO</div>
                    </div>
                </a>
            </div>

            <!-- Card 3: Blanquería -->
            <div class="col-md-6">
                <a href="<?= base_url('catalogo?categoria=3'); ?>" class="text-decoration-none"> 
                    <div class="categoria-card imagen-derecha" >
                        <img src="assets/img/blanqueria.png" class="categoria-imagen" alt="Blanqueria">
                        <div class="categoria-texto categoria-texto-derecha">BLANQUERIA</div>
                    </div>
                </a>
            </div>

            <!-- Card 4: Marroquinería la imagen cambia, le pongo la por defecto de boostrsap-->
            <div class="col-md-6">
                <a href="<?= base_url('catalogo?categoria=4'); ?>" class="text-decoration-none"> 
                    <div class="categoria-card">
                        <img src="assets/img/marroquineria.png" class="categoria-imagen" alt="Marroquineria">
                        <div class="categoria-texto">MARROQUINERIA</div>
                    </div>
                 </a>
            </div>
        </div>
    </div>
   
    <div class= "container-fluid mt-5 mb-5 eslogan">
        <h2 class="titulo-central">Pequeños Toques</h2>
        <p class="letra-eslogan">Estilo, comodidad y variedad en todos los talles, para damas, caballeros, jóvenes y niños</p>
        <a href="<?= base_url('catalogo'); ?>" class="btn boton-comprar letra-botones">Comprar</a>
    </div>

    <div class="container-fluid mt-5 mb-5 d-flex justify-content-center flex-wrap gap-5">
        <div class="card text-center extra-card">
            <i class="bi bi-truck iconos-extra mb-0"></i>
            <div class="card-body pt-0">
                <p class="card-text mb-0">Envíos a todo el país</p>
            </div>
        </div>

        <div class="card text-center extra-card">
            <i class="bi bi-credit-card iconos-extra mb-0"></i>
            <div class="card-body pt-0">
                <p class="card-text mb-0">Todos los medios de pago</p>
            </div>
        </div>
    </div>
</main>