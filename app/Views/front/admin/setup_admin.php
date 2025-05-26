<main>
  <div class="container d-flex justify-content-center">
    <div class="w-100 p-4" style="max-width: 40%; background-color: #fdfdfd; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
      <h5 class="titulo-micompra text-center">Crear primer administrador</h5>

      <form action="<?= site_url('setup/create?token=' . getenv('SETUP_KEY')) ?>" method="post">
        
        <div class="text-center">
          <label class="form-label">Nombre <span class="text-danger">*</span></label>
          <input type="text" name="nombre" class="input-facturacion" required>
        </div>

        <div class="text-center">
          <label class="form-label">Apellido <span class="text-danger">*</span></label>
          <input type="text" name="apellido" class="input-facturacion" required>
        </div>

        <div class="text-center">
          <label class="form-label">Correo electrónico <span class="text-danger">*</span></label>
          <input type="email" name="email" class="input-facturacion" required>
        </div>

        <div class="text-center">
          <label class="form-label">Usuario <span class="text-danger">*</span></label>
          <br><input type="text" name="usuario" class="input-facturacion" required>
        </div>

        <div class="text-center">
          <label class="form-label">Contraseña <span class="text-danger">*</span></label>
          <input type="password" name="pass" class="input-facturacion" required>
        </div>

        <div class="text-center">
            <button type="submit" class="boton-finalizarcompra">Crear administrador</button>
        </div>
    

      </form>
    </div>
  </div>
</main>
