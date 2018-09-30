<?php
register_nav_menus(array(
  'menu' => 'Menu ambientes',
));
function add_myStyles(){
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('main',get_stylesheet_directory_uri() . '/css/main.css');
    wp_enqueue_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('carrousel','https://unpkg.com/flickity@2/dist/flickity.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('plugins',get_stylesheet_directory_uri() . '/js/plugins.min.js',array('jquery'),'3.3.2',true);
    wp_enqueue_script('core',get_stylesheet_directory_uri() . '/js/core.min.js',array('jquery'),'3.3.6',true);

}

// hook me permite meter mi codigo en wordpress
add_action('wp_enqueue_scripts', 'add_myStyles');
add_theme_support('post-thumbnails');

function renuevaTuCasa_post_type() {
  register_post_type('RenuevaTuCasa_slider',
   array(
     'labels' => array(
       'name' => __('Carousel'),
       'singular_name' => __('Item'),
       'add_new' => __('Nuevo Item'),
       'add_new_item' => __('Añadir nuevo item'),
       'edit_item' => __('Editar item'),
       'featured_image' => __('Imagen del slide')
     ),
     'public' => true,
     'exclude_from_search' => true,
     'has_archive' => false ,
     'show_in_nav_menus' => false ,
     'menu_icon' => 'dashicons-slides',
     'supports' => array('title' , 'editor' , 'thumbnail')
   )
);
}
add_action('init','renuevaTuCasa_post_type');
?>
