<?php

register_nav_menus(array(
  'menu' => 'Menu ambientes',
));
function add_myStyles(){
 wp_enqueue_style('style',get_stylesheet_uri());
// imprime directorio de la hoja de estilos
 wp_enqueue_style('main',get_stylesheet_directory_uri() . '/css/main.css');
 wp_enqueue_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
 wp_enqueue_style('carrousel','https://unpkg.com/flickity@2/dist/flickity.min.css');
 wp_enqueue_script('jquery');
 // wp_enqueue_script('bootstrapjs','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array('jquery'),'3.3.6',true);
wp_enqueue_script('bootstrapjs','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
wp_enqueue_script('carrouseljs','https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js');
}

// hook me permite meter mi codigo en wordpress
add_action('wp_enqueue_scripts', 'add_myStyles');
?>
