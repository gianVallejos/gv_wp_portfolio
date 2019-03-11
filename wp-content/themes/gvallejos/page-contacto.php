<?php
    get_header();
?>

        <section class="contact-section">
                <div class="contact-data-layout">
                    <div class="contact-data">
                        <h2>CONTACT US</h2>
                        <p class="descripcion">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                            The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        
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