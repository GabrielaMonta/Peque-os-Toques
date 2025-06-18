<main>
  <div class="container my-4">
    <h4 class="titulo-crud">Listado de Consultas</h4>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="table-light">
          <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Mensaje</th>
            <th>Estado</th> <!-- Nuevo -->
            <th>Acciones</th> <!-- Nuevo -->
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
              <td>
                <?php if ($consulta['respuesta'] === 'NO'): ?>
                  <a href="<?= base_url('consultas/atender/' . $consulta['id_consulta']) ?>" class="btn btn-crud guardar btn-sm">Atender</a>
                <?php else: ?>
                  <a href="<?= base_url('consultas/eliminar/' . $consulta['id_consulta']) ?>" class="btn btn-crud cancelar btn-sm">Eliminar</a>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
