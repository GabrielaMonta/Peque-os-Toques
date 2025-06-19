<?php $seccion = 'pedidos'; ?>

<main>
    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('mensaje') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
    <?php endif; ?>
    <div class="container my-4">
        <div class="row">
            <!-- Detalle cuenta-->
            <div class="col-12 col-md-3 ">
                <h4 class="titulo-micompra">Hola!</h3>
                <ul class="vertical-menu">
                    <li><a class="<?= $seccion == 'cuenta' ? 'activo' : '' ?>" href="<?php echo base_url('cuenta'); ?>">Perfil</a></li>
                    <li><a class="<?= $seccion == 'direcciones' ? 'activo' : '' ?>" href="<?php echo base_url('direcciones'); ?>">Direcciones</a></li>
                    <li><a class="<?= $seccion == 'pedidos' ? 'activo' : '' ?>" href="<?php echo base_url('mis-compras'); ?>">Pedidos</a></li>
                    <li><a class="<?= $seccion == '' ? 'activo' : '' ?>" href="<?php echo base_url('tarjetas'); ?>">Tarjetas</a></li>
                    <li><a href="<?php echo base_url('logout'); ?>">Cerrar sesión</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-9 ">
                <div class="">
                    <a href="#" onclick="history.back()" class="boton-volver">
                        <i class="fas fa-arrow-left "></i> VOLVER
                    </a>
                </div><br>
                <h4 class = "letra-pedido"><strong>Pedido # <?= $cabecera['venta_id'] ?> </strong></h4>    
                <?php setlocale(LC_TIME, 'es_ES.utf8', 'es_ES.UTF-8', 'spanish'); 
                $fecha = strftime('%d de %B de %Y', strtotime($cabecera['fecha']))?> 
                <p class="fw-bold"><?= ucfirst($fecha) ?></p>
                <strong style ="color: #9da53a">Entrega: </strong> <?= $cabecera['medio_entrega'] ?>
                
                <!-- Datos usuario-->
                <div class ="container-compra-usuario mt-2">
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
                <div class ="container-compra-usuario">
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
                <!-- Datos para el envio -->
                <div class ="container-compra-usuario">
                    <h6><strong>Dirección de envío</strong> </h6>
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
                <!-- Productos-->
                <div class ="container-detalle-compra">
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
        </div>
    </div>
</main>