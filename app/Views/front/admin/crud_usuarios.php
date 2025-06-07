<main>
    <div class="container my-4">
        <h4 class="titulo-micompra">Listado de Usuarios</h4>
        <table class="tabla-admin">
            <thead >
            <tr>
                <th class="titulos-resumen">ID</th>
                <th class="titulos-resumen">Nombre</th>
                <th class="titulos-resumen">Apellido</th>
                <th class="titulos-resumen">DNI</th>
                <th class="titulos-resumen">Teléfono</th>
                <th class="titulos-resumen">Fecha de nacimiento</th>
                <th class="titulos-resumen">Usuario</th>
                <th class="titulos-resumen">Email</th>
                <th class="titulos-resumen">Perfil</th>
                <th class="titulos-resumen">Acciones</th>
                
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
</main>