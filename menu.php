<section class="RenuevaTuCasa__menu__wrapper">
    <div class="title-section text-center text-center">
        <p>Inspírate por </p>
        <p>ambientes</p>
    </div>
    <div class="slider-menu">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'menu',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'navbar',
        'menu_class' => 'nav navbar-nav navbar-right'
      ));
      ?>
        <div class="item-menu">
            <a class="" href="#">
                <div class="wrapper-icon-menu">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/img/menu/1-sala.jpg" alt="">
                </div>
                <p class="text-center">sala</p>
            </a>
        </div>
        <div class="item-menu">
            <a href="#">
                <div class="wrapper-icon-menu">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/img/menu/2-comedor.jpg" alt="">
                </div>
                <p class="text-center">Comedor </p>
            </a>
        </div>
        <div class="item-menu">
            <a href="#">
                <div class="wrapper-icon-menu">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/img/menu/3-cocina.jpg" alt="">
                </div>
                <p class="text-center">Cocina</p>
            </a>
        </div>
        <div class="item-menu">
            <a href="#">
                <div class="wrapper-icon-menu">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/img/menu/4-dormitorio.jpg" alt="">
                </div>
                <p class="text-center">Dormitorio</p>
            </a>
        </div>
        <div class="item-menu">
            <a href="#">
                <div class="wrapper-icon-menu">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/img/menu/5-banos.jpg" alt="">
                </div>
                <p class="text-center">Baños</p>
            </a>
        </div>
        <div class="item-menu">
            <a href="#">
                <div class="wrapper-icon-menu">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/img/menu/6-terraza.jpg" alt="">
                </div>
                <p class="text-center">Terraza</p>
            </a>
        </div>
        <div class="item-menu">
            <a href="#">
                <div class="wrapper-icon-menu">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/img/menu/7-lavanderia.jpg" alt="">
                </div>
                <p class="text-center">Lavandería</p>
            </a>
        </div>
        <div class="item-menu">
            <a href="#">
                <div class="wrapper-icon-menu">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/img/menu/8-oficina.jpg" alt="">
                </div>
                <p class="text-center">Oficina</p>
            </a>
        </div>
    </div>
</section>
