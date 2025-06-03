<div class="container mt-1 mb-1 d-flex justify-content-center">
    <div class="card" style="width:75%;">
        <div class="card-header text-center">

        <h2>Alta de Productos</h2>
    </div>

    <?php if(!empty(session()->getFlashdata('fail'))): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
    <?php endif; ?>
    <?php if (!empty(session()->getFlashdata('success'))): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
    <?php endif; ?>

    <?php $validation = \Config\Services::validation(); ?>

    <form action="<?= base_url('/enviar-prod'); ?>" method="post" enctype="multipart/form-data">
        <div class="card-body" media="(max-width:568px)">

            <!-- NOMBRE -->
            <div class="mb2">
                <label for="nombre_prod" class="form-label">Producto</label>
                <input class="form-control" type="text" name="nombre_prod" id="nombre_prod" value="<?= set_value('nombre_prod'); ?>" placeholder="Nombre del producto" autofocus>
                <!-- Error -->
                 <?php if($validation->getError('nombre_prod')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('nombre_prod'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- CATEGORIA -->
            <select class="form-control" name="categoria" id="categoria">
                <option value="0">Seleccionar Categoria</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['id']; ?>" <?= set_select('categoria', $categoria['id']); ?>>
                        <?= $categoria['id'], ". ", $categoria['descripcion']; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <!-- PRECIO -->
            <div class="mb-3">
                <label for="precio" class="form-label">Precio Compra</label>
                <input type="number" step="0.01" class="form-control" name="precio" value="<?= set_value('precio'); ?>">
                <!-- Error -->
                 <?php if($validation->getError('precio')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('precio'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- PRECIO VENTA -->
            <div class="mb-3">
                <label for="precio_vta" class="form-label">Precio Venta</label>
                <input type="number" step="0.01" class="form-control" name="precio_vta" value="<?= set_value('precio_vta'); ?>">
                 <!-- Error -->
                <?php if($validation->getError('precio_vta')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('precio_vta'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- STOCK -->
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" name="stock" value="<?= set_value('stock'); ?>">
                <!-- Error -->
                 <?php if($validation->getError('stock')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('stock'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- STOCK MÍNIMO -->
            <div class="mb-3">
                <label for="stock_min" class="form-label">Stock mínimo</label>
                <input type="number" class="form-control" name="stock_min" value="<?= set_value('stock_min'); ?>">
                <!-- Error -->
                 <?php if($validation->getError('stock_min')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('stock_min'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- IMAGEN -->
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="imagen">
                <!-- Error -->
                 <?php if($validation->getError('imagen')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('imagen'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- TALLE -->
            <div class="mb-3">
                <label for="talle" class="form-label">Talle</label>
                <input type="text" class="form-control" name="talle" value="<?= set_value('talle'); ?>">
                <!-- Error -->
                 <?php if($validation->getError('talle')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('talle'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- GÉNERO -->
            <div class="mb-3">
                <label for="genero" class="form-label">Género</label>
                <select class="form-control" name="genero">
                    <option value="">Seleccionar género</option>
                    <option value="hombre" <?= set_select('genero', 'hombre'); ?>>Hombre</option>
                    <option value="mujer" <?= set_select('genero', 'mujer'); ?>>Mujer</option>
                    <option value="niños" <?= set_select('genero', 'niños'); ?>>Niños</option>
                </select>
                <!-- Error -->
                 <?php if($validation->getError('genero')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('genero'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- TIPO -->
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="tipo" value="<?= set_value('tipo'); ?>">
                <!-- Error -->
                 <?php if($validation->getError('tipo')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('tipo'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <button class="btn btn-success" id="send_form" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
                <a href="<?=base_url('crear'); ?>" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </form>
</div>

     