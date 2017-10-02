<?php get_header() ?>
<?php the_post() ?>
    <section id="main">
        <section id="contact">
            <div class="container">
                <div class="description">
                    <?php the_content() ?>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="226" title="Contacto Lobo"]') ?>
            </div>
        </section>
    </section>
<?php get_footer() ?>