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
                    <li><a class="<?= $seccion == 'pedidos' ? 'activo' : '' ?>" href="<?php echo base_url('mis-compras'); ?>">Pedidos</a></li>
                    <li><a href="<?php echo base_url('logout'); ?>">Cerrar sesión</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-9 ">
                <h3 class="titulo-micompra">Direcciones</h3>

                <div class="card card-resumen p-3 ms-0">
                    <div class="card-body">
                        <form method="post" action="<?= base_url('agregar-direccion') ?>">

                            <div class="row">
                                <div class="col-12 col-md-6">

                                    <label for="calle">Calle <span class="obligatorio">*</span></label>
                                    <br><input class="input-direccion" name="calle" type="text" placeholder="" required>
                                    <br>
                                    <label for="piso/dpto">Piso/dpto. </label>
                                    <br><input class="input-direccion" name="piso/dpto" type="text" placeholder="">
                                    <br>
                                    <label for="localidad">Localidad <span class="obligatorio">*</span></label>
                                    <br><input class="input-direccion" name="localidad" type="text" placeholder="" required>
                                    <br>
                                    <label for="pais">Pais <span class="obligatorio">*</span></label>
                                    <br><input class="input-direccion" name="pais" type="text" placeholder="" required>
                                    <br>
                                    
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="altura">Altura <span class="obligatorio">*</span></label>
                                    <br><input class="input-direccion" name="altura" type="text" placeholder="" required>
                                    <br>
                                    <label for="cp">Codigo postal <span class="obligatorio">*</span></label>
                                    <br><input class="input-direccion" name="cp" type="text" placeholder="" required>
                                    <br>
                                    <label for="provincia">Provincia <span class="obligatorio">*</span></label>
                                    <br><input class="input-direccion" name="provincia" type="text" placeholder="" required>
                                    <br>
                                    <label for="observaciones">Observaciones </label>
                                    <br><input class="input-direccion" name="observaciones" type="text" placeholder="">
                                </div>
                             </div>
                    

                                <div class="d-flex justify-content-end mb-3">
                                    <button type="submit" class="btn btn-crud guardar mx-3 mt-3 py-1 px-2">Añadir dirección</button>
                                    <a href="<?= base_url('/direcciones') ?>" class="btn btn-crud volver mx-3 mt-3 py-1 px-2">Cancelar</a>
                                </div>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>