<main>
    <div class="container my-4">
        <div class="row">
            <!-- Detalle productos-->
            <div class="col-12 col-md-8 ">
                <h4 class="titulo-micompra">Mi compra</h3>
                <table class="table">
                    <thead>
                        <tr style= "border-bottom: 1px solid #bfc86a; margin: 0">
                            <th class="titulos-resumen">Producto</th>
                            <th class="titulos-resumen">Cantidad</th>
                            <th class="titulos-resumen">Subtotal</th>
                            <th class="titulos-resumen">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style= "border-bottom: 1px solid #bfc86a; margin: 0">
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/productos/zapato1.jpeg" alt="Producto" style="width: 50px; height: auto;">
                                    <div class="ms-2">
                                        <strong>Stiletto Vizzano</strong>
                                        <br>Color
                                        <br>Talle
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">1</td>
                            <td class="text-center">$1234,56</td>
                            <td class="text-center">$1234,56  
                            <button class="bi bi-trash"></button></i></td>
                        </tr>
                        <tr style= "border-bottom: 1px solid #bfc86a; margin: 0">
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/productos/indu1.jpeg" alt="Producto" style="width: 50px; height: auto;">
                                    <div class="ms-2">
                                    <strong>Blazer</strong><br>
                                    Color<br>
                                    Talle
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">1</td>
                            <td class="text-center">$1234,56</td>
                            <td class="text-center">$1234,56  
                            <button class="bi bi-trash"></button></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Columna del resumen de compra -->
            <div class="col-12 col-md-4 ">
                <div class="card card-resumen p-3 ms-0">
                    <h5 class="card-title titulo-resumen">Resumen de compra</h5>
                    
                    <hr style= "border: 1px solid #bfc86a; margin: 0">
                    
                    <div class="d-flex justify-content-between mt-2">
                        <span>Subtotal</span>
                        <span>$1234,56</span>
                    </div>

                    <div class="d-flex justify-content-between">
                        <strong>Total</strong>
                        <strong>$1234,56</strong>
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