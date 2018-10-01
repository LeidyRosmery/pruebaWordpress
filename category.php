<?php
$count = 0;
$numGrid = array(
    0 => "a",
    1 => "b",
    2 => "c",
    3 => "d",
    4 => "e",
    5 => "f"
);
?>
<section class="RenuevaTuCasa-content">
   <section class="RenuevaTuCasa__categories__wrapper " data-tag="section">
    <div class="title-section text-center ">
        <p>Explora por</p>
        <p>categorías</p>
    </div>
    <?php
      $args = array(
        'post_type' => 'RenuevaTuCasa_grid' ,
        'post_per_page' => -1
      );
      $loop = new WP_Query($args);

      if($loop -> have_posts()): ?>
         <div class="grid-categories">
      <?php
      while ( $loop->have_posts() ) : $loop->the_post();
      ?>
        <div class="<?php echo 'item-category area-'. $numGrid[$count]   ?>">
            <?php  echo the_post_thumbnail($loop -> ID);
            ?>
            <div class="wrapper-title text-center">
                <p class="title title-category "> <?php the_title();?></p>
            </div>
        </div>
        <?php $count++;?>
  	<?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

    </div>
    <a class="btn-border btn-border-pnt btnfos-1" href="http://www.sodimac.com.pe/sodimac-pe/content/a2000005">
        <svg>
          <rect x="0" y="0" fill="none" width="100%" height="100%"/>
        </svg> TODAS LAS CATEGORÍAS
        <span class="arrow"></span>
    </a>
</section>
</section>
