<?php get_header() ?>
<?php /* Template Name: Plantilla Landing */ ?>
<?php the_post() ?>
    <section id="main">
        <section id="landing">
            <div class="header">
                <?php $img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>
                <div class="bg-header" style="background: url(<?php echo $img ?>) 50% 0px fixed no-repeat"></div>
                <a href="#cases" class="nav-int"><div class="ico-arrow"><img src="<?php echo get_template_directory_uri() ?>/library/images/icons/ico-arrow-down.png" alt=""></div></a>
            </div>
            <div class="container" id="cases">
                <div class="description-case wow fadeInUp"><?php the_field('description_ppal') ?></div>
                <div id="planning">
                    <div class="planning-title wow fadeInUp">PLANEACIÓN</div>
                    <div class="row">
                        <div class="col-lg-offset-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="file">
                                <div class="file-title wow fadeInUp">Objetivos</div>
                                <div class="file-description wow fadeInUp"><?php echo the_field('objetives') ?></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="file">
                                <div class="file-title wow fadeInUp">Concepto</div>
                                <div class="file-description wow fadeInUp"><?php echo the_field('concept') ?></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="file scope">
                                <div class="file-title wow fadeInUp">Alcance</div>
                                <div class="file-description wow fadeInUp"><?php echo the_field('scope') ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="desing">
                    <div class="desing-title wow fadeInUp">DISEÑO</div>
                    <div class="process">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="process wow fadeInLeft">Procesos</div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <?php $imgs = get_field('process') ?>
                                <?php foreach ($imgs as $key => $img): ?>
                                    <?php $image = $img['img'] ?>
                                    <div class="img wow fadeInUp"><img class="img-responsive" src="<?php echo $image ?>" alt="Diseños"></div>
                                <?php endforeach ?>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="colors">
                                    <img class="img-responsive wow fadeInUp" src="<?php echo get_field('colors') ?>" alt="Paleta de colores">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="graphy">
                                    <?php $graphys = get_field('graphy') ?>
                                    <?php foreach ( $graphys as $graphy ): ?>
                                        <?php $img = $graphy['img_grafic'] ?>
                                        <img class="img-responsive wow fadeInUp" src="<?php echo $img ?>" alt="Gráfica">
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $iframe = get_field('iframe') ?>
                <?php if ( !empty($iframe) ): ?>
                    <div id="iframe"><?php echo $iframe ?></div>
                <? endif ?>
                <?php $keysvisual = get_field('keys_visual') ?>
                <?php if ( !empty($keysvisual) ): ?>
                    <div id="keys-visuals">
                        <div class="keys-title wow fadeInLeft">Key Visuals</div>
                        <div class="row">
                            <?php foreach ( $keysvisual as $key => $keyvisual ) : ?>
                                <?php $condition = $keyvisual['position'] ?>
                                <?php $img       = $keyvisual['img'] ?>
                                <?php if (( $key % 2 ) == 0): ?>
                                    <div class="img right"><img data-toggle="modal" data-target="#keyvisual" class="img-responsive wow fadeInright" src="<?php echo $img ?>" alt=""></div>
                                <?php else: ?>
                                    <div class="img left"><img data-toggle="modal" data-target="#keyvisual" class="img-responsive wow fadeInleft" src="<?php echo $img ?>" alt=""></div>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                <? endif ?>
                <?php $webs = get_field('web') ?>
                <?php if ( !empty($webs) ) : ?>
                    <div id="screanshots">
                        <?php foreach ( $webs as $web ) : ?>
                            <?php $screanshots = $web['screanshots'] ?>
                            <div class="screanshots"><img class="img-responsive  wow fadeInUp" src="<?php echo $screanshots ?>" alt=""></div>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                <?php $desings = get_field('desing') ?>
                <?php if ( !empty($desings) ) : ?>
                    <div id="screanshots-atl">
                        <?php foreach ( $desings as $desing ) : ?>
                            <?php $img = $desing['img'] ?>
                            <div class="screanshots"><img class="img-responsive  wow fadeInUp" src="<?php echo $img ?>" alt=""></div>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
            </div>
            <?php $footers = get_field('footer') ?>
            <?php if ( !empty($footers) ) : ?>
                <div id="footer">
                    <?php foreach ( $footers as $footer ) : ?>
                        <?php $img = $footer['img_footer'] ?>
                        <img class="img-responsive" src="<?php echo $img ?>" alt="">
                        <!-- <div class="footer" style="background: url('<?php echo $img ?>')50% 0px fixed no-repeat;"></div> -->
                    <?php endforeach ?>
                </div>
            <?php endif ?>
        </section>
    </section>
<?php get_footer() ?>