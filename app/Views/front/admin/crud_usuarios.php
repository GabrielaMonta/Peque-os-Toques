<main>
    <div class="container my-4">
        <h4 class="titulo-crud">Listado de Usuarios</h4>

        <div class="col-12 mb-2">
            <div class="row align-items-center">
                <!-- Filtros a la izquierda -->
                <div class="col-12 col-md-6 d-flex flex-wrap gap-2 mb-2 mb-md-0">
                <select class="form-select form-select-sm w-auto">
                    <option value="">Filtrar por categoría</option>
                    <option value="hombre">Hombre</option>
                    <option value="mujer">Mujer</option>
                </select>

                <select class="form-select form-select-sm w-auto">
                    <option value="">Ordenar por</option>
                    <option value="precio_asc">Precio: menor a mayor</option>
                    <option value="precio_desc">Precio: mayor a menor</option>
                </select>
                </div>

                <!-- Barra de búsqueda a la derecha -->
                <div class="col-12 col-md-6 d-flex justify-content-md-end">
                <input type="text" id="buscarInput" class="form-control form-control-sm w-100 w-md-auto"  style="max-width: 300px;"  placeholder="Buscar...">
                </div>
            </div>
        </div>
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
         </div>
    </div>
</main>