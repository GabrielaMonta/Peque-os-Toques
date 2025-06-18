<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
<main>
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('catalogo');?>" class="letra-migas">Catálogo</a></li>
                <?php if (isset($categoria_nombre) && $categoria_nombre != 'Desconocida'): ?>
                    <li class="breadcrumb-item active" aria-current="page"><?= esc(ucfirst($categoria_nombre)); ?></li>
                <?php else: ?>
                    <li class="breadcrumb-item active" aria-current="page">Todo</li>
                <?php endif; ?>
            </ol>
        </nav>
   

        <div class="section-title position-relative mb-2">
            <h2 class="text-uppercase">
                <?php if (isset($categoria_nombre) && $categoria_nombre != 'Desconocida'): ?>
                <?= esc($categoria_nombre); ?>
                <?php else: ?>
                    Productos
                <?php endif; ?>
            </h2>
        </div>

        <div class="row mb-3">
            <div class="col-12 d-flex justify-content-md-end">
                <?php $form_action = site_url('catalogo'); ?>
                <form method="get" id="form-filtros" action="<?= $form_action ?>" class="d-flex align-items-center gap-2" >
                    <?php if ($categoria_id): ?>
                        <input type="hidden" name="categoria" value="<?= esc($categoria_id) ?>">
                    <?php endif; ?>
                    <label for="ordenar" class="mb-0 me-2">Ordenar por:</label>
                    <select name="ordenar" id="ordenar" class="form-select" onchange="document.getElementById('form-filtros').submit();">
                        <option value="">-- Seleccionar --</option>
                        <option value="az" <?= ($ordenar_por ?? '') === 'az' ? 'selected' : '' ?>>A-Z</option>
                        <option value="precio_menor_mayor" <?= ($ordenar_por ?? '') === 'precio_menor_mayor' ? 'selected' : '' ?>>Precio menor a mayor</option>
                        <option value="precio_mayor_menor" <?= ($ordenar_por ?? '') === 'precio_mayor_menor' ? 'selected' : '' ?>>Precio mayor a menor</option>
                    </select>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <h5 class="titulo-filtro mb-0 me-2">Filtrar por:</h5>
                    <select class="form-select cajita-filtro form-select-sm w-auto" onchange="window.location.href = this.value;">
                        <option value="<?= site_url('catalogo') ?>" <?= !isset($categoria_id) ? 'selected' : '' ?>>Todo</option>
                        <option value="<?= site_url('catalogo?categoria=1') ?>" <?= (isset($categoria_id) && $categoria_id == 1) ? 'selected' : '' ?>>Indumentaria</option>
                        <option value="<?= site_url('catalogo?categoria=2') ?>" <?= (isset($categoria_id) && $categoria_id == 2) ? 'selected' : '' ?>>Calzado</option>
                        <option value="<?= site_url('catalogo?categoria=3') ?>" <?= (isset($categoria_id) && $categoria_id == 3) ? 'selected' : '' ?>>Blanquería</option>
                        <option value="<?= site_url('catalogo?categoria=4') ?>" <?= (isset($categoria_id) && $categoria_id == 4) ? 'selected' : '' ?>>Marroquinería</option>
                    </select>
                </div>
                <form method="get" id="form-filtros" action="<?= site_url('catalogo') ?>">
                    <input type="hidden" name="categoria" value="<?= esc($categoria_id) ?>">
                <div class="accordion" id="accordionFiltros">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingGenero">
                            <button class="accordion-button collapsed titulo-acordeon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGenero" aria-expanded="false" aria-controls="collapseGenero">
                                Género
                            </button>
                        </h2>
                        <div id="collapseGenero" class="accordion-collapse collapse" aria-labelledby="headingGenero" data-bs-parent="#accordionFiltros">
                            <div class="accordion-body">
                                <?php
                                $generos_disponibles = ['hombre', 'mujer', 'niños', 'unisex'];
                                foreach ($generos_disponibles as $genero):
                                ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="<?= esc($genero) ?>"
                                            id="genero<?= esc($genero) ?>"
                                            name="genero[]"
                                            <?= (isset($genero_filtros) && in_array($genero, $genero_filtros)) ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="genero<?= esc($genero) ?>">
                                            <?= ucfirst($genero) ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="accordion" id="accordionFiltros">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingColor">
                            <button class="accordion-button collapsed titulo-acordeon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseColor" aria-expanded="false" aria-controls="collapseColor">
                                Color
                            </button>
                        </h2>
                        <div id="collapseColor" class="accordion-collapse collapse" aria-labelledby="headingColor" data-bs-parent="#accordionFiltros">
                            <div class="accordion-body">
                                <?php
                                $colores_disponibles = ['amarillo', 'azul', 'beige', 'blanco', 'bordo', 'celeste', 'gris', 'marron', 'naranja', 'negro', 'rosa', 'rojo', 'violeta']; 
                                foreach ($colores_disponibles as $color):
                                ?>
                                    <div class="form-check">
                                        <input class="form-check-input" 
                                            type="checkbox" 
                                            value="<?= esc($color) ?>" 
                                            id="color<?= ucfirst(esc($color)) ?>" 
                                            name="color[]" 
                                            <?= in_array($color, $color_filtros ?? []) ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="color<?= ucfirst(esc($color)) ?>">
                                            <?= ucfirst(esc($color)) ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTipo">
                            <button class="accordion-button collapsed titulo-acordeon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTipo" aria-expanded="false" aria-controls="collapseTipo">
                                Tipo
                            </button>
                        </h2>
                        <div id="collapseTipo" class="accordion-collapse collapse" aria-labelledby="headingTipo" data-bs-parent="#accordionFiltros">
                            <div class="accordion-body">
                                <?php if (!empty($tipo_disponibles)): ?>
                                    <?php foreach ($tipo_disponibles as $tipo): ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="<?= esc($tipo) ?>"
                                                id="<?= esc($tipo) ?>"
                                                name="tipo[]"
                                                <?= (isset($tipo_filtros) && in_array($tipo, $tipo_filtros)) ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="<?= esc($tipo) ?>">
                                                <?= ucfirst(str_replace('-', ' ', esc($tipo))) ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="text-muted">No hay tipos disponibles para esta categoría.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                  <!-- Botón para aplicar filtros -->
                <div class="mt-3 text-end">
                    <button type="submit" class="btn btn-outline-dark btn-sm">Aplicar filtros</button>
                    <a href="<?= site_url('catalogo' . ($categoria_id ? '?categoria=' . $categoria_id : '')) ?>" class="btn btn-outline-secondary btn-sm">Eliminar filtros</a>
                </div>
                </form>
            </div>

            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    <?php if (!empty($productos) && is_array($productos)): ?>
                        <?php foreach ($productos as $producto): ?>
                            <div class="col">
                                <a href="<?= base_url('catalogo/detalle/' . $producto['id']); ?>" class="card-link"> <div class="card producto-card h-100 position-relative">
                                        <img src="<?= base_url('assets/uploads/' . $producto['imagen']); ?>" class="card-img-top" alt="<?= esc($producto['nombre_prod']); ?>">
                                        <div class="card-body">
                                            <h5 class="card-title"> <?=  ucfirst(esc($producto['nombre_prod'])); ?></h5>
                                            <p class="card-precio">$<?= number_format($producto['precio_vta'], 2, ',', '.'); ?></p>
                                        </div>
                                        <button class="btn-carrito">
                                            <i class="bi bi-basket3"></i> 
                                        </button>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12 text-center">
                            <p>No hay productos disponibles.</p> </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php if (!empty($pager)) : ?>
                <div class="col-12 mt-4 d-flex justify-content-center">
                    <nav aria-label="Page navigation example" class="mi-paginacion">
                        <ul class="pagination">
                            <?= $pager->links('productos', 'custom_bootstrap') ?>
                        </ul>
                    </nav>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

