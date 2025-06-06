<main>
    <div class="container my-4">
        <div class="row">
            <!-- Detalle cuenta-->
            <div class="col-12 col-md-3 ">
                <h4 class="titulo-micompra">Hola!</h3>
                <ul class="flex-row">
                    <li ><a class="" href="<?php echo base_url('cuenta');?>">Perfil</a> </li>
                    <li ><a class="" href="<?php echo base_url('');?>">Direcciones</a></li>      
                    <li ><a class="" href="<?php echo base_url('');?>">Pedidos</a></li>
                    <li ><a class="" href="<?php echo base_url('');?>">Tarjetas</a></li>
                    <li ><a class="" href="<?php echo base_url('logout');?>">Cerrar sesión</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-9 ">
                <h3 class="titulo-micompra">Perfil</h3>

                <div class="card card-resumen p-3 ms-0">
                    <div class="card-body">
                        <div class="letra-perfil mb-2"><strong>Nombre:</strong> <?= esc($usuario['nombre']) ?> </div>
                        <div class="letra-perfil mb-2"><strong>Apellido:</strong> <?= esc($usuario['apellido']) ?> </div>
                        <div class="letra-perfil mb-2"><strong>DNI:</strong> <?= esc($usuario['dni']) ?> </div>
                        <div class="letra-perfil mb-2"><strong>Teléfono:</strong> <?= esc($usuario['telefono']) ?> </div>
                        <div class="letra-perfil mb-2"><strong>Fecha de nacimiento:</strong> <?= esc($usuario['fecha_nacimiento']) ?> </div>
                        <div class="letra-perfil mb-2"><strong>Email:</strong> <?= esc($usuario['email']) ?> </div>
                        <div class="letra-perfil mb-2"><strong>Usuario:</strong> <?= esc($usuario['usuario']) ?>  </div>
                        
                        <div class="text-end mt-3">
                            <a href="<?php echo base_url('editarPerfil'); ?>" class="btn boton-modificar">
                                Modificar 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>