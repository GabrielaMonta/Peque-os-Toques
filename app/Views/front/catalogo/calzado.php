<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<main>
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('catalogo-todo');?>" class="letra-migas">Catalogo</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url('catalogo-calzado');?>" class="letra-migas">Calzado</a></li>
            </ol>
        </nav>

        <!-- Título -->
        <div class="section-title position-relative mb-2">
            <h2 class="text-uppercase">Calzado</h2>
        </div>

        <!-- Ordenar por -->
        <div class="row mb-3">
            <div class="col-12 d-flex justify-content-md-end">
                <div class="d-flex align-items-center">
                    <label for="ordenar" class="me-2 mb-0 titulo-filtro">Ordenar por:</label>
                    <select id="ordenar" class="form-select form-select-sm cajita-ordenar">
                        <option selected>Relevancia</option>
                        <option value="1">A-Z</option>
                        <option value="2">Precio: menor a mayor</option>
                        <option value="3">Precio: mayor a menor</option>
                    </select>
                </div>
            </div>
        </div>
        <script>
            const choices = new Choices('#ordenar', {
                searchEnabled: false,  // si querés desactivar el buscador
                itemSelectText: '',    // saca el texto de "Presiona Enter para seleccionar"
            });
        </script>

        <div class="row">
            <!-- Filtros -->
            <div class="col-md-3 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <h5 class="titulo-filtro mb-0 me-2">Filtrar por:</h5>
                    <select class="form-select cajita-filtro form-select-sm w-100">
                        <option selected>Todo</option>
                        <option value="1">Mujer</option>
                        <option value="2">Hombre</option>
                        <option value="3">Niños</option>
                        <option value="4">Unisex</option>
                    </select>
                </div>
                <script>
                    const choicesFiltrar = new Choices('.cajita-filtro', {
                        searchEnabled: false,  // Desactivar el buscador
                        itemSelectText: '',    // Quitar el texto "Presiona Enter para seleccionar"
                    });
                </script>
                <div class="accordion" id="accordionFiltros">
                    <!-- Filtro de Talle -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTalle">
                            <button class="accordion-button collapsed titulo-acordeon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTalle" aria-expanded="false" aria-controls="collapseTalle">
                                Talle
                            </button>
                        </h2>
                        <div id="collapseTalle" class="accordion-collapse collapse" aria-labelledby="headingTalle" data-bs-parent="#accordionFiltros">
                            <div class="accordion-body">
                                <!-- Opciones-->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talle35">
                                    <label class="form-check-label" for="talle35">
                                        35
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talle36">
                                    <label class="form-check-label" for="talle36">
                                        36
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talle37">
                                    <label class="form-check-label" for="talle37">
                                        37
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talle38">
                                    <label class="form-check-label" for="talle38">
                                        38
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talle39">
                                    <label class="form-check-label" for="talle39">
                                        39
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talle40">
                                    <label class="form-check-label" for="talle40">
                                        40
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talle41">
                                    <label class="form-check-label" for="talle41">
                                        41
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talle42">
                                    <label class="form-check-label" for="talle42">
                                        42
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talle43">
                                    <label class="form-check-label" for="talle43">
                                        43
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Filtro de Color -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingColor">
                            <button class="accordion-button collapsed titulo-acordeon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseColor" aria-expanded="false" aria-controls="collapseColor">
                                Color
                            </button>
                        </h2>
                        <div id="collapseColor" class="accordion-collapse collapse" aria-labelledby="headingColor" data-bs-parent="#accordionFiltros">
                            <div class="accordion-body">
                                <!-- Opciones -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="colorRojo">
                                    <label class="form-check-label" for="colorRojo">
                                        Rojo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="colorAzul">
                                    <label class="form-check-label" for="colorAzul">
                                        Azul
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="colorNegro">
                                    <label class="form-check-label" for="colorNegro">
                                        Negro
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="colorRosa">
                                    <label class="form-check-label" for="colorRosa">
                                        Rosa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="colorBlanco">
                                    <label class="form-check-label" for="colorBlanco">
                                        Blanco
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Filtro de Tipo -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTipo">
                            <button class="accordion-button collapsed titulo-acordeon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTipo" aria-expanded="false" aria-controls="collapseTipo">
                                Tipo
                            </button>
                        </h2>
                        <div id="collapseTipo" class="accordion-collapse collapse" aria-labelledby="headingTipo" data-bs-parent="#accordionFiltros">
                            <div class="accordion-body">
                                <!-- Opciones -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="sandalias">
                                    <label class="form-check-label" for="sandalias">
                                        Sandalias
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="chatitas">
                                    <label class="form-check-label" for="chatitas">
                                        Chatitas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="botas-borcegos">
                                    <label class="form-check-label" for="botas-borcegos">
                                        Botas y borcegos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="zapatillas">
                                    <label class="form-check-label" for="zapatillas">
                                        Zapatillas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="stilettos">
                                    <label class="form-check-label" for="stilettos">
                                        Stilettos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="zapatos">
                                    <label class="form-check-label" for="invierno">
                                        Zapatos
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Productos -->
            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    <!-- Producto 1 -->
                    <div class="col">
                        <a href="<?php echo base_url('producto');?>" class="card-link">
                            <div class="card producto-card h-100 position-relative">
                                <img src="assets/img/productos/zapato1.jpeg" class="card-img-top" alt="Producto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Stilettos Vizzano</h5>
                                    <p class="card-precio">$1234,56</p>
                                    <p class="card-promo"><small>$1234,56 con transferencia</small></p>
                                </div>
                                <button class="btn-carrito">
                                    <i class="bi bi-basket3"></i>
                                </button>
                            </div>
                        </a>
                    </div>
                    <!-- Producto 2 -->
                    <div class="col">
                        <a href="<?php echo base_url('producto');?>" class="card-link">
                            <div class="card h-100 producto-card position-relative">
                                <img src="assets/img/productos/zapato2.jpeg" class="card-img-top" alt="Producto 2">
                                <div class="card-body">
                                    <h5 class="card-title">Zapatos Modare</h5>
                                    <p class="card-precio">$1234,56</p>
                                    <p class="card-promo"><small>$1234,56 con transferencia</small></p>
                                </div>
                                <button class="btn-carrito">
                                    <i class="bi bi-basket3"></i>
                                </button>
                            </div>
                        </a>
                    </div>
                    <!-- Producto 3 -->
                    <div class="col">
                        <a href="<?php echo base_url('producto');?>" class="card-link">
                            <div class="card h-100 producto-card">
                                <img src="assets/img/productos/zapato3.jpeg" class="card-img-top" alt="Producto 3">
                                    <div class="card-body">
                                    <h5 class="card-title">Tacones Modare</h5>
                                    <p class="card-precio">$1234,56</p>
                                    <p class="card-promo"><small>$1234,56 con transferencia</small></p>
                                </div>
                                <button class="btn-carrito">
                                    <i class="bi bi-basket3"></i>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        
            <div class="col-12  mt-4 d-flex justify-content-center">
                <nav aria-label="Page navigation example" class="mi-paginacion">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</main>