<link href="<?= base_url('assets/css/producto.css') ?>" rel="stylesheet">

<main>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('catalogo-todo'); ?>" class="letra-migas">Catálogo</a></li>
                <li class="breadcrumb-item">
                    <?php if (isset($producto['categoria_id'])): ?>
                        <a href="<?= base_url('catalogo/categoria/' . esc($producto['categoria_id'])); ?>" class="letra-migas">Categoría</a>
                    <?php else: ?>
                        <span class="letra-migas">Categoría</span>
                    <?php endif; ?>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?= esc($producto['nombre_prod']); ?></li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-6">
                <div class="product-image-container">
                    <img src="<?= base_url('assets/uploads/' . esc($producto['imagen'])); ?>" alt="<?= esc($producto['nombre_prod']); ?>" class="product-image">
                </div>
            </div>

            <div class="col-md-6">
                <div class="product-card mt-3">
                    <h2 class="product-title"><?= esc($producto['nombre_prod']); ?></h2>
                    <p class="product-category">Categoría: <?= esc($categoria_nombre); ?> </p>
                    
                    <p class="product-description">
                        <?= esc($producto['descripcion']); ?>
                    </p>
                    
                    <?php if ($producto['stock'] > 0): ?>
                        <p class="product-stock text-success">Stock disponible: <?= esc($producto['stock']); ?></p>
                    <?php else: ?>
                        <p class="product-stock text-danger">¡Sin Stock!</p>
                    <?php endif; ?>

                    <p class="product-price">$<?= number_format($producto['precio_vta'], 2, ',', '.'); ?></p>
                    <?php $colores_disponibles = array_map('trim', explode(',', $producto['color']));?>

                    <div class="mb-3">
                        <label for="color_seleccionado" class="form-label">Color:</label>
                        <select class="form-select" id="color_seleccionado" name="color_seleccionado">
                            <?php foreach ($colores_disponibles as $color): ?>
                                <option value="<?= esc($color); ?>"><?= ucfirst(esc($color)); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nota_pedido" class="form-label">Notas para el pedido:</label>
                        <textarea class="form-control" id="nota_pedido" name="nota_pedido" rows="3" placeholder="Por favor datelle la talla que desea."></textarea>
                    </div>
                    
                    <?php if ($producto['stock'] > 0): ?>
                        <button class="add-to-cart-btn">Agregar al carrito</button>
                    <?php else: ?>
                        <button class="add-to-cart-btn" disabled>Sin Stock</button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>