<?php $seccion = 'direcciones'; ?>

<main>
    <div class="container my-4">
        <div class="row">
            <!-- Detalle cuenta-->
            <div class="col-12 col-md-3 ">
                <h4 class="titulo-micompra">Hola!</h3>
                <h4 class="titulo-micompra">Hola!</h3>
                <ul class="vertical-menu">
                    <li><a class="<?= $seccion == 'cuenta' ? 'activo' : '' ?>" href="<?php echo base_url('cuenta'); ?>">Perfil</a></li>
                    <li><a class="<?= $seccion == 'direcciones' ? 'activo' : '' ?>" href="<?php echo base_url('direcciones'); ?>">Direcciones</a></li>
                    <li><a class="<?= $seccion == 'pedidos' ? 'activo' : '' ?>" href="<?php echo base_url('pedidos'); ?>">Pedidos</a></li>
                    <li><a class="<?= $seccion == 'tarjetas' ? 'activo' : '' ?>" href="<?php echo base_url('tarjetas'); ?>">Tarjetas</a></li>
                    <li><a href="<?php echo base_url('logout'); ?>">Cerrar sesión</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-9 ">
                <h3 class="titulo-micompra">Direcciones</h3>

                <div class="card card-resumen p-3 ms-0">
                    <div class="card-body">
                    <form method="post" action="<?= base_url('actualizar-direccion/' . $direccion['id']) ?>">
                            <div>
                                <label class="letra-perfil" for="calle">Calle <span class="obligatorio">*</span></label>
                                <input class="input-editar-perfil" name="calle" type="text" value="<?= esc($direccion['calle']) ?>" required>
                            </div><br>
                            <div>
                                <label class="letra-perfil" for="altura">Altura<span class="obligatorio">*</span></label>
                                <input class="input-editar-perfil" name="altura" type="text" value="<?= esc($direccion['altura']) ?>" required>
                            </div><br>
                            <div>
                                <label class="letra-perfil" for="piso/dpto">Piso/dpto</label>
                                <input class="input-editar-perfil" name="piso/dpto" type="text" value="<?= esc($direccion['piso/dpto']) ?>">
                            </div> <br>
                            <div>
                                <label class="letra-perfil" for="localidad">Localidad<span class="obligatorio">*</span></label>
                                <input class="input-editar-perfil" name="localidad" type="text" value="<?= esc($direccion['localidad']) ?>" required>
                            </div> <br>
                            <div>
                                <label class="letra-perfil" for="provincia">Provincia<span class="obligatorio">*</span></label>
                                <input class="input-editar-perfil" name="provincia" type="text" value="<?= esc($direccion['provincia']) ?>" required>
                            </div><br>
                            <div>
                                <label class="letra-perfil" for="cp">Código Postal<span class="obligatorio">*</span></label>
                                <input class="input-editar-perfil" name="cp" type="text" value="<?= esc($direccion['cp']) ?>" required> 
                            </div> <br>
                            <div>
                                <label class="letra-perfil" for="pais">País<span class="obligatorio">*</span></label>
                                <input class="input-editar-perfil" name="pais" type="text" value="<?= esc($direccion['cp']) ?>" required>
                            </div><br>  
                            <div>
                                <label class="letra-perfil" for="observaciones">Observaciones</label>
                                <input class="input-editar-perfil" name="observaciones" type="text" value="<?= esc($direccion['observaciones']) ?>">
                            </div>  <br>
                    
                                <div class="d-flex justify-content-end mb-3">
                                    <button type="submit" class="btn btn-crud guardar mx-3 mt-3 py-1 px-2">Actualizar dirección</button>
                                    <a href="<?= base_url('/direcciones') ?>" class="btn btn-crud volver mx-3 mt-3 py-1 px-2">Cancelar</a>

                                </div>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>