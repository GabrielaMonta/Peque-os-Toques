<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
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
        <h4 class="modal-title" id="registerModalLabel">
          Registrate con correo y contraseña
        </h4>
      </div>

        
        <?php $validation = \Config\Services::validation();
         if (session('validation')) {
          $validation = session('validation'); 
        }?>
          
        <form action="<?= site_url('enviar-form') ?>" method="post">
           <?=csrf_field();?>  <!-- genera un campo oculto o token de seguridad -->

          <?php if(!empty (session() -> getFlashdata('fail'))):?>
          <div class = "alert alert-danger"><?=session() -> getFlashdata('fail');?> </div>
          <?php endif ?>
          <?php if(!empty (session() -> getFlashdata('success'))):?>
            <div class = "alert alert-danger"><?=session() -> getFlashdata('success');?> </div>
          <?php endif?>

          <div class="modal-body mb-0">
            <div class="mt-1">
                <label for="email" class="form-label">Correo electronico</label>
                <input type="email" name="email" class="form-control input-auth" id="email" aria-describedby="emailHelp" value="<?= old('email') ?>">
                <div class="invalid-feedback" id="error-email"></div>
                   <!-- Error -->
                <?php if($validation->getError('email')){?>
                    <div class='alert alert-danger mt-2'>
                      <?=$error = $validation->getError('email'); ?>
                  </div>
                <?php } ?>
              </div>
            <div class="mb-1">
                <label for="pass" class="form-label">Contraseña</label>
                <input type="password"  name="pass" class="form-control input-auth" id="pass">
                <div class="invalid-feedback d-block" id="error-pass"></div>
                 <!-- Error -->
                <?php if($validation->getError('pass')){?>
                    <div class='alert alert-danger mt-2'>
                      <?=$error = $validation->getError('pass'); ?>
                  </div>
                <?php } ?>
            </div>
            <div class="mb-1">
                <label for="pass_confirm" class="form-label">Repetir Contraseña</label>
                <input type="password" name="pass_confirm" class="form-control input-auth" id="pass_confirm">
                <div class="invalid-feedback d-block" id="error-pass_confirm"></div>
                 <!-- Error -->
                <?php if($validation->getError('pass_confirm')) { ?>
                    <div class='alert alert-danger mt-2'>
                      <?=$error = $validation->getError('pass_confirm'); ?>
                  </div>
                <?php } ?>
            </div>
            <div class="d-flex flex-column align-items-center botones-modal mt-3">
              <button type="submit" id="enviarRegistro"  class="btn btn-primary boton-inicio ">Registrarse</button>
            </div>
          </div>
        </form>
        
      <div class="modal-footer justify-content-center border-1 mb-1 text-center">
        <div class="text-center text-footer-modal mb-0 w-100">
          <span>¿Ya tenés cuenta?</span>
        </div>
        <div class="d-flex flex-column flex-md-row gap-2 w-100 justify-content-center text-center mt-2">
          <button type="button" class="btn btn-primary btn-inicio-alternativo" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">
            Iniciar Sesión
          </button>
        </div>
      </div>
    </div>
  </div>
</div>


