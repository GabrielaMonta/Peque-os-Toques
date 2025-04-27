<main>
    <div class="container my-4">
        <div class="row">
            <!-- Detalle productos-->
            <div class="col-12 col-md-8">
                <h4 class="titulo-micompra">Mi compra</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="titulos-resumen">Producto</th>
                            <th class="titulos-resumen">Cantidad</th>
                            <th class="titulos-resumen">Subtotal</th>
                            <th class="titulos-resumen">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/calzado.png" alt="Producto" style="width: 50px; height: auto;">
                                    <div class="ms-2">
                                        <strong>Producto 1</strong>
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
                        <tr>
                            <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/img/calzado.png" alt="Producto" style="width: 50px; height: auto;">
                                <div class="ms-2">
                                <strong>Producto 2</strong><br>
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
            <div class="col-md-4">
                <div class="card card-resumen p-3">
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
                        <a href="#" class="btn boton-ver-carrito">Iniciar pago</a>
                        <a href="<?php echo base_url('catalogo-todo');?>" class="btn boton-seguir-comprando">Seguir comprando</a>
                    </div>
                </div>
            </div>

  </div>
</div>