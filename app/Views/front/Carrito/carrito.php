<main>
    <div class="container my-4">
        <div class="row">
            <!-- Detalle productos-->
            <div class="col-12 col-md-8 ">
                <h4 class="titulo-micompra">Mi carrito</h3>
                <table class="table">
                    <thead>
                        <tr style= "border-bottom: 1px solid #bfc86a; margin: 0">
                            <th class="titulos-resumen">Producto</th>
                            <th class="titulos-resumen">Cantidad</th>
                            <th class="titulos-resumen">Subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($cart->contents())): ?>
                            <?php foreach ($cart->contents() as $item): ?>
                            <tr style= "border-bottom: 1px solid #bfc86a; margin: 0">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="<?= base_url($item['options']['img']) ?>" alt="Producto" style="width: 50px; height: auto;">
                                        <div class="ms-2">
                                            <strong><?= esc(ucfirst ($item['name'])) ?></strong>
                                            <br>Color: <?= esc(ucfirst ($item['options']['color'])) ?>
                                            <br>Talle: <?= esc(ucfirst ($item['options']['nota'])) ?>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">1</td>
                                <td class="align-middle col-1"><?= number_format($item['price'], 2, ',', '.') ?></td>
                                <td class="align-middle text-center">    <form method="post" action="<?= base_url('carrito-eliminar') ?>">
                                        <input type="hidden" name="rowid" value="<?= esc($item['rowid']) ?>">
                                        <button type="submit" class="btn-trash">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>                                
                            </tr>
                        <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="text-center">El carrito está vacío.</p>
                                <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <!-- Columna del resumen de compra -->
            <div class="col-12 col-md-4 ">
                <div class="card card-resumen p-3 ms-0">
                    <h5 class="card-title titulo-resumen">Resumen</h5>
                    
                    <hr style= "border: 1px solid #bfc86a; margin: 0">
                    


                    <div class="d-flex justify-content-between">
                        <strong>Total</strong>
                        <strong>$<?= number_format($cart->total(), 2, ',', '.') ?></strong>
                    </div>

                    <div class="pie-carrito">
                        <?php if (session()->get('logged_in') && session()->get('perfil_id') == 2): ?>
                        <!-- Cliente logueado -->
                            <a href="<?= base_url('iniciar-pago'); ?>" class="btn boton-ver-carrito">Iniciar pago</a>
                        <?php else: ?>
                        <!-- No cliente o no logueado: mostrar botón para abrir login -->
                        <button class="btn boton-ver-carrito" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Iniciar pago
                        </button>
                    <?php endif; ?>
                            <a href="<?php echo base_url('catalogo-todo');?>" class="btn boton-seguir-comprando">Seguir comprando</a>
                    </div>
                </div>
            </div>

  </div>
</div>