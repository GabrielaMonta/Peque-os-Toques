<main>
<div class="container mt-4 mb-4 d-flex justify-content-center">
    <div class="card" style="width:75%;">
        <div class="card-header text-center">
        <h2 class="titulo-form-crud">ALTA DE PRODUCTO</h2>
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
            <div class="mx-2 my-2">
                <label for="nombre_prod" class="titulo-form ps-2 pb-1">Producto</label>
                <input class="form-control" type="text" name="nombre_prod" id="nombre_prod" value="<?= set_value('nombre_prod'); ?>" placeholder="Nombre del producto" autofocus>
                <!-- Error -->
                 <?php if($validation->getError('nombre_prod')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('nombre_prod'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- CATEGORIA -->
            <div class="mx-2 my-2">
                <label for="categoria" class="titulo-form ps-2 pb-1">Categoria</label>
                <select class="form-control" name="categoria" id="categoria">
                    <option value="0">Seleccionar Categoria</option>
                    <?php foreach ($categorias as $categoria): ?>
                        <option value="<?= $categoria['id']; ?>" <?= set_select('categoria', $categoria['id']); ?>>
                            <?= $categoria['id'], ". ", $categoria['nombre']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- PRECIO -->
            <div class="mx-2 my-2">
                <label for="precio" class="titulo-form ps-2 pb-1">Precio Compra</label>
                <input type="number" step="0.01" class="form-control" name="precio" value="<?= set_value('precio'); ?>">
                <!-- Error -->
                 <?php if($validation->getError('precio')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('precio'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- PRECIO VENTA -->
            <div class="mx-2 my-2">
                <label for="precio_vta" class="titulo-form ps-2 pb-1">Precio Venta</label>
                <input type="number" step="0.01" class="form-control" name="precio_vta" value="<?= set_value('precio_vta'); ?>">
                 <!-- Error -->
                <?php if($validation->getError('precio_vta')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('precio_vta'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- STOCK -->
            <div class="mx-2 my-2">
                <label for="stock" class="titulo-form ps-2 pb-1">Stock</label>
                <input type="number" class="form-control" name="stock" value="<?= set_value('stock'); ?>">
                <!-- Error -->
                 <?php if($validation->getError('stock')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('stock'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- STOCK MÍNIMO -->
            <div class="mx-2 my-2">
                <label for="stock_min" class="titulo-form ps-2 pb-1">Stock mínimo</label>
                <input type="number" class="form-control" name="stock_min" value="<?= set_value('stock_min'); ?>">
                <!-- Error -->
                 <?php if($validation->getError('stock_min')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('stock_min'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- IMAGEN -->
            <div class="mx-2 my-2">
                <label for="imagen" class="titulo-form ps-2 pb-1">Imagen</label>
                <input type="file" class="form-control" name="imagen">
                <!-- Error -->
                 <?php if($validation->getError('imagen')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('imagen'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- TALLE -->
            <div class="mx-2 my-2">
                <label for="talle" class="titulo-form ps-2 pb-1">Talle</label>
                <input type="text" class="form-control" name="talle" value="<?= set_value('talle'); ?>">
                <!-- Error -->
                 <?php if($validation->getError('talle')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('talle'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- GÉNERO -->
            <div class="mx-2 my-2">
                <label for="genero" class="titulo-form ps-2 pb-1">Género</label>
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
            <div class="mx-2 my-2">
                <label for="tipo" class="titulo-form ps-2 pb-1">Tipo</label>
                <input type="text" class="form-control" name="tipo" value="<?= set_value('tipo'); ?>">
                <!-- Error -->
                 <?php if($validation->getError('tipo')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('tipo'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="d-flex  justify-content-end mb-3">
                <button class="btn btn-crud guardar mx-3 mt-3 py-1 px-2 bg" id="send_form" type="submit">Guardar</button>
                <button class="btn btn-crud cancelar mx-3 mt-3 py-1 px-2" type="reset">Cancelar</button>
                <a href="<?=base_url('crud-productos'); ?>" class="btn btn-crud volver mx-3 mt-3 py-1 px-2">Volver</a>
            </div>
        </div>
    </form>
</div>
</main>
     