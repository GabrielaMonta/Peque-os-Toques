<main>
    <div class="container  mt-4 mb-4">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-3">
            </div>

            <div class="col-12 col-md-6">
                <a href="#" onclick="history.back()" class="boton-volver">
                    <i class="fas fa-arrow-left "></i> VOLVER
                </a>
                <br><br>
                <div class=" row">
                    
                    <div class = "col-12 col-md-6">
                        <h4>Pedido # <?= $cabecera['venta_id'] ?> </h4>
                        <?php setlocale(LC_TIME, 'es_ES.utf8', 'es_ES.UTF-8', 'spanish');
                        $fecha = strftime('%d de %B de %Y', strtotime($cabecera['fecha']))?>
                        <p class="fw-bold"><?= ucfirst($fecha) ?></p>
                        <strong style ="color: #9da53a">Entrega: </strong> <?= $cabecera['medio_entrega'] ?>
                    </div>
                    <!-- Modificar estado-->
                    <div class="col-12 col-md-6 text-md-end d-flex flex-column align-items-md-end">
                        <p class="mb-1"><strong>Estado:</strong>
                            <span class="badge border border-secondary estado-venta"><?= esc($cabecera['estado_venta']) ?></span>
                        </p>
                                
                        <form action="<?= base_url('actualizar-estado-venta'. $cabecera['venta_id']) ?>" method="post" class="mt-2">
                            <?= csrf_field() ?>
                            <input type="hidden" name="venta_id" value="<?= esc($cabecera['venta_id']) ?>">
                            <div class="input-group">
                                <select class="form-select form-select-sm" name="nuevo_estado" aria-label="Nuevo estado">
                                    <?php
                                        $estados_posibles = [
                                            'Pendiente',
                                            'Procesando',
                                            'En camino',
                                            'Entregado',
                                            'Cancelado',
                                        ];
                                    foreach ($estados_posibles as $estado_opcion) {
                                        $selected = ($estado_opcion == $cabecera['estado_venta']) ? 'selected' : '';
                                            echo "<option value=\"{$estado_opcion}\" {$selected}>{$estado_opcion}</option>";
                                    }?>
                                </select>
                                <button class="btn btn-outline-secondary btn-sm" type="submit" title="Actualizar Estado">
                                    <i class="fas fa-edit"></i> Actualizar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                 <br>   
                <!-- Datos usuario-->
                <div class ="container-venta-usuario">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <strong>Cliente: </strong> <?= $cabecera['nombre'] ?> <?= $cabecera['apellido'] ?> 
                            <strong><br>Teléfono: </strong> <?= $cabecera['telefono'] ?> 
                        </div>
                        <div class="col-12 col-md-6">
                            <strong>DNI: </strong> <?= $cabecera['dni'] ?>
                            <strong><br>Email: </strong> <?= $cabecera['email'] ?>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Datos del pago-->
                <div class ="container-venta-usuario">
                    <h6><strong>Información del pago </strong> </h6>
                    <br>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <strong>Metodo de pago</strong>
                            <br>Subtotal
                            <br>Descuento por metodo de pago
                            <br><strong>Total </strong>
                        </div>
                        <div class="col-12 col-md-6 text-end">
                            <?= $cabecera['metodo_pago'] ?>
                            <br><strong>$<?= $cabecera['subtotal'] ?></strong>
                            <br><strong>-$<?= $cabecera['descuento'] ?></strong>
                            <br><strong>$<?= $cabecera['total_venta'] ?></strong>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Datos para la entrega-->
                <div class ="container-venta-usuario">
                    <h6><strong>Dirección </strong> </h6>
                    <br>
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <strong>Calle: </strong><?= $cabecera['calle'] ?>
                            <br><strong>Piso/dpto: </strong><?= $cabecera['piso/dpto'] ?>
                            <br><strong>Ciudad: </strong><?= $cabecera['localidad'] ?>
                            <br><strong>Observaciones: </strong><?= $cabecera['observaciones'] ?>  
                        </div>
                        <div class="col-12 col-md-4 ">
                            <strong>Altura: </strong><?= $cabecera['altura'] ?>
                            <br><strong>Código postal: </strong><?= $cabecera['cp'] ?>
                            <br><strong>Provincia: </strong> <?= $cabecera['provincia'] ?>
                            
                        </div>
                    </div>
                </div>
                <br>
                <!-- Productos -->
                <div class ="container-venta-compra">
                    <h6><strong> PRODUCTOS</strong> </h6>
                        <?php if(!empty($detalle)):?>
                            <?php foreach($detalle as $item):?>
                                <div class="d-flex align-items-center m-1">
                                    <img src="<?= base_url('assets/uploads/' . $item['imagen']) ?>" alt="<?= esc($item['nombre_prod']) ?>" style="width: 80px; height: 90px;">
                                        <div class="ms-2">
                                            <strong><?= (ucfirst ($item['nombre_prod'])) ?></strong>
                                            <br>x<?= $item['cantidad']?>
                                            <br>Color: <?= (ucfirst ($item['colorElegido'])) ?> | Talle: <?= esc(ucfirst ($item['nota'])) ?>
                                            <?php $subtotal = ($item['precio_vta']  * $item['cantidad']);?>
                                            <br>Subtotal:<strong> $  <?php echo number_format($subtotal, 2) ?></strong>
                                        </div>
                                            
                                </div><hr style="border-bottom: 1px solid #bfc86a; margin: 0">
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No se encontraron productos para esta compra</p>
                        <?php endif; ?>
                </div>
            </div>
        
            <div class="col-12 col-md-3">
            </div>

        </div>
    </div>
</main>
       