<main>
    <div class="container mt-4">
        <h2 class="titulo-crud">Gestión de Ventas</h2>

        <div class="mb-1 p-3">
            <form action="<?= base_url('ventas') ?>" method="get" class="row g-2 align-items-end">
                
                <div class="col-auto">
                    <label for="usuario_id" class="form-label">ID Usuario:</label>
                    <input type="text" class="form-control" id="usuario_id" name="usuario_id" 
                        value="<?= isset($usuario_id_seleccion) ? esc($usuario_id_seleccion) : '' ?>" 
                        placeholder="Ej: 1, 2, etc.">
                </div>

                <div class="col-auto">
                    <label for="estado_venta" class="form-label">Estado:</label>
                    <select class="form-select" id="estado_venta" name="estado_venta">
                        <option value="">Todos los estados</option>
                        <?php
                        $estados = ['Pendiente', 'Procesando', 'En camino', 'Entregado', 'Cancelado'];
                        foreach ($estados as $estado) {
                            $selected = (isset($estado_venta_seleccion) && $estado_venta_seleccion == $estado) ? 'selected' : '';
                            echo "<option value=\"{$estado}\" {$selected}>{$estado}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-auto">
                    <label for="fecha_desde" class="form-label">Fecha Desde:</label>
                    <input type="date" class="form-control" id="fecha_desde" name="fecha_desde" 
                        value="<?= isset($fecha_desde_seleccion) ? esc($fecha_desde_seleccion) : '' ?>">
                </div>

                <div class="col-auto">
                    <label for="fecha_hasta" class="form-label">Fecha Hasta:</label>
                    <input type="date" class="form-control" id="fecha_hasta" name="fecha_hasta" 
                        value="<?= isset($fecha_hasta_seleccion) ? esc($fecha_hasta_seleccion) : '' ?>">
                </div>

                <div class="col-auto">
                    <label for="medio_entrega" class="form-label">Entrega:</label>
                    <select class="form-select" id="medio_entrega" name="medio_entrega">
                        <option value="">Medio</option>
                        <?php
                        $medios = ['Correo', 'Retiro'];
                        foreach ($medios as $medio) {
                            $selected = (isset($medio_entrega_seleccion) && $medio_entrega_seleccion == $medio) ? 'selected' : '';
                            echo "<option value=\"{$medio}\" {$selected}>{$medio}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-auto d-flex gap-2">
                    <button type="submit" class="btn btn-outline-dark btn-sm">Aplicar Filtro</button>
                    <a href="<?= base_url('ventas') ?>" class="btn btn-outline-secondary btn-sm">Limpiar Filtro</a>
                </div>

            </form>
        </div>


        <?php if (!empty($ventas)): ?>
            <div class="table-responsive">
                <table class="tabla-admin">
                    <thead>
                        <tr>
                            <th>ID Venta</th>
                            <th>Fecha</th>
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Email Cliente</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Método Pago</th>
                            <th>Método Envío</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ventas as $venta): ?>
                            <tr>
                                <td><?= esc($venta['venta_id']) ?></td>
                                <td><?= esc(date('d/m/Y H:i', strtotime($venta['fecha']))) ?></td>
                                <td><?= esc($venta['id']) ?></td>
                                <td><?= esc($venta['nombre'] . ' ' . $venta['apellido']) ?></td>
                                <td><?= esc($venta['email']) ?></td>
                                <td>$<?= number_format($venta['total_venta'], 2, ',', '.') ?></td>
                                <td><?= esc($venta['estado_venta']) ?></td>
                                <td><?= esc($venta['metodo_pago']) ?></td>
                                <td><?= esc($venta['medio_entrega']) ?></td>
                                <td>
                                    <a href="<?= base_url('admin/detalle-ventas' . $venta['venta_id']) ?>" class="btn btn-sm btn-vista" title="Ver Detalle"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="alert alert-info text-center" role="alert">
                No se encontraron ventas para los criterios de búsqueda.
            </div>
        <?php endif; ?>

    </div>
</main>