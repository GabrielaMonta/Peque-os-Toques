<main>
  <div class="container my-4">
    <h4 class="titulo-crud mt-3">Listado de Consultas</h4>
    <div class="mb-3 mt-3">
        <a href="<?= base_url('consultas') ?>" class="mt-1 mx-2 btn btn-outline-secondary btn-sm <?= $estado === null ? 'active' : '' ?>">
            <i class="fas fa-clock"></i> Recientes
        </a>
        <a href="<?= base_url('consultas?estado=NO') ?>" class="mt-1  mx-2 btn btn-outline-warning btn-sm <?= $estado === 'NO' ? 'active' : '' ?>">
            <i class="fas fa-question-circle"></i> No respondidas
        </a>
        <a href="<?= base_url('consultas?estado=SI') ?>" class="mt-1 mx-2 btn btn-outline-success btn-sm <?= $estado === 'SI' ? 'active' : '' ?>">
            <i class="fas fa-check-circle"></i> Respondidas
        </a>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="table-light">
          <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Mensaje</th>
            <th>Estado</th>
            <th>Acciones</th> 
          </tr>
        </thead>
        <tbody>
          <?php foreach ($consultas as $consulta): ?>
            <tr>
              <td><?= esc($consulta['nombre']) . ' ' . esc($consulta['apellido']) ?></td>
              <td><?= esc($consulta['email']) ?></td>
              <td><?= esc($consulta['MENSAJE']) ?></td>
              <td>
                <?php if ($consulta['respuesta'] === 'SI'): ?>
                  <span class="badge bg-success">Respondido</span>
                <?php else: ?>
                  <span class="badge bg-danger">Pendiente</span>
                <?php endif; ?>
              </td>
              <td class="acciones-columna">
                <?php if ($consulta['respuesta'] === 'NO'): ?>
                  <a href="<?= base_url('consultas/atender/' . $consulta['id_consulta']) ?>" class="btn btn-sm btn-crud-editar" title="Responder">
                    <i class="fas fa-reply"></i>
                  </a>
                <?php else: ?>
                  <a href="<?= base_url('consultas/eliminar/' . $consulta['id_consulta']) ?>" class="btn btn-sm btn-crud-eliminar" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar esta consulta?');">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php if (!empty($pager)) : ?>
                <div class="col-12 mt-4 d-flex justify-content-center">
                    <nav aria-label="Page navigation" class="mi-paginacion">
                        <ul class="pagination">
                            <?= $pager->links('consultas', 'custom_bootstrap') ?>
                        </ul>
                    </nav>
                </div>
            <?php endif; ?>
    </div>
  </div>
</main>
