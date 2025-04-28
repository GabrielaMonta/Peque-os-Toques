<main>
    <div class="container my-4">
        <div class="row">
            <!-- Detalle productos-->
            <div class=" col-12 col-md-8 ">
                <h4 class="titulo-micompra">Mi compra</h3>
                <p class="titulo-pasos"><span style= "color:  #9da53a"> Paso 1</span>/ Completa tus datos</p>
                <form >
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="nombre">Nombre <span class="obligatorio">*</span></label>
                            <br><input class="input-facturacion" id="nombre" type="text" placeholder="" required>
                            <br>
                            <label for="provincia">Provincia <span class="obligatorio">*</span></label>
                            <br><input class="input-facturacion" id="provincia" type="text" placeholder="" required>
                            <br>
                            <label for="dirección">Calle <span class="obligatorio">*</span></label>
                            <br><input class="input-facturacion" id="dirección" type="text" placeholder="" required>
                            <br>
                            <label for="correo-electrónico">Correo Electrónico <span class="obligatorio">*</span></label>
                            <br><input class="input-facturacion" id="correo-electrónico" type="email" placeholder="" required>
                            <br>
                            <label for="piso-dpto">Piso/Departamento</label>
                            <br><input class="input-facturacion" id="piso-dpto" type="text" placeholder="" >

                        </div>
                        <div class="col-12 col-md-6">
                        <label for="nombre">Apellido <span class="obligatorio">*</span></label>
                            <br><input class="input-facturacion" id="apellido" type="text" placeholder="" required>
                            <br>
                            <label for="localidad">Provincia <span class="obligatorio">*</span></label>
                            <br><input class="input-facturacion" id="localidad" type="text" placeholder="" required>
                            <br>
                            <label for="número">Calle <span class="obligatorio">*</span></label>
                            <br><input class="input-facturacion" id="número" type="text" placeholder="" required>
                            <br>
                            <label for="código-postal">Código Postal <span class="obligatorio">*</span></label>
                            <br><input class="input-facturacion" id="código-postal" type="email" placeholder="" required>
                            <br>
                            <label for="teléfono">Teléfono <span class="obligatorio">*</span></label>
                            <br><input class="input-facturacion" id="teléfono" type="text" placeholder="" required>
                            
                        
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
                    
                    <div class= "card container-card-producto row g-0">
                        <div class="card-body card-body-producto col-sm-5 d-flex flex-column ">
                            <h6 class="card-title ">Stiletto Vizzano</h6>
                            <div class="row d-flex  p-0 ">
                                <div class="col-12 col-sm-6  card-text justify-content-start  mb-0">Color:</div>
                                <div class="col-12 col-sm-6 card-text mb-0">Talle:</div>
                            </div>
                        </div> 

                        <div class="card-body card-body-precio col-12 col-sm-2">
                            <p class="card-text ">$1234,56</p>
                        </div>
                    </div>

                    <div class= "card container-card-producto row g-0">
                        <div class="card-body card-body-producto col-sm-5 d-flex flex-column ">
                            <h6 class="card-title ">Blazer</h6>
                            <div class="row d-flex  p-0 ">
                                <div class="col-12 col-sm-6  card-text justify-content-start  mb-0">Color:</div>
                                <div class="col-12 col-sm-6 card-text mb-0">Talle:</div>
                            </div>
                        </div> 

                        <div class="card-body card-body-precio col-12 col-sm-2">
                            <p class="card-text ">$1234,56</p>
                        </div>
                    </div>
                
                    <div class="d-flex justify-content-between mt-3">
                        <span>Subtotal</span>
                        <span>$1234,56</span>
                    </div>
                

                    <div class="d-flex justify-content-between ">
                        <strong>Total</strong>
                        <strong>$1234,56</strong>
                    </div>

                </div>
            </div> 
        </div>
    </div>
</main>