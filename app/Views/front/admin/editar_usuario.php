<main>
  <div class="container d-flex justify-content-center">
    <div class="w-100 p-4" style="max-width: 40%; background-color: #fdfdfd; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
      <h5 class="titulo-micompra text-center">Editar Usuario</h5>

      <form action="<?= site_url('actualizar/' . $usuario['id']) ?>" method="post">
        
        <div class="text-center">
          <label class="form-label">Nombre <span class="text-danger">*</span></label>
          <input type="text" name="nombre" class="input-facturacion" value="<?= esc($usuario['nombre']) ?>" required>
        </div>

        <div class="text-center">
          <label class="form-label">Apellido <span class="text-danger">*</span></label>
          <input type="text" name="apellido" class="input-facturacion" value="<?= esc($usuario['apellido']) ?>" required>
        </div>

        <div class="text-center">
          <label class="form-label">Correo electrónico <span class="text-danger">*</span></label>
          <input type="email" name="email" class="input-facturacion" value="<?= esc($usuario['email']) ?>" required>
        </div>

        <div class="text-center">
          <label class="form-label">Usuario <span class="text-danger">*</span></label>
          <input type="text" name="usuario" class="input-facturacion" value="<?= esc($usuario['usuario']) ?>" required>
        </div>

        <div class="text-center">
          <label class="form-label">Perfil ID <span class="text-danger">*</span></label>
          <input type="number" name="perfil_id" class="input-facturacion" value="<?= esc($usuario['perfil_id']) ?>" required>
        </div>

        <div class="text-center mt-3">
          <button type="submit" class="boton-finalizarcompra">Actualizar Usuario</button>
          <a href="<?= base_url('/crud-usuarios') ?>" class="btn btn-secondary mt-2">Cancelar</a>
        </div>

      </form>
    </div>
  </div>
</main>
