 <!-- Pie de página -->
 <footer class="mt-5" style="background-color: #bfc86a;">
        <div class="container-p1">
                <div class="row">
                    <!-- Newsletter -->
                    <div class="col-12 col-md-5  mb-3 ">
                        <h6 class = "footer-news me-4 ms-5 ">Newsletter</h6>
                        <p class="letra-footer me-4 ms-5">Suscribete a nuestro newsletter.<br> Recibe novedades, descuentos y lanzamientos exclusivos.</p>
                        <form class="form-suscription  me-5 ms-5">
                            <input type="email" class="input-email" placeholder="Su e-mail" required>
                        </input>
                            <button type="submit" class="boton-ok">Suscribirme</button>
                        </form>
                    </div>
                    
                    <div class="col-12 col-md-3 mb-3 "> </div>
                    <!-- Horarios -->
                    <div class="col-12 col-md-4 mb-3">
                        <h6 class = "footer-hora me-3 ms-5">Horarios de atención</h6>
                        <p class="letra-footer me-3 ms-5">Lunes a viernes de 17 a 21hs.<br>Sábados y domingos de 9 a 21hs.</p>
                    </div>
                </div>
            
            <!-- Redes sociales centradas -->
            <div class="text-center pt-1">
                <a href="#" class="text-dark me-3"><i class="bi bi-whatsapp fs-4"style="color: #9da53a;"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-facebook fs-4"style="color: #9da53a;"></i></a>
                <a href="#" class="text-dark "><i class="bi bi-instagram fs-4"style="color: #9da53a;"></i></a>
            </div>
            <h4 class="footer-consulta ms-0 ">¿Tienes alguna otra duda o sugerencia? 
                <a href="<?= site_url('contacto'); ?>" class="resaltado"> Contactanos </a>
            </h4> 
            <div class="text-center mb-3">
            <button type="button" class="btn btn-link text-dark" data-bs-toggle="modal" data-bs-target="#terminosModal">
                Términos y Condiciones
            </button>
            </div>
        
        </div>
        <div class= "container-p2">
            <p class="creditos">Copyright © 2025 |<b> Desarrolladoras Web:</b> 
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ivbianca25@gmail.com" class="creditos"> Isasi Vitale Bianca Ailín  -  </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=gabrielaam201@gmail.com" class="creditos"> Montanaro Gabriela Antonella </a>
            </p>
        </div>
    </footer>
        <!-- Modal de Términos y Condiciones -->
        <div class="modal fade" id="terminosModal" tabindex="-1" aria-labelledby="terminosModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg"> <!-- Responsivo y con scroll -->
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="terminosModalLabel">Términos y Condiciones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body" style="text-align: justify;">
                <p>Bienvenido/a a nuestro sitio web. Al utilizar nuestros servicios y realizar compras en nuestra tienda online, aceptás los siguientes Términos y Condiciones. Te recomendamos leerlos detenidamente.</p>
                
                <h6>1. Aceptación de los términos</h6>
                <p>El acceso y uso de este sitio web están sujetos a estos Términos y Condiciones, a nuestra Política de Privacidad y a todas las leyes aplicables. Al utilizar este sitio, aceptás estos términos en su totalidad.</p>

                <h6>2. Modificaciones</h6>
                <p>Nos reservamos el derecho de actualizar o modificar estos Términos y Condiciones en cualquier momento sin previo aviso. Es tu responsabilidad revisar esta sección regularmente.</p>

                <h6>3. Productos y servicios</h6>
                <p>Todos los productos ofrecidos están sujetos a disponibilidad. Las imágenes son ilustrativas y pueden diferir del producto real.</p>

                <h6>4. Precios</h6>
                <p>Los precios están expresados en pesos argentinos e incluyen impuestos, salvo que se indique lo contrario. Nos reservamos el derecho de cambiar precios sin previo aviso.</p>

                <h6>5. Compras</h6>
                <p>Al realizar una compra, te comprometés a proporcionar información verdadera y actualizada. La aceptación de un pedido depende de la validación de stock y disponibilidad.</p>

                <h6>6. Envíos</h6>
                <p>Los envíos se realizan a la dirección proporcionada. No somos responsables de errores causados por datos incorrectos.</p>

                <h6>7. Devoluciones y cambios</h6>
                <p>Podés realizar cambios o devoluciones dentro de 10 días desde la recepción, siempre que el producto esté en perfecto estado y en su empaque original.</p>

                <h6>8. Propiedad intelectual</h6>
                <p>Todo el contenido del sitio pertenece a Pequeños Toques o a sus proveedores y está protegido por leyes de propiedad intelectual.</p>

                <h6>9. Protección de datos</h6>
                <p>Respetamos tu privacidad. La información que nos brindes será tratada según nuestra Política de Privacidad.</p>

                <h6>10. Responsabilidad</h6>
                <p>No nos responsabilizamos por daños derivados del uso o imposibilidad de uso de este sitio web.</p>

                <h6>11. Jurisdicción</h6>
                <p>Estos términos se rigen por las leyes de Argentina. Cualquier conflicto será resuelto ante los tribunales de la ciudad de Formosa.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
        </div>

    <?= view('back/auth/login') ?>
    <?= view('back/auth/registro') ?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
   
  </body>
</html>