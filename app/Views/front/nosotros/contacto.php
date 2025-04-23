<main>

    <div class="container-contacto row d-flex flex-wrap">
        
        <div class="col-12 col-md-4 mt-5">
                <h4 class="letra-sub-contacto">CONTACTO</h4>
                
                <div class="fila-contacto">
                    <i class="icono-redes bi bi-whatsapp ms-5 fs-2" style= "color:rgb(0, 0, 0);"></i>
                    <p class="parrafos-contacto">3718-658018</p>
                </div>

                <div class="fila-contacto">
                    <i class="icono-redes bi bi-facebook ms-5 fs-2" style="color:rgb(0, 0, 0);"></i>
                    <p class="parrafos-contacto"><a href="https://www.facebook.com/profile.php?id=100062870595052" target="_blank">Pequeños toques</a></p>
                </div>

                <div class="fila-contacto">
                    <i class="icono-redes bi bi-instagram ms-5 fs-2" style="color:rgb(0, 0, 0);"></i>
                    <p class="parrafos-contacto"><a href="https://www.instagram.com" target="_blank">Pequeños toques</a></p>
                </div>
        </div>  

        <div class="col-12 col-md-4 d-none d-md-flex justify-content-center align-items-center ms-4" style="min-height: 200px;">
            <a href="#">
                <img src="assets/img/Pequeños toques t.png" alt="Logo" height="40">
            </a>
        </div>

        <div class="container-formulario-consulta col-12 col-md-3 mt-3 ms-5">
            
            <p class="letra-consulta mt-2">¡Dejanos tu consulta!</p>
                <form action="/enviar-consulta" method="post">
                    <input class="input-nombre form-control mb-0" type="text" name="nombre" placeholder="Tu nombre" required><br><br>
                    <input class="input-emailcon form-control mb-0" type="email" name="email" placeholder="Tu email" required><br><br>
                    <textarea class="input-mensaje form-control mb-0" name="mensaje" placeholder="Tu consulta" required></textarea><br><br>
                    
                    <div style="text-align: right;">
                        <button class="boton-enviarcon" type="submit">Enviar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>