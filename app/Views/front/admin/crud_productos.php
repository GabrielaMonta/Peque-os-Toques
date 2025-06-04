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
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>

    <table class="table ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Precio Venta</th>
                <th>Stock</th>
                <th>Stock Mínimo</th>
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
                        <td><?= esc($prod['precio']); ?></td>
                        <td><?= esc($prod['precio_vta']); ?></td>
                        <td><?= esc($prod['stock']); ?></td>
                        <td><?= esc($prod['stock_min']); ?></td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
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


<!-- 
<td class="text-end">
    <a href="" class="btn btn-sm btn-warning" title="Editar">
        <i class="fas fa-edit"></i>
    </a>
    <a href="" class="btn btn-sm btn-danger" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este producto?');">
        <i class="fas fa-trash-alt"></i>
    </a>
</td> -->