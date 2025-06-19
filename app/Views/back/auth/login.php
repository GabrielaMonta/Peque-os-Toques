
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header border-0 mt-2 position-relative">
        <button 
          type="button" 
          class="btn-close position-absolute end-0 me-2" 
          data-bs-dismiss="modal" 
          aria-label="Close"
        ></button>
      </div>
      <!-- LOGO centrado grande -->
      <div class="logo-modal">
        <img 
          src="<?= base_url('assets/img/logo.png') ?>" 
          alt="Logo de Pequeños Toques" 
          class="logo-modal-estilo"
        >
      </div>
      <!-- TÍTULO centrado -->
      <div class="titulo-auth mb-2 mt-3">
        <h4 class="modal-title" id="loginModalLabel">
          Ingresar con correo y contraseña
        </h4>
      </div>

       <!-- Servicio de validación de codeigniter -->
      <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success text-center mt-2 mx-3">
              <?= session()->getFlashdata('success') ?>
          </div>
      <?php endif; ?>
      
      <form method="post" action="<?= base_url('/enviar-login') ?>">
      <div class="modal-body">
          <?php if (!empty($msg)): ?>
            <div class="alert alert-danger mt-2 mx-3"><?= esc($msg) ?></div>
          <?php endif; ?>

          <?php if (!empty($validation)): ?>
            <div class="alert alert-danger">
              Por favor, corrige los siguientes errores:
              <ul>
                <?php foreach ($validation->getErrors() as $error): ?>
                  <li><?= esc($error) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>

                <div class="mt-1 mb-4">
                    <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                    <input type="email" name="email"class="form-control input-auth" id="exampleInputEmail1" aria-describedby="emailHelp"value="<?= old('email') ?>">
                  </div>
                  <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" name="pass" class="form-control input-auth" id="exampleInputPassword1">
                    <!-- <div id="passwordHelp" class="mt-1 fo-textrm">¿Olvidaste tu contraseña?</div>-->
                  </div>
                  <div class="mt-4 d-flex flex-column align-items-center botones-modal">
                    <button type="submit" class="btn btn-primary boton-inicio">Iniciar sesion</button>
                    <button type="button" class="btn btn-primary boton-registro" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Registrarse</button>
                  </div>
        </form>
      </div>
    </div>
  </div>
</div>

