<main>
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="letra-migas">Catalogo</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#" class="letra-migas">Indumentaria</a></li>
            </ol>
        </nav>

        <!-- Título -->
        <div class="section-title position-relative mb-2">
            <h2 class="text-uppercase">Indumentaria</h2>
        </div>

        <!-- Ordenar por -->
        <div class="row mb-3">
            <div class="col-12 d-flex justify-content-md-end">
                <div class="d-flex align-items-center">
                    <label for="ordenar" class="me-2 mb-0 titulo-filtro">Ordenar por:</label>
                    <select id="ordenar" class="form-select form-select-sm w-auto ">
                        <option selected>Relevancia</option>
                        <option value="1">A-Z</option>
                        <option value="2">Precio: menor a mayor</option>
                        <option value="3">Precio: mayor a menor</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Filtros -->
            <div class="col-md-3 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <h5 class="titulo-filtro mb-0 me-2">Filtrar por:</h5>
                    <select class="form-select cajita-filtro form-select-sm w-auto">
                        <option selected>Todo</option>
                        <option value="1">Mujer</option>
                        <option value="2">Hombre</option>
                        <option value="3">Niños</option>
                        <option value="4">Unisex</option>
                    </select>
                </div>
               
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
                                <!-- Opciones Talle-->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talleS">
                                    <label class="form-check-label" for="talle35">
                                        S
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talleM">
                                    <label class="form-check-label" for="talleM">
                                        M
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talleL">
                                    <label class="form-check-label" for="talleL">
                                        L
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talleXL">
                                    <label class="form-check-label" for="talleXL">
                                        XL
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talleXXL">
                                    <label class="form-check-label" for="talleXXL">
                                        XXL
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="talleXXXL">
                                    <label class="form-check-label" for="talleXXXL">
                                        XXXL
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
                                    <input class="form-check-input" type="checkbox" value="" id="remeras">
                                    <label class="form-check-label" for="remeras">
                                        Remeras
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="pantalones">
                                    <label class="form-check-label" for="pantalones">
                                        Pantalones
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="camisas">
                                    <label class="form-check-label" for="camisas">
                                        Camisas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="ropa-interior">
                                    <label class="form-check-label" for="ropa-interior">
                                        Ropa Interior
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="shorts-berm">
                                    <label class="form-check-label" for="shorts-berm">
                                        Shorts y bermudas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="vestidos">
                                    <label class="form-check-label" for="vestidos">
                                        Vestidos
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
                        <a href="#" class="card-link">
                            <div class="card producto-card h-100 position-relative">
                                <img src="assets/img/productos/indu1.jpeg" class="card-img-top" alt="Producto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Blazer</h5>
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
                        <a href="#" class="card-link">
                            <div class="card h-100 producto-card position-relative">
                                <img src="assets/img/productos/indu2.jpeg" class="card-img-top" alt="Producto 2">
                                <div class="card-body">
                                    <h5 class="card-title">Short Sastrero</h5>
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
                        <a href="#" class="card-link">
                            <div class="card h-100 producto-card">
                                <img src="assets/img/productos/indu3.jpeg" class="card-img-top" alt="Producto 3">
                                    <div class="card-body">
                                    <h5 class="card-title">Vestido</h5>
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