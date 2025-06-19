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
                    <li><a href="<?php echo base_url('logout'); ?>">Cerrar sesión</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-9 ">
                <?php if(empty($compras)){ ?>
                    <div class="text-center mt-5">
                        <h4>No posee compras registradas.</h4>
                        <p> Para realizar una compra visite nuestro catálogo </p>
                        <a class="btn boton-finalizarcompra" href="<?= base_url('catalogo'); ?>">
                        <i class="mt-2"></i>Volver al catalogo
                    </a></div>      
                <?php } ?>
                <?php if(!empty($compras) && is_array($compras))
                    setlocale(LC_TIME, 'es_ES.utf8', 'es_ES.UTF-8', 'spanish');{

                    foreach ($compras as $compra){ $fecha = strftime('%d de %B de %Y', strtotime($compra['fecha']));?>
                    
                        <div class="card card-compras ">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="mb-1 letra-card-compras">FECHA DE COMPRA</p>
                                    <p class="fw-bold"><?= ucfirst($fecha) ?></p>
                                    <span class="badge estado-venta"><?= $compra['estado_venta'] ?></span>
                                    <p class="mt-2">#<?= $compra['venta_id'] ?></p>
                                </div>
                                <div class="text-end">
                                    <p class=" letra-card-compras">TOTAL</p>
                                    <p class="fw-bold letra-card-compras">$ <?= number_format($compra['total_venta'], 2, ',', '.') ?></p>
                                    <a href="<?= base_url('ver-detalle-compra/' . $compra['venta_id']) ?>" class="btn boton-ver-detalle">Ver detalle</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>                  
            </div>
        </div>
    </div>
</main>