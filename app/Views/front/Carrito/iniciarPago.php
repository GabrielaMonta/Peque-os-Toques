<main>
    <div class="container my-4">
        <div class="row">
            <!-- Detalle productos-->
            <div class=" col-12 col-md-8 ">
                <h3 class="titulo-micompra">Mi compra</h3>
                <p class="titulo-pasos"><span style= "color:  #9da53a"> Paso 1</span>/ Completa tus datos</p>
                <form >
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div>
                                <label for="nombre">Nombre <span class="obligatorio">*</span></label><br>
                                <input class="input-facturacion" name="nombre" type="text"  required value="<?= esc($usuario['nombre']) ?>"> 
                            </div><br>
                            <div>
                                <label for="dni">DNI <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="dni" type="text" required value="<?= esc($usuario['dni']) ?>">
                            </div><br>
                            <div>
                                <label for="calle">Calle <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="calle" type="text" required value="<?= esc($direccion['calle']) ?>">
                            </div><br>
                            <div> 
                                <label for="provincia">Provincia <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="provincia" type="text" required value="<?= esc($direccion['provincia']) ?>">
                            </div><br>
                            <div>
                                <label for="email">Correo Electrónico <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="email" type="email" required value="<?= esc($usuario['email']) ?>">
                            </div><br>
                            <div>
                                <label for="piso/dpto">Piso/Departamento</label>
                                <br><input class="input-facturacion" name="piso/dpto" type="text" value="<?= esc($direccion['piso/dpto']) ?>" >
                            </div><br>
                            
                        </div>
                        <div class="col-12 col-md-6">
                            <div> 
                                <label for="nombre">Apellido <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="apellido" type="text" required value="<?= esc($usuario['apellido']) ?>">
                            </div><br>
                            <div>
                                <label for="localidad">Localidad <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="localidad" type="text" required value="<?= esc($direccion['localidad']) ?>">
                            </div><br>
                            <div> 
                                <label for="altura">Altura <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="altura" type="text" required value="<?= esc($direccion['altura']) ?>">
                            </div><br>
                            <div> 
                                <label for="cp">Código Postal <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="cp" type="text" required value="<?= esc($direccion['cp']) ?>">
                            </div><br>
                            <div> 
                                <label for="teléfono">Teléfono <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" id="teléfono" type="text" required value="<?= esc($usuario['telefono']) ?>">
                            </div><br>
                            <div>
                                <label for="observaciones">Información adicional</label>
                                <br><input class="input-facturacion" name="observaciones" type="text" value="<?= esc($direccion['observaciones']) ?>" >
                            </div><br>
                        
                        </div>
                    </div>
                    <p class="titulo-pasos mb-0"><span style= "color:  #9da53a"> Paso 2</span> / Entrega</p>
                    <p class="leyenda-pasos ">Elegí tu método de envío</p>

                    <p class="titulo-pasos mb-0"><span style= "color:  #9da53a"> Paso 3</span> / Pago</p>
                    <p class="leyenda-pasos">Elegí tu método de pago</p>

                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="boton-finalizarcompra">Finalizar compra</button>
                    </div>
                </form>
                
            </div>

            <!-- Columna del resumen de compra -->
            <div class="col-12 col-md-4 ">
                <div class="card card-resumen p-3 ms-0 mt-4 ">
                    <h5 class="card-title titulo-resumen">Resumen de compra</h5>
                    <hr style= "border: 1px solid #bfc86a; margin: 0">
                    
                        <?php if (!empty($cart->contents())): ?>
                        <?php foreach ($cart->contents() as $item): ?>    
                            <div class= "card container-card-producto row g-0">
                                <div class="card-body card-body-producto col-sm-5 d-flex flex-column ">
                                    <h6 class="card-title "><?= esc(ucfirst ($item['name'])) ?></h6>
                                    <div class="row d-flex  p-0 ">
                                        <div class="col-12 col-sm-7  card-text justify-content-start  mb-0">Color: <?= esc(ucfirst ($item['options']['color'])) ?></div>
                                        <div class="col-12 col-sm-7 card-text mb-0">Talle: <?= esc(ucfirst ($item['options']['nota'])) ?></div>
                                    </div>
                                </div> 

                                <div class="card-body card-body-precio col-12 col-sm-2">
                                    <p class="card-text ">$<?= number_format($item['price'], 2, ',', '.') ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <p class="text-center">El carrito está vacío.</p>
                        <?php endif; ?>

                    <div class="d-flex justify-content-between mt-2 ">
                        <strong>Total</strong>
                        <strong>$<?= number_format($cart->total(), 2, ',', '.') ?></strong>
                    </div>

                </div>
            </div> 
        </div>
    </div>
</main>