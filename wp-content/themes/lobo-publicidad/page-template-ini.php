<?php get_header() ?>
<?php /* Template Name: Plantilla Internas */ ?>
<?php the_post() ?>
    <section id="main">
        <section id="case">
            <div class="container">
                <?php $imgs = get_field('imgs') ?>
                <div class="description">
                    <div class="title"><?php the_title() ?></div>
                    <div class="content"><?php the_content() ?></div>
                </div>
                <div class="row">
                    <?php foreach ($imgs as $img): ?>
                        <?php $imgcase = $img['img'] ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img class="img-responsive" src="<?php echo $imgcase ?>" alt="Imagen - Casos lobo">
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </section>
<?php get_footer() ?>