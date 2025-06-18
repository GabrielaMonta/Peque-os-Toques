<main>
    <div class="container my-4">
        <h4 class="titulo-crud">Listado de Usuarios</h4>
        <form method="GET" class="col-12 mb-3">
            <div class="row align-items-center">

                <!-- Filtros a la izquierda -->
                <div class="col-12 col-md-6 d-flex flex-wrap gap-2 mb-2 mb-md-0">

                    <!-- Filtrar por tipo de usuario -->
                    <select name="tipo" class="form-select form-select-sm w-auto">
                        <option value="">Tipo de usuario</option>
                        <option value="1" <?= $tipoSeleccionado == '1' ? 'selected' : '' ?>>Administrador</option>
                        <option value="2" <?= $tipoSeleccionado == '2' ? 'selected' : '' ?>>Cliente</option>
                    </select>

                    <!-- Filtrar por estado (baja o no) -->
                    <select name="baja" class="form-select form-select-sm w-auto">
                        <option value="">Estado</option>
                        <option value="NO" <?= $bajaSeleccionado == 'NO' ? 'selected' : '' ?>>Activo</option>
                        <option value="SI" <?= $bajaSeleccionado == 'SI' ? 'selected' : '' ?>>Baja</option>
                    </select>

                    <!-- Filtrar por recientes-->
                    <select name="orden" class="form-select form-select-sm w-auto">
                        <option value="">Ordenar por</option>
                        <option value="reciente" <?= $ordenSeleccionado == 'reciente' ? 'selected' : '' ?>>Más reciente</option>
                        <option value="antiguo" <?= $ordenSeleccionado == 'antiguo' ? 'selected' : '' ?>>Más antiguo</option>
                    </select>

                    <button type="submit" class="btn btn-outline-dark btn-sm">Filtrar</button>
                    <a href="<?= base_url('crud-usuarios') ?>" class="btn btn-outline-secondary btn-sm">Borrar filtros</a>
                </div>

                <div class="col-12 col-md-6 d-flex justify-content-md-end align-items-center gap-2 mt-2 mt-md-0">
                    <input type="text" name="buscar" value="<?= esc($buscar) ?>" class="form-control form-control-sm w-100 w-md-auto" style="max-width: 300px;" placeholder="Buscar...">
                </div>
            </div>
        </form>

        <div class="table-responsive">
            <table class="tabla-admin">
                <thead >
                    <tr>

                    <th >ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Telefono</th>
                    <th>Fecha de nacimiento</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Acciones</th>
                        
                </tr>
                </thead>
                <tbody>
                    <?php if (!empty($usuarios)) : ?>
                        <?php foreach ($usuarios as $usuario) : ?>
                        <tr style= "border-bottom: 1px solid #bfc86a; margin: 0">
                        <td><?= esc($usuario['id']) ?></td>
                        <td><?= esc($usuario['nombre']) ?></td>
                        <td><?= esc($usuario['apellido']) ?></td>
                        <td><?= esc($usuario['dni']) ?></td>
                        <td><?= esc($usuario['telefono']) ?></td>
                        <td><?= esc($usuario['fecha_nacimiento']) ?></td>
                        <td><?= esc($usuario['usuario']) ?></td>
                        <td><?= esc($usuario['email']) ?></td>
                        <td><?= esc($usuario['perfil_id']) ?></td>
                        <td class="acciones-columna">
                            <a href="<?= base_url('editar/' . $usuario['id']) ?>" class="btn btn-sm btn-crud-editar">
                                <i class="fas fa-edit"></i>
                            </a>
                                
                            <a href="<?= base_url('borrar/' . $usuario['id']) ?>" class="btn btn-sm btn-crud-eliminar" onclick="return confirm('¿Seguro que querés dar de baja este usuario?')">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="7">No hay usuarios para mostrar.</td>
                        </tr>
                     <?php endif; ?>
                </tbody>
            </table>
            <?php if (!empty($pager)) : ?>
                <div class="col-12 mt-4 d-flex justify-content-center">
                    <nav aria-label="Page navigation" class="mi-paginacion">
                        <ul class="pagination">
                            <?= $pager->links('usuarios', 'custom_bootstrap') ?>
                        </ul>
                    </nav>
                </div>
            <?php endif; ?>
         </div>
    </div>
</main>