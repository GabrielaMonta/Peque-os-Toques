<main>
    <div class="container mt-5">
        <h3 class="titulo-crud">Atender Consulta</h3>
        <div class="card">
            <div class="card-body">
                <p><strong>Nombre:</strong> <?= esc($consulta['nombre']) . ' ' . esc($consulta['apellido']) ?></p>
                <p><strong>Email:</strong> <?= esc($consulta['email']) ?></p>
                <p><strong>Teléfono:</strong> <?= esc($consulta['telefono']) ?></p>
                <p><strong>Mensaje:</strong> <?= esc($consulta['MENSAJE']) ?></p>

                <form action="<?= base_url('consultas/responder/' . $consulta['id_consulta']) ?>" method="post">
                    <div class="mb-3">
                        <label for="respuesta" class="form-label">Respuesta:</label>
                        <textarea name="respuesta" id="respuesta" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Enviar respuesta</button>
                    <a href="<?= base_url('consultas') ?>" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</main>
