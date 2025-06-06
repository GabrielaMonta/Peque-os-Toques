<main>
<div class="container mt-4 mb-4 d-flex justify-content-center">
    <div class="card" style="width:75%;">
        <div class="card-header text-center">
            <h2 class="titulo-form-crud">EDITAR PRODUCTO</h2>
        </div>

        <form action="<?= base_url('/actualizarProducto/'.$producto['id']); ?>" method="post" enctype="multipart/form-data">
            <div class="card-body">

                <!-- NOMBRE -->
                <div class="mx-2 my-2">
                    <label class="titulo-form ps-2 pb-1">Producto</label>
                    <input class="form-control" type="text" name="nombre_prod" value="<?= esc($producto['nombre_prod']); ?>">
                </div>

                <!-- DESCRIPCION -->
                <div class="mx-2 my-2">
                    <label class="titulo-form ps-2 pb-1">Descripción</label>
                    <textarea class="form-control" name="descripcion_prod" rows="3"><?= esc($producto['descripcion']); ?></textarea>
                </div>

                <!-- CATEGORIA -->
                <div class="mx-2 my-2">
                    <label class="titulo-form ps-2 pb-1">Categoria</label>
                    <select class="form-control" name="categoria">
                        <?php foreach ($categorias as $categoria): ?>
                            <option value="<?= $categoria['id']; ?>" <?= ($categoria['id'] == $producto['categoria_id']) ? 'selected' : ''; ?>>
                                <?= $categoria['id'], ". ", $categoria['nombre']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- PRECIO -->
                <div class="mx-2 my-2">
                    <label class="titulo-form ps-2 pb-1">Precio Compra</label>
                    <input type="number" step="0.01" class="form-control" name="precio" value="<?= esc($producto['precio']); ?>">
                </div>

                <!-- PRECIO VENTA -->
                <div class="mx-2 my-2">
                    <label class="titulo-form ps-2 pb-1">Precio Venta</label>
                    <input type="number" step="0.01" class="form-control" name="precio_vta" value="<?= esc($producto['precio_vta']); ?>">
                </div>

                <!-- STOCK -->
                <div class="mx-2 my-2">
                    <label class="titulo-form ps-2 pb-1">Stock</label>
                    <input type="number" class="form-control" name="stock" value="<?= esc($producto['stock']); ?>">
                </div>

                <!-- STOCK MÍNIMO -->
                <div class="mx-2 my-2">
                    <label class="titulo-form ps-2 pb-1">Stock mínimo</label>
                    <input type="number" class="form-control" name="stock_min" value="<?= esc($producto['stock_min']); ?>">
                </div>

                <!-- IMAGEN ACTUAL -->
                <div class="mx-2 my-2">
                    <label class="titulo-form ps-2 pb-1">Imagen actual</label><br>
                    <img src="<?= base_url('assets/uploads/'.$producto['imagen']); ?>" alt="Imagen actual" width="150"><br>
                </div>

                <!-- CAMBIAR IMAGEN -->
                <div class="mx-2 my-2">
                    <label class="titulo-form ps-2 pb-1">Cambiar imagen (opcional)</label>
                    <input type="file" class="form-control" name="imagen">
                </div>

                <!-- COLORES -->
                <div class="mx-2 my-2">
                    <label class="titulo-form ps-2 pb-1">Colores disponibles</label>

                    <?php
                    $colores_disponibles = ['amarillo','azul','beige','blanco','bordo','celeste','gris','marron','negro','naranja','rosa','rojo','violeta'];
                    // Los colores que tiene el producto se guardan en un string separado por comas
                    $colores_seleccionados = explode(',', $producto['color']);
                    ?>

                    <?php foreach ($colores_disponibles as $color): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="color[]" value="<?= $color ?>"
                                <?= in_array($color, $colores_seleccionados) ? 'checked' : ''; ?>>
                            <label class="form-check-label"><?= $color ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- GÉNERO -->
                <div class="mx-2 my-2">
                    <label class="titulo-form ps-2 pb-1">Género</label>
                    <select class="form-control" name="genero">
                        <option value="hombre" <?= ($producto['genero'] == 'hombre') ? 'selected' : ''; ?>>Hombre</option>
                        <option value="mujer" <?= ($producto['genero'] == 'mujer') ? 'selected' : ''; ?>>Mujer</option>
                        <option value="niños" <?= ($producto['genero'] == 'niños') ? 'selected' : ''; ?>>Niños</option>
                    </select>
                </div>

                <!-- TIPO -->
                <div class="mx-2 my-2">
                    <label class="titulo-form ps-2 pb-1">Tipo</label>
                    <input type="text" class="form-control" name="tipo" value="<?= esc($producto['tipo']); ?>">
                </div>

                <div class="d-flex justify-content-end mb-3">
                    <button class="btn btn-crud guardar mx-3 mt-3 py-1 px-2" type="submit">Guardar Cambios</button>
                    <a href="<?=base_url('crud-productos'); ?>" class="btn btn-crud volver mx-3 mt-3 py-1 px-2">Volver</a>
                </div>
            </div>
        </form>
    </div>
</div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>