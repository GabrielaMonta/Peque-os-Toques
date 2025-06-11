<?php $seccion = 'direcciones'; ?>

<main>
    <div class="container my-4">
        <div class="row">
            <!-- Detalle cuenta-->
            <div class="col-12 col-md-3 ">
                <h4 class="titulo-micompra">Hola!</h3>
                <ul class="vertical-menu">
                    <li><a class="<?= $seccion == 'cuenta' ? 'activo' : '' ?>" href="<?php echo base_url('cuenta'); ?>">Perfil</a></li>
                    <li><a class="<?= $seccion == 'direcciones' ? 'activo' : '' ?>" href="<?php echo base_url('direcciones'); ?>">Direcciones</a></li>
                    <li><a class="<?= $seccion == 'pedidos' ? 'activo' : '' ?>" href="<?php echo base_url('pedidos'); ?>">Pedidos</a></li>
                    <li><a class="<?= $seccion == '' ? 'activo' : '' ?>" href="<?php echo base_url('tarjetas'); ?>">Tarjetas</a></li>
                    <li><a href="<?php echo base_url('logout'); ?>">Cerrar sesión</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-9 ">
                <div class="">
                    <h3 class="titulo-micompra mb-0">Direcciones</h3>
                    <a href="<?= site_url('nuevaDireccion'); ?>" class="btn boton-modificar">Agregar dirección</a>
                </div>

                        <?php if (!empty($direcciones)): ?>
                        <?php foreach ($direcciones as $dir): ?>
                            <div class="card card-resumen p-3 ms-0">
                                <div class="card-body">

                                    <div class="letra-perfil mb-2"><strong>Calle:</strong> <?= esc($dir['calle']) ?> </div>
                                    <div class="letra-perfil mb-2"><strong>Altura:</strong> <?= esc($dir['altura']) ?> </div>
                                    <div class="letra-perfil mb-2"><strong>Piso/Dpto:</strong> <?= esc($dir['piso/dpto']) ?> </div>
                                    <div class="letra-perfil mb-2"><strong>Localidad:</strong> <?= esc($dir['localidad']) ?> </div>
                                    <div class="letra-perfil mb-2"><strong>Provincia:</strong> <?= esc($dir['provincia']) ?> </div>
                                    <div class="letra-perfil mb-2"><strong>Código Postal:</strong> <?= esc($dir['cp']) ?> </div>
                                    <div class="letra-perfil mb-2"><strong>País:</strong> <?= esc($dir['pais']) ?> </div>                            
                                    <div class="letra-perfil mb-2"><strong>Observaciones:</strong> <?= esc($dir['observaciones']) ?> </div>                            

                                    <div class="text-end mt-3">
                                        <a href="<?php echo base_url('editar-direccion/'. $dir['id']); ?>" class="btn boton-modificar">
                                            Modificar 
                                        </a>
                                        <a href="<?php echo base_url('eliminar-direccion/'. $dir['id']); ?>" class="btn boton-modificar">
                                            Eliminar
                                        </a>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <p>No tenés direcciones cargadas.</p>
                        <?php endif; ?>
                    </div>
                       
                    
            </div>
        </div>
    </div>
</main>