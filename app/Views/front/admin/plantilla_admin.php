<main>
    <div class="container my-4">
        <h2 class="mb-4">Panel de Administración</h2>
        <div class="row g-4">

            <!-- Últimos usuarios -->
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        Últimos usuarios registrados
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($ultimosUsuarios as $user): ?>
                            <li class="list-group-item">
                                <?= esc($user['nombre']) ?> - <?= esc($user['email']) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="card-footer text-end">
                        <a href="<?= base_url('crud-usuarios') ?>" class="btn btn-sm btn-outline-primary">Ver todos</a>
                    </div>
                </div>
            </div>

            <!-- Productos con stock bajo -->
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header bg-warning text-dark">
                        Stock bajo
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($productosBajoStock as $producto): ?>
                            <li class="list-group-item">
                                <?= esc($producto['nombre_prod']) ?> - Stock: <?= esc($producto['stock']) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="card-footer text-end">
                        <a href="<?= base_url('crud-productos') ?>" class="btn btn-sm btn-outline-warning">Ver inventario</a>
                    </div>
                </div>
            </div>

            <!-- Últimas consultas 
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        Últimas consultas
                    </div>
                    <ul class="list-group list-group-flush">
                       
                    </ul>
                    <div class="card-footer text-end">
                        <a href="<?= base_url('admin/consultas') ?>" class="btn btn-sm btn-outline-info">Ver todas</a>
                    </div>
                </div>
            </div>-->

        </div>
    </div>
</main>