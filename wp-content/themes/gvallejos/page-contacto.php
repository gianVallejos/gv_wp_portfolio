<?php
    get_header();
?>

        <section class="contact-section">
                <div class="contact-data-layout">
                    <div class="contact-data">
                        <h2>¿EMPEZAMOS UN PROYECTO?</h2>
                        <p class="contact-descripcion">Si tienes alguna idea para un proyecto o alguna consulta, escríbeme y me pondré en contacto contigo lo más rápido posible.</p>
                        
                        <?php echo do_shortcode('[contact-form-7 id="103" title="Mi contact form"]'); ?>
                        
                    </div>
                </div>
                <div class="contact-image">
                    <v-contact-map map-url="https://maphub.net/embed/48091?button=0" />
                </div>
        </section>

<?php
    get_footer();
?>