<section class="RenuevaTuCasa__menu__wrapper">
    <div class="title-section text-center text-center">
        <p>Inspírate por </p>
        <p>ambientes</p>
    </div>
      <?php
      $args = array(
        'post_type' => 'RenuevaTuCasa_slider' ,
        'post_per_page' => 4
      );
      $loop = new WP_Query($args);
      if($loop->have_posts()): ?>
        <div class="slider-menu">
          <?php
            while($loop->have_posts()) : $loop -> the_post(); ?>
          <div class="item-menu">
              <a class="" href="#">
                  <div class="wrapper-icon-menu">
                    <?php
                      the_post_thumbnail($loop -> ID,['class' => 'img-responsive ', 'title' => 'Feature image']);
                    ?>
                  </div>
                  <p class="text-center"><?php the_title(); ?></p>
              </a>
          </div>
          <?php
            endwhile;
          ?>


        </div>
      <?php
      endif;
      ?>

</section>
