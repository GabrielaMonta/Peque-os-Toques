<main>
    <div class="container mt-4">
    <h2 class="titulo-crud">Listado de Productos</h2>

    <div class="d-flex justify-content-end mb-3">
        <a href="<?= site_url('crear'); ?>" class="btn btn-crud guardar mx-3 py-1 px-2">Agregar</a>
        <a href="<?= site_url('crear'); ?>" class="btn  btn-crud cancelar py-1 px-2">Eliminados</a>
    </div>
    <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
    </div>
    <?php endif; ?>

    <table class="tabla-admin ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Precio Venta</th>
                <th>Stock</th>
                <th>Stock Mínimo</th>
                <th>Colores</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($productos) ): ?>
                <?php foreach ($productos as $prod): ?>
                    <tr>
                        <td><?= esc($prod['id']); ?></td>
                        <td><?= esc($prod['nombre_prod']); ?></td>
                        <td>
                            <img src="<?= base_url('assets/uploads/' . $prod['imagen']); ?>" width="60">
                        </td>
                        <td>$<?= number_format($prod['precio'], 2, ',', '.'); ?></td>
                        <td>$<?= number_format($prod['precio_vta'], 2, ',', '.'); ?></td>
                        <td><?= esc($prod['stock']); ?></td>
                        <td><?= esc($prod['stock_min']); ?></td>
                        <td><?= esc($prod['color']); ?></td>
                        
                        <td class="acciones-columna">
                            <a href="<?= base_url('editarProducto/' . $prod['id']); ?>"  class="btn btn-sm btn-crud-editar" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?= base_url('eliminarProducto/' . $prod['id']); ?>" class="btn btn-sm btn-crud-eliminar" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este producto?');">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td> 
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8">No hay productos disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</main>


