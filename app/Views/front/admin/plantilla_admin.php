<main>
    <div class="container my-4">
        <h2 class="titulo-crud mb-4">Panel de Administración</h2>
        <div class="row g-4">

            <!-- Últimos usuarios -->
            <div class="col-md-4">
            <div class="card shadow mi-card-usuarios rounded-4">
                <div class="card-header">
                <i class="bi bi-person-plus-fill me-2"></i>Últimos usuarios registrados
                </div>
                <ul class="list-group list-group-flush">
                <?php foreach ($ultimosUsuarios as $user): ?>
                    <li class="list-group-item">
                    <?= esc($user['email']) ?>
                    </li>
                <?php endforeach; ?>
                </ul>
                <div class="card-footer text-end">
                <a href="<?= base_url('crud-usuarios') ?>" class="btn btn-sm">Ver todos</a>
                </div>
            </div>
            </div>

            <!-- Stock bajo -->
            <div class="col-md-4">
            <div class="card shadow mi-card-stock rounded-4">
                <div class="card-header">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>Stock bajo
                </div>
                <ul class="list-group list-group-flush">
                <?php foreach ($productosBajoStock as $producto): ?>
                    <li class="list-group-item">
                    <?= esc($producto['nombre_prod']) ?> - Stock: <?= esc($producto['stock']) ?>
                    </li>
                <?php endforeach; ?>
                </ul>
                <div class="card-footer text-end">
                <a href="<?= base_url('crud-productos') ?>" class="btn btn-sm">Ver inventario</a>
                </div>
            </div>
            </div>

            <!-- Últimas consultas -->
            <div class="col-md-4">
            <div class="card shadow mi-card-consultas rounded-4">
                <div class="card-header">
                <i class="bi bi-envelope-open-fill me-2"></i>Últimas consultas sin respuesta
                <span class="badge bg-danger ms-2"><?= $consultasPendientes ?></span>
                </div>
                <ul class="list-group list-group-flush">
                <?php foreach ($ultimasConsultas as $consulta): ?>
                    <li class="list-group-item">
                    <?= esc($consulta['nombre']) ?> - <?= esc($consulta['MENSAJE']) ?>
                    </li>
                <?php endforeach; ?>
                </ul>
                <div class="card-footer text-end">
                <a href="<?= base_url('consultas') ?>" class="btn btn-sm">Ver todas</a>
                </div>
            </div>
            </div>

        </div>
    </div>
</main>