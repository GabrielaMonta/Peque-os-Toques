<?php $seccion = 'cuenta'; ?>

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
                    <li><a class="<?= $seccion == 'tarjetas' ? 'activo' : '' ?>" href="<?php echo base_url('tarjetas'); ?>">Tarjetas</a></li>
                    <li><a href="<?php echo base_url('logout'); ?>">Cerrar sesión</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-9 ">
                <h3 class="titulo-micompra">Perfil</h3>

                <div class="card card-resumen p-3 ms-0">
                    <div class="card-body">
                        <form method="post" action="<?= base_url('cliente-actualizar-perfil') ?>">
                            <input type="hidden" name="id" value="<?= esc($usuario['id']) ?>">

                                <div>
                                    <label class="letra-perfil" for="nombre">Nombre</label>
                                    <input class="input-editar-perfil" name="nombre" type="text" value="<?= esc($usuario['nombre']) ?>">
                                </div>
                                <br>
                                <div>
                                    <label class="letra-perfil" for="apellido">Apellido</label>
                                    <input class="input-editar-perfil"  name="apellido" type="text" value="<?= esc($usuario['apellido']) ?>">
                                </div>
                                <br>
                                <div>
                                    <label class="letra-perfil" for="dni">DNI</label>
                                    <input class="input-editar-perfil"  name="dni" type="text" value="<?= esc($usuario['dni']) ?>">
                                </div>
                                <br>
                                <div>
                                    <label class="letra-perfil" for="telefono">Teléfono</label>
                                    <input class="input-editar-perfil"  name="telefono" type="text" value="<?= esc($usuario['telefono']) ?>">
                                </div>
                                <br>
                                <div>
                                    <label class="letra-perfil" for="fecha_nacimiento">Fecha de nacimiento</label>
                                    <input class="input-editar-perfil"  name="fecha_nacimiento" type="text" value="<?= esc($usuario['fecha_nacimiento']) ?>">
                                </div>
                                <br>
                                <div>
                                    <label class="letra-perfil" for="email" >Email <span class="obligatorio">*</span></label>
                                    <input class="input-editar-perfil"  type="email" name="email"  value="<?= esc($usuario['email']) ?>">
                                

                                </div>
                                <br>
                                <div>
                                    <label class="letra-perfil" for="usuario">Usuario</label>
                                    <input class="input-editar-perfil" name="usuario" type="text" value="<?= esc($usuario['usuario']) ?>">
                                </div>
                                <br>

                                <div class="d-flex justify-content-end mb-3">
                                    <button type="submit" class="btn btn-crud guardar mx-3 mt-3 py-1 px-2">Actualizar Usuario</button>
                                    <a href="<?= base_url('/cuenta') ?>" class="btn btn-crud volver mx-3 mt-3 py-1 px-2">Cancelar</a>
                                </div>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>