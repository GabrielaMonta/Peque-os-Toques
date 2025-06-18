<main>
    <div class="container my-4">
        <div class="text-center">
            <?php if (empty($cart->contents())): ?>
                <h4 class="titulo-micompra">Mi carrito</h4>
                <h4>El carrito está vacío.</h4>
                <p> Para agregar productos hace clic en: </p>
                <a class="btn boton-finalizarcompra" href="<?= base_url('/catalogo-todo') ?>">
                <i class="mt-2"></i>Volver al catalogo
                </a>
            <?php endif; ?>
        </div>

        <?php if (!empty($cart->contents())): ?>
        <div class="row">
            <!-- Detalle productos-->
            <div class="col-12 col-md-8 ">
                <h4 class="titulo-micompra">Mi carrito</h4>
                        <table class="table">
                            <thead>
                                <tr style= "border-bottom: 1px solid #bfc86a; margin: 0">
                                    <th class="titulos-resumen">Producto</th>
                                    <th class="titulos-resumen">Cantidad</th>
                                    <th class="titulos-resumen">Subtotal</th>
                                    <th class="titulos-resumen">Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
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
                                        <td class="align-middle text-center"><?= esc($item['qty']) ?></td>
                                        <td class="align-middle col-1"><?= number_format($item['price'], 2, ',', '.') ?></td>
                                        <td class="align-middle col-1"><?= number_format($item['price']*$item['qty'], 2, ',', '.') ?></td>
                                        <td class="align-middle text-center">    <form method="post" action="<?= base_url('carrito-eliminar') ?>">
                                                <input type="hidden" name="rowid" value="<?= esc($item['rowid']) ?>">
                                                <button type="submit" class="btn-trash">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>                                
                                    </tr>
                                <?php endforeach; ?>       
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
                        <?php if (session()->get('logged_in') && session()->get('perfil_id') == 2 ): ?>
                            <!-- Cliente logueado y con carrito con productos -->
                            <a href="<?= base_url('iniciar-compra'); ?>" class="btn boton-ver-carrito">Iniciar compra</a>
                        <?php else: ?>
                            <!-- No cliente o no logueado -->
                            <button class="btn boton-ver-carrito" data-bs-toggle="modal" data-bs-target="#loginModal">
                                Iniciar pago
                            </button>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>

  </div>
</main>
