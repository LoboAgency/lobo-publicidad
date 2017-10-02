<?php get_header('home') ?>
<?php the_post() ?>
    <section id="home">
        <div class="slider">
            <?php masterslider(1); ?>
            <div id="loading"></div>        
        </div>
        <div class="logo container-fluid">
            <div class="content">
                <img src="<?php echo get_template_directory_uri() ?>/library/images/logo.svg">
                <nav><?php wp_nav_menu([ 'container' => false, 'menu' => __( 'The Main Home', 'bonestheme' ), 'theme_location' => 'home-nav' ]); ?></nav>
            </div>
            <a href="#casos" class="nav"><div class="ico-arrow"><img src="<?php echo get_template_directory_uri() ?>/library/images/icons/ico-arrow-down.png" alt=""></div></a>
        </div>
        <section id="casos">
            <div class="filter">
                <div class="logo-filter">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/library/images/logo-header.svg">
                </div>
                <ul>
                    <li><a class="control" data-filter="all">Todos</a></li>
                    <li><a class="control" data-filter=".green">Conceptos</a></li>
                    <li><a class="control" data-filter=".blue">Digital</a></li>
                    <li><a class="control" data-filter=".pink">Branding</a></li>
                </ul>
            </div>
            <div class="content"  data-ref="mixitup-container" >
                <?php $cases = get_field('cases') ?>
                <?php foreach ($cases as $key => $case): ?>
                    <?php $name = $case['name'] ?>
                    <?php $img = $case['img'] ?>
                    <?php $link = $case['link'] ?>
                    <?php $id = $case['cat'] ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no-padding item <?php echo $id ?>" data-ref="mixitup-target">
                        <figure class="snip1321" style="background: url(<?php echo $img ?>) center no-repeat;">
                            <figcaption>
                                <h4><?php echo $name ?></h4>
                            </figcaption><a href="<?php echo $link ?>"></a>
                        </figure>
                    </div>
                <?php endforeach ?>
                <a href="#home" id="scrolltop" class="ico-top"><div class="ico-arrow"><img src="<?php echo get_template_directory_uri() ?>/library/images/icons/ico-arrow-down.png" alt=""></div></a>
            </div>
        </section>
    </section>
<?php get_footer() ?>