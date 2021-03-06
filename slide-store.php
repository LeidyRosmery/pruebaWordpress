<section class="RenuevaTuCasa-content">
  <section class="RenuevaTuCasa__shops__wrapper" data-border="no-border">
    <div class="title-section text-center">
        <p>renovamos nuestras</p>
        <p>tiendas</p>
    </div>
    <p class="summary">Visítanos y vive la nueva experiencia Sodimac. Encontrarás una amplia variedad de productos en todas las categorías, además de ideas y proyectos que inspiren a renovar tu casa.</p>
    <div class="store">
        <div class="r-table row margin-0">
            <div class="c-table col-xs-12  col-md-8 padding-0 ">
            <?php
            $args = array(
              'post_type' => 'RenuevaTuCasa_store' ,
              'post_per_page' => 4
            );
            $the_query = new WP_Query( $args ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <div class="slider-imgStore">
	          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="item-img">
                <?php the_post_thumbnail($the_query -> ID,['class' => 'img-responsive ', 'title' => 'Feature image']);?>
              </div>
	          <?php endwhile; ?>
            </div>
	          <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            </div>
            <div class="c-table col-xs-12 col-md-4 padding-0">
              <?php
              $args2 = array(
                'post_type' => 'RenuevaTuCasa_text' ,
                'post_per_page' => 4
              );
                $the_query2 = new WP_Query( $args2 ); ?>
                <?php if ( $the_query2->have_posts() ) : ?>
                <div class="slider-infoStore">
                    <?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); ?>
                    <div class="item-info">
                      <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                  </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="list-store">
        <div class="row margin-0">
            <div class="head-list col-xs-12 col-md-3 padding-0 ">
                <span>nos hemos</span>
                <span>renovado en</span>
            </div>
            <div class="col-xs-12 col-md-9 padding-0 ">
                <div class="row margin-0">
                    <div class="item-info-store col-xs-6 col-md-2 padding-0" data-toggle="modal" data-target="#store1">
                        <p class="title-store">Sodimac</p>
                        <p class="district-store">san miguel</p>
                        <div class="btn-detail hidden-md hidden-lg">
                            <span class="">ver más </span><span class="plus-btn">+</span>
                        </div>
                        <div class="tooltip-info ">
                            <div class="row margin-0">
                                <div class="col-xs-2 padding-0">
                                    <img class="lg-store img-responsive" src="<?php bloginfo('template_url')?>/img/tiendas/icons/white/mark.png" alt="">
                                </div>
                                <div class="inf-detail col-xs-10 padding-0">
                                    <p>Av.Javier PRado Este 4200</p>
                                    <p>Primer Nivel, Tienda 254,</p>
                                    <p>Santigo de Surco</p>
                                </div>
                                <div class="col-xs-2 padding-0">
                                    <img class="lg-store img-responsive" src="/static/categorias/contenidoEstatico/landings/landingRenuevaCasa2018/assets/img/tiendas/icons/white/time.png" alt="">
                                </div>
                                <div class="inf-detail col-xs-10 padding-0">
                                    <p>Lun. a vie. 7:30 am - 10:00 pm</p>
                                    <p>Dom. 8:00 am - 10:00 pm</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item-info-store br-left col-xs-6 col-md-2 padding-0 " data-toggle="modal" data-target="#store2">
                        <p class="title-store">Sodimac</p>
                        <p class="district-store">javier prado</p>
                        <div class="btn-detail hidden-md hidden-lg">
                            <span class="">ver más </span><span class="plus-btn">+</span>
                        </div>
                        <div class="tooltip-info">
                            <div class="row margin-0">
                                <div class="col-xs-2 padding-0">
                                    <img class="lg-store img-responsive" src="img" alt="">
                                </div>
                                <div class="inf-detail col-xs-10 padding-0">
                                    <p>Av.Javier PRado Este 4200</p>
                                    <p>Primer Nivel, Tienda 254,</p>
                                    <p>Santigo de Surco</p>
                                </div>
                                <div class="col-xs-2 padding-0">
                                    <img class="lg-store img-responsive" src="/static/categorias/contenidoEstatico/landings/landingRenuevaCasa2018/assets/img/tiendas/icons/white/time.png" alt="">
                                </div>
                                <div class="inf-detail col-xs-10 padding-0">
                                    <p>Lun. a vie. 7:30 am - 10:00 pm</p>
                                    <p>Dom. 8:00 am - 10:00 pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-info-store col-xs-6 col-md-2 padding-0 " data-toggle="modal" data-target="#store3">

                        <p class="title-store">Sodimac</p>
                        <p class="district-store">jockey plaza</p>
                        <div class="btn-detail hidden-md hidden-lg">
                            <span class="">ver más </span><span class="plus-btn">+</span>
                        </div>
                        <div class="tooltip-info">
                            <div class="row margin-0">
                                <div class="col-xs-2 padding-0">
                                    <img class="lg-store img-responsive" src="/static/categorias/contenidoEstatico/landings/landingRenuevaCasa2018/assets/img/tiendas/icons/white/mark.png" alt="">
                                </div>
                                <div class="inf-detail col-xs-10 padding-0">
                                    <p>Av.Javier PRado Este 4200</p>
                                    <p>Primer Nivel, Tienda 254,</p>
                                    <p>Santigo de Surco</p>
                                </div>
                                <div class="col-xs-2 padding-0">
                                    <img class="lg-store img-responsive" src="/static/categorias/contenidoEstatico/landings/landingRenuevaCasa2018/assets/img/tiendas/icons/white/time.png" alt="">
                                </div>
                                <div class="inf-detail col-xs-10 padding-0">
                                    <p>Lun. a vie. 7:30 am - 10:00 pm</p>
                                    <p>Dom. 8:00 am - 10:00 pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-info-store br-left col-xs-6 col-md-2 padding-0 " data-toggle="modal" data-target="#store4">
                        <p class="title-store">Sodimac</p>
                        <p class="district-store">angamos</p>
                        <div class="btn-detail hidden-md hidden-lg">
                            <span class="">ver más </span><span class="plus-btn">+</span>
                        </div>
                        <div class="tooltip-info">
                            <div class="row margin-0">
                                <div class="col-xs-2 padding-0">
                                    <img class="lg-store img-responsive" src="/static/categorias/contenidoEstatico/landings/landingRenuevaCasa2018/assets/img/tiendas/icons/white/mark.png" alt="">
                                </div>
                                <div class="inf-detail col-xs-10 padding-0">
                                    <p>Av.Javier PRado Este 4200</p>
                                    <p>Primer Nivel, Tienda 254,</p>
                                    <p>Santigo de Surco</p>
                                </div>
                                <div class="col-xs-2 padding-0">
                                    <img class="lg-store img-responsive" src="/static/categorias/contenidoEstatico/landings/landingRenuevaCasa2018/assets/img/tiendas/icons/white/time.png" alt="">
                                </div>
                                <div class="inf-detail col-xs-10 padding-0">
                                    <p>Lun. a vie. 7:30 am - 10:00 pm</p>
                                    <p>Dom. 8:00 am - 10:00 pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-info-store col-xs-6 col-md-2 padding-0 " data-toggle="modal" data-target="#store5">

                        <p class="title-store">Sodimac</p>
                        <p class="district-store">mega plaza</p>
                        <div class="btn-detail hidden-md hidden-lg">
                            <span class="">ver más </span><span class="plus-btn">+</span>
                        </div>
                        <div class="tooltip-info">
                            <div class="row margin-0">
                                <div class="col-xs-2 padding-0">
                                    <img class="lg-store img-responsive" src="/static/categorias/contenidoEstatico/landings/landingRenuevaCasa2018/assets/img/tiendas/icons/white/mark.png" alt="">
                                </div>
                                <div class="inf-detail col-xs-10 padding-0">
                                    <p>Av.Javier Prado Este 4200</p>
                                    <p>Primer Nivel, Tienda 254,</p>
                                    <p>Santigo de Surco</p>
                                </div>
                                <div class="col-xs-2 padding-0">
                                    <img class="lg-store img-responsive" src="/static/categorias/contenidoEstatico/landings/landingRenuevaCasa2018/assets/img/tiendas/icons/white/time.png" alt="">
                                </div>
                                <div class="inf-detail col-xs-10 padding-0">
                                    <p>Lun. a vie. 7:30 am - 10:00 pm</p>
                                    <p>Dom. 8:00 am - 10:00 pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-info-store br-left col-xs-6 col-md-2 padding-0 br-right " data-toggle="modal" data-target="#store6">
                        <p class="title-store">Sodimac</p>
                        <p class="district-store">centro de lima</p>
                        <div class="btn-detail hidden-md hidden-lg">
                            <span class="">ver más </span><span class="plus-btn">+</span>
                        </div>
                        <div class="tooltip-info">
                            <div class="row margin-0">
                                <div class="col-xs-2 padding-0">
                                    <img class="lg-store img-responsive" src="/static/categorias/contenidoEstatico/landings/landingRenuevaCasa2018/assets/img/tiendas/icons/white/mark.png" alt="">
                                </div>
                                <div class="inf-detail col-xs-10 padding-0">
                                    <p>Av.Javier PRado Este 4200</p>
                                    <p>Primer Nivel, Tienda 254,</p>
                                    <p>Santigo de Surco</p>
                                </div>
                                <div class="col-xs-2 padding-0">
                                    <img class="lg-store img-responsive" src="/static/categorias/contenidoEstatico/landings/landingRenuevaCasa2018/assets/img/tiendas/icons/white/time.png" alt="">
                                </div>
                                <div class="inf-detail col-xs-10 padding-0">
                                    <p>Lun. a vie. 7:30 am - 10:00 pm</p>
                                    <p>Dom. 8:00 am - 10:00 pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
</section>
