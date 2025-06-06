<main>
  <div class="container mt-4 mb-4 d-flex justify-content-center">
    <div class="card" style="width:75%;">
      <div class="card-header text-center">
            <h2 class="titulo-form-crud">Editar Usuario</h2>
        </div>

      <form action="<?= site_url('actualizar/' . $usuario['id']) ?>" method="post">
         <div class="card-body">
            <div class="mx-2 my-2">
              <label class="titulo-form ps-2 pb-1">Nombre</label>
              <input type="text" name="nombre" class="form-control" value="<?= esc($usuario['nombre']) ?>">
            </div>

            <div class="mx-2 my-2">
              <label class="titulo-form ps-2 pb-1">Apellido</label>
              <input type="text" name="apellido" class="form-control" value="<?= esc($usuario['apellido']) ?>" >
            </div>

            <div class="mx-2 my-2">
              <label class="titulo-form ps-2 pb-1">DNI</label>
              <input type="text" name="dni" class="form-control" value="<?= esc($usuario['dni']) ?>" >
            </div>

            <div class="mx-2 my-2">
              <label class="titulo-form ps-2 pb-1">Teléfono</label>
              <input type="text" name="telefono" class="form-control" value="<?= esc($usuario['telefono']) ?>" >
            </div>

            <div class="mx-2 my-2">
              <label class="titulo-form ps-2 pb-1">Fecha de nacimiento</label>
              <input type="text" name="fecha_nacimiento" class="form-control" value="<?= esc($usuario['fecha_nacimiento']) ?>" >
            </div>

            <div class="mx-2 my-2">
              <label class="titulo-form ps-2 pb-1">Correo electrónico </label>
              <input type="email" name="email" class="form-control" value="<?= esc($usuario['email']) ?>" >
            </div>

            <div class="mx-2 my-2">
              <label class="titulo-form ps-2 pb-1">Usuario </label>
              <input type="text" name="usuario" class="form-control" value="<?= esc($usuario['usuario']) ?>" >
            </div>

            <div class="mx-2 my-2">
              <label class="titulo-form ps-2 pb-1">Perfil ID </label>
              <input type="number" name="perfil_id" class="form-control" value="<?= esc($usuario['perfil_id']) ?>" >
            </div>

            <div class="d-flex justify-content-end mb-3">
              <button type="submit" class="btn btn-crud guardar mx-3 mt-3 py-1 px-2">Actualizar Usuario</button>
              <a href="<?= base_url('/crud-usuarios') ?>" class="btn btn-crud volver mx-3 mt-3 py-1 px-2">Cancelar</a>
            </div>
          </div>
      </form>
    </div>
  </div>
</main>
