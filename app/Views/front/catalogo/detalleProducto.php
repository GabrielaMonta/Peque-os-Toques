<link href="<?= base_url('assets/css/producto.css') ?>" rel="stylesheet">

<main>
    <div class="container mt-5">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        <?php endif; ?>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?= base_url('catalogo'); ?>" class="letra-migas">Catálogo</a>
                </li>
                <li class="breadcrumb-item">
                    <?php if (isset($producto['categoria_id'])): ?>
                        <a href="<?= base_url('catalogo') . '?categoria=' . esc($producto['categoria_id']); ?>" class="letra-migas">
                            <?= esc($categoria_nombre); ?>
                        </a>
                    <?php else: ?>
                        <span class="letra-migas">Categoría</span>
                    <?php endif; ?>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= esc($producto['nombre_prod']); ?>
                </li>
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
                        <form id= "form-agregar-carrito" action="<?= base_url('carrito-add') ?>" method="post">
                            <input type="hidden" name="id" value="<?= esc($producto['id']) ?>">
                            <input type="hidden" name="nombre_prod" value="<?= esc($producto['nombre_prod']) ?>">
                            <input type="hidden" name="qty" value="1">
                            <input type="hidden" name="precio_vta" value="<?= esc($producto['precio_vta']) ?>">
                            <input type="hidden" name="options[img]" value="<?= 'assets/uploads/' . esc($producto['imagen']) ?>">

                            <!-- Estos dos se actualizan con JS antes de enviar -->
                            <input type="hidden" name="options[color]" value="">
                            <input type="hidden" name="options[nota]" value="">
                            <input type="hidden" name="options[uid]" id="uid_input" value="">


                            <!-- Selector de color -->
                            <div class="mb-3">
                                <label for="color_seleccionado" class="form-label">Color:</label>
                                <select class="form-select" id="color_seleccionado">
                                    <?php foreach ($colores_disponibles as $color): ?>
                                        <option value="<?= esc($color); ?>"><?= ucfirst(esc($color)); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Notas del pedido -->
                            <div class="mb-3">
                                <label for="nota_pedido" class="form-label">Notas para el pedido:</label>
                                <textarea class="form-control" id="nota_pedido" rows="3" placeholder="Por favor detalle la talla que desea." required></textarea>
                            </div>
 
                            <!-- Botón -->
                            <?php if ($producto['stock'] > 0): ?>
                                <button class="add-to-cart-btn">Agregar al carrito</button>
                            <?php else: ?>
                                <button class="add-to-cart-btn" disabled>Sin Stock</button>
                            <?php endif; ?>
                        </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('form-agregar-carrito').addEventListener('submit', function () {
            const colorSelect = document.getElementById('color_seleccionado');
            const notaTextarea = document.getElementById('nota_pedido');
            const uidInput = document.getElementById('uid_input');


            this.querySelector('input[name="options[color]"]').value = colorSelect.value;
            this.querySelector('input[name="options[nota]"]').value = notaTextarea.value;

            // Generar UID único por tiempo (milisegundos)
            uidInput.value = 'uid-' + Date.now();
        });
    </script>

</main>
