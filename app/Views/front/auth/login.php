
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

      <div class="modal-body">
        <form>
          <div class="mt-1 mb-1">
            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
            <input type="email" class="form-control input-auth" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-1">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control input-auth" id="exampleInputPassword1">
            <div id="passwordHelp" class="fo-textrm">¿Olvidaste tu contraseña?</div>
          </div>
          <div class="d-flex flex-column align-items-center botones-modal">
            <button type="submit" class="btn btn-primary boton-inicio">Iniciar sesion</button>
            <button type="button" class="btn btn-primary boton-registro" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Registrarse</button>
          </div>
        </form>
      </div>
      <div class="divisor-texto text-center">
            <span>o sino</span>
      </div>
      <div class="modal-footer justify-content-center border-0 mb-3">
        <div class="d-flex flex-column flex-md-row gap-2 w-100 justify-content-center">
          <button type="button" class="btn btn-primary btn-inicio-alternativo">
            <i class="bi bi-google me-2"></i> Ingresar con Google
          </button>
          <button type="button" class="btn btn-primary btn-inicio-alternativo">
            <i class="bi bi-key me-2"></i> Código de acceso rápido
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
