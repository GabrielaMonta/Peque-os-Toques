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
                <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#modalTerminos" style="font-size: 0.9rem;">
                    Términos y condiciones
                </a>
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
        <div class="modal fade" id="modalTerminos" tabindex="-1" aria-labelledby="modalTerminosLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header" style="background-color: #bfc86a; border-bottom: none;">
                <h5 class="modal-title" id="modalTerminosLabel" style="color: #333; font-weight: bold;">Términos y Condiciones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body" style="padding: 1.5rem; font-size: 0.95rem; color: #555;">
                <p>Bienvenido a nuestra tienda online. Al utilizar nuestro sitio web, aceptás nuestros términos y condiciones. Nos reservamos el derecho de actualizar o modificar estos términos en cualquier momento sin previo aviso.</p>
                <p>Todos los productos están sujetos a disponibilidad. Los precios pueden cambiar sin previo aviso.</p>
                <p>El uso de este sitio implica la aceptación de nuestras políticas de compra, envío y devolución. Te recomendamos leerlas detenidamente antes de realizar una compra.</p>
                <p>Para más detalles o consultas, podés contactarnos a través de nuestros canales de comunicación.</p>
            </div>
            <div class="modal-footer" style="border-top: none; padding-bottom: 1rem;">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #bfc86a; border: none;">Cerrar</button>
            </div>
            </div>
        </div>
        </div>

    <?= view('front/auth/login') ?>
    <?= view('front/auth/registro') ?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>