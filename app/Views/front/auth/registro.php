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

      <div class="modal-body mb-0">
            <form>
                <div class="mt-1">
                    <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                    <input type="email" class="form-control input-auth" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control input-auth" id="exampleInputPassword1">
                </div>
                <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label">Repetir Contraseña</label>
                    <input type="password" class="form-control input-auth" id="exampleInputPassword1">
                </div>
                <div class="d-flex flex-column align-items-center botones-modal mt-3">
                    <button type="submit" class="btn btn-primary boton-inicio">Registrarse</button>
                    <button type="button" class="btn btn-primary boton-registro">
                    <i class="bi bi-google mb-0"></i> Continuar con google
                    </button>
                </div>
            </form>
      </div>
        
        <div class="modal-footer justify-content-center border-1 mb-1">
            <div class="text-center text-footer-modal mb-0">
                    <span>¿Ya tenes cuenta?</span>
            </div>
            <div class="d-flex flex-column flex-md-row gap-2 w-100 justify-content-center">
                <button type="button" class="btn btn-primary boton-registro" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Iniciar Sesion</button>
            </div>
      </div>
    </div>
  </div>
</div>