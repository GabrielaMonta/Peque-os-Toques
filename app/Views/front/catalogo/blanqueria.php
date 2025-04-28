<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<main>
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('catalogo-todo');?>" class="letra-migas">Catalogo</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url('catalogo-blanqueria');?>" class="letra-migas">Blanqueria</a></li>
            </ol>
        </nav>

        <!-- Título -->
        <div class="section-title position-relative mb-2">
            <h2 class="text-uppercase">Blanqueria</h2>
        </div>

        <!-- Ordenar por -->
        <div class="row mb-3">
            <div class="col-12 d-flex justify-content-md-end">
                <div class="d-flex align-items-center">
                    <label for="ordenar" class="me-2 mb-0 titulo-filtro">Ordenar por:</label>
                    <select id="ordenar" class="form-select form-select-sm">
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
                    <select class="form-select cajita-filtro form-select-sm w-auto">
                        <option selected>Todo</option>
                        <option value="1">Ambiente</option>
                        <option value="2">Baño</option>
                        <option value="3">Cocina</option>
                        <option value="4">Dormitorio</option>
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
                        <h2 class="accordion-header" id="headingTamaño">
                            <button class="accordion-button collapsed titulo-acordeon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTamaño" aria-expanded="false" aria-controls="collapseTamaño">
                                Tamaño
                            </button>
                        </h2>
                        <div id="collapseTamaño" class="accordion-collapse collapse" aria-labelledby="headingTamaño" data-bs-parent="#accordionFiltros">
                            <div class="accordion-body">
                                <!-- Opciones-->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="1-plaza">
                                    <label class="form-check-label" for="1-plaza">
                                        1 plaza
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="1/2">
                                    <label class="form-check-label" for="1/2">
                                        1 plaza y media
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="2-plazas">
                                    <label class="form-check-label" for="2-plazas">
                                        2 plazas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="queen">
                                    <label class="form-check-label" for="queen">
                                        Queen
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="king">
                                    <label class="form-check-label" for="king">
                                        King
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
                </div>
            </div>
            
            <!-- Productos -->
            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    <!-- Producto 1 -->
                    <div class="col">
                        <a href="<?php echo base_url('producto');?>" class="card-link">
                            <div class="card producto-card h-100 position-relative">
                                <img src="assets/img/productos/blanqueria1.jpeg" class="card-img-top" alt="Producto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Toalla Manos</h5>
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
                                <img src="assets/img/productos/blanqueria2.jpeg" class="card-img-top" alt="Producto 2">
                                <div class="card-body">
                                    <h5 class="card-title">Toallon</h5>
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