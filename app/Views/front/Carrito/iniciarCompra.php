<main>
    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('mensaje') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
    <?php endif; ?>

    <div class="container my-4">
        <form action = "<?= base_url('/carrito-comprar') ?>" method = "post">

            <div class="row">
                
                <div class=" col-12 col-md-8 ">
                    <h3 class="titulo-micompra">Mi compra</h3>
                    <!-- Detalle datos-->
                    <div class="row">
                        <p class="titulo-pasos"><span style= "color:  #9da53a"> Paso 1</span> / Completa tus datos</p>
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
                                <label for="calle">Calle <span class="obligatorio" >*</span></label>
                                <br><input class="input-facturacion" name="calle" type="text" required value="<?= esc($direccion['calle'] ?? '') ?>">
                            </div><br>
                            <div> 
                                <label for="provincia">Provincia <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="provincia" type="text" required value="<?= esc($direccion['provincia'] ?? '') ?>">
                            </div><br>
                            <div>
                                <label for="email">Correo Electrónico <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="email" type="email" required value="<?= esc($usuario['email']) ?>">
                            </div><br>
                            <div>
                                <label for="piso/dpto">Piso/Departamento</label>
                                <br><input class="input-facturacion" name="piso/dpto" type="text" value="<?= esc($direccion['piso/dpto'] ?? '') ?>" >
                            </div><br>  
                        </div>
                        <div class="col-12 col-md-6">
                            <div> 
                                <label for="nombre">Apellido <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="apellido" type="text" required value="<?= esc($usuario['apellido']) ?>">
                            </div><br>
                            <div>
                                <label for="localidad">Localidad <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="localidad" type="text" required value="<?= esc($direccion['localidad'] ?? '') ?>">
                            </div><br>
                            <div> 
                                <label for="altura">Altura <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="altura" type="text" required value="<?= esc($direccion['altura'] ?? '') ?>">
                            </div><br>
                            <div> 
                                <label for="cp">Código Postal <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" name="cp" type="text" required value="<?= esc($direccion['cp'] ?? '') ?>">
                            </div><br>
                            <div> 
                                <label for="teléfono">Teléfono <span class="obligatorio">*</span></label>
                                <br><input class="input-facturacion" id="teléfono" type="text" required value="<?= esc($usuario['telefono'] ?? '') ?>">
                            </div><br>
                            <div>
                                <label for="observaciones">Información adicional</label>
                                <br><input class="input-facturacion" name="observaciones" type="text" value="<?= esc($direccion['observaciones'] ?? '') ?>" >
                            </div><br>                            
                        </div>
                        <div class = "row">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" id="guardar-direccion" name="guardar-direccion" >
                             
                            
                                <label for="guardar-direccion"> ¿Desea guardar los datos de dirección ingresados?</label><br>
                            </div>
                        </div>
                    </div>

                    <!-- Paso 2: Medio de entrega -->
                    <p class="titulo-pasos mb-0"><span style="color: #9da53a">Paso 2</span> / Entrega</p>
                    <p class="leyenda-pasos">Elegí tu método de envío</p>
                    <div class="row g-3"> 
                        <div class="col-12">
                            <div class="card card-envio metodo-envio-card">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="medio_entrega" id="envio_correo" value="Correo" checked>
                                    <label class="form-check-label" for="envio_correo">                                            
                                        <strong>Correo / Transporte</strong><br>
                                        Al finalizar la compra te enviaremos por WhatsApp las opciones de envío.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-envio metodo-envio-card">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="medio_entrega" id="envio_retiro" value="Retiro">
                                    <label class="form-check-label" for="envio_retiro">                                                
                                        <strong>Retiro en tienda</strong><br>
                                            Cuando tu pedido esté listo te avisaremos por WhatsApp para que lo retires.<br>
                                            📍 Hipólito Yrigoyen, entre San Vicente y Los Andes<br>
                                            📱 3718 658018
                                    </label>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Paso 3: Método de pago -->
                    <p class="titulo-pasos mb-0 mt-4"><span style="color: #9da53a">Paso 3</span> / Pago</p>
                    <p class="leyenda-pasos">Elegí tu método de pago</p>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="metodo_pago" id="pago_gocuotas" value="GoCuotas" checked>
                            <label class="form-check-label" for="pago_gocuotas">
                                GoCuotas (con débito o prepaga en hasta 3 cuotas sin interés) – Te enviaremos link de pago correspondiente por WhatsApp.
                            </label>
                        </div>
                        
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="metodo_pago" id="pago_credito" value="Credito" >
                            <label class="form-check-label" for="pago_credito">
                                Tarjeta de crédito(en hasta 3 cuotas sin interés) – Te enviaremos link de pago correspondiente por WhatsApp.
                            </label>
                        </div>
                        
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="metodo_pago" id="pago_debito" value="Debito">
                            <label class="form-check-label" for="pago_debito">
                                Tarjeta de débito (15% OFF) – Te enviaremos link de pago correspondiente por WhatsApp.
                            </label>
                        </div>
                        
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="metodo_pago" id="pago_transferencia" value="Transferencia">
                            <label class="form-check-label" for="pago_transferencia">
                                Transferencia bancaria (15% OFF) – Te enviaremos los datos de la cuenta al finalizar la compra.
                            </label>
                        </div>
                        
                        <div class="form-check mt-3 d-none" id="opcion_efectivo">
                            <input class="form-check-input" type="radio" name="metodo_pago" id="pago_efectivo" value="Efectivo">
                            <label class="form-check-label" for="pago_efectivo">
                                Efectivo (15% OFF) – Se abona en tienda al retirar el pedido.
                            </label>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="boton-finalizarcompra" >Finalizar compra</button>
                        </div>
                </div>
            
        </form>
                
                    

                <!-- Columna del resumen de compra -->
                <div class="col-12 col-md-4 ms-0">
                    <div class="card card-resumen-compra p-3 ms-0"  >
                        <h5 class="card-title titulo-resumen">Resumen de compra</h5>
                        <hr style= "border: 1px solid #bfc86a; margin: 0">
                            
                        <!-- Bloque con scroll interno -->
                        <div style="max-height: 300px; overflow-y: auto;">
                            <?php if (!empty($cart->contents())): ?>
                                <?php foreach ($cart->contents() as $item): ?>    
                                    <div class="card container-card-producto row g-0">
                                        <div class="card-body card-body-producto col-sm-5 d-flex flex-column">
                                            <h6 class="card-title"><?= esc(ucfirst($item['name'])) ?></h6>
                                            <div class="row d-flex p-0">
                                                <div class="col-12 col-sm-7 card-text justify-content-start mb-0">
                                                    Color: <?= esc(ucfirst($item['options']['color'])) ?>
                                                </div>
                                                <div class="col-12 col-sm-7 card-text mb-0">
                                                    Talle: <?= esc(ucfirst($item['options']['nota'])) ?>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="card-body card-body-precio col-12 col-sm-2">
                                            <p class="card-text">$<?= number_format($item['price'], 2, ',', '.') ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="text-center">El carrito está vacío.</p>
                            <?php endif; ?>
                                
                        </div> <!-- Fin del scroll interno -->

                        <?php $totalLista = $cart->total(); ?>
                        <div id="resumen-precios">
                            <div class="d-flex justify-content-between mt-2">
                                <strong>Total (precio de lista)</strong>
                                <strong id="precio-lista">$<?= number_format($totalLista, 2, ',', '.') ?></strong>
                            </div>
                            <div class="d-flex justify-content-between mt-2 letra-card-compras d-none " id="descuento-aplicado">
                                <strong >Total con 15% OFF</strong>
                                <strong id="precio-descuento">
                                    $<?= number_format($totalLista * 0.85, 2, ',', '.') ?>
                                </strong>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
    <script>//Este scrip muestra u oculta la opcion del pago en efectivo segun el medio que elija. 
    //si elije "retiro en tienda" se muestra el efectivo, de lo contrario se oculta
        document.addEventListener('DOMContentLoaded', function () {
            const radioEnvioCorreo = document.getElementById('envio_correo');
            const radioEnvioRetiro = document.getElementById('envio_retiro');
            const opcionEfectivo = document.getElementById('opcion_efectivo');

            function actualizarOpcionEfectivo() {
                if (radioEnvioRetiro.checked) {
                    opcionEfectivo.classList.remove('d-none');// Mostrar opción de pago "Efectivo"
                } else {
                    opcionEfectivo.classList.add('d-none');// Ocultar si no es retiro
                    document.getElementById('pago_efectivo').checked = false;// Desselecciona si estaba marcada
                }
            }

            radioEnvioCorreo.addEventListener('change', actualizarOpcionEfectivo);
            radioEnvioRetiro.addEventListener('change', actualizarOpcionEfectivo);

            actualizarOpcionEfectivo(); // Se ejecuta al cargar la página
        });
    </script>
    <script>//Actualiza el total de la compra dependiendo el metodo de pago 
    //si elije "transferencia", "debito" o "efectivo" se aplica el 15off
        document.addEventListener('DOMContentLoaded', function () {
            const radiosPago = document.querySelectorAll('input[name="metodo_pago"]');
            const precioLista = <?= $cart->total(); ?>;
            const precioListaElem = document.getElementById('precio-lista');
            const precioDescuentoElem = document.getElementById('precio-descuento');
            const descuentoBox = document.getElementById('descuento-aplicado');

            function actualizarResumen() {
                const metodo = document.querySelector('input[name="metodo_pago"]:checked').value;
                const aplicaDescuento = ['Transferencia', 'Debito', 'Efectivo'].includes(metodo);

                if (aplicaDescuento) {
                    const precioConDescuento = (precioLista * 0.85).toFixed(2);
                    precioDescuentoElem.innerText = "$" + precioConDescuento.replace('.', ',');
                    descuentoBox.classList.remove('d-none');
                } else {
                    descuentoBox.classList.add('d-none');
                }
            }

            radiosPago.forEach(radio => {
                radio.addEventListener('change', actualizarResumen);
            });

            actualizarResumen(); 
        });
    </script>


</main>