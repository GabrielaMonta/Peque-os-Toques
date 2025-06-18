<main>
    <div class="container mt-4">
        <h2 class="titulo-crud">Listado de Productos</h2>
   
        <div class="row align-items-center mb-2">
            <form method="get"  action="<?= site_url('crud-productos'); ?>" class="row align-items-center mb-2">
                <div class="col-12 col-md-6 d-flex flex-wrap gap-2 mb-2 mb-md-0">
                    <select name="categoria" class="form-select form-select-sm w-auto">
                        <option value="">Filtrar por categoría</option>
                        <?php foreach ($categorias as $cat): ?>
                            <option value="<?= $cat['id']; ?>" <?= (isset($_GET['categoria']) && $_GET['categoria'] == $cat['id']) ? 'selected' : ''; ?>>
                                <?= esc(ucfirst($cat['nombre'])); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <select name="orden" class="form-select form-select-sm w-auto">
                        <option value="">Ordenar por</option>
                        <option value="precio_asc">Precio: menor a mayor</option>
                        <option value="precio_desc">Precio: mayor a menor</option>
                        <option value="reciente">Más reciente</option>
                        <option value="stock">Stock disponible</option>
                    </select>

                    <button type="submit" class="btn btn-outline-dark btn-sm">Aplicar</button>
                    <a href="<?= site_url('crud-productos'); ?>" class="btn btn-outline-secondary btn-sm">Borrar filtros</a>
                </div>
                
                <div class="col-12 col-md-6 d-flex flex-wrap justify-content-center justify-content-md-end align-items-center gap-2">
                    <div class="barra-busqueda w-100 w-md-auto mt-2" style="max-width: 300px;">
                        <input type="text" name="buscar" id="buscarInput" class="form-control form-control-sm w-100" placeholder="Buscar..." value="<?= esc($_GET['buscar'] ?? '') ?>">
                    </div>
                    <a href="<?= site_url('crear'); ?>" class="btn btn-crud guardar py-1 px-2">Agregar</a>
                    <a href="<?= site_url('crear'); ?>" class="btn btn-crud cancelar py-1 px-2">Eliminados</a>
                </div>
    
            </form>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('success'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
        <?php endif; ?>

        <div class="table-responsive">
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
            <?php if (!empty($pager)) : ?>
                <div class="col-12 mt-4 d-flex justify-content-center">
                    <nav aria-label="Page navigation" class="mi-paginacion">
                        <ul class="pagination">
                            <?= $pager->links('productos', 'custom_bootstrap') ?>
                        </ul>
                    </nav>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>


