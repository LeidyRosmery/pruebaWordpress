<!DOCTYPE html>
   <html <?php language_attributes(); ?>>
   <head>
     <meta charset="utf-8">
     <title></title>
     <!-- <meta name="viewport" content="width=device-width"> -->
     <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

	<?php wp_head();  ?>

   </head>
   <body>
     <?php $destacada = wp_get_attachment_image_src(get_post_thumbnail_id(),'full'); ?>
     <?php $destacada = $destacada[0]; ?>
     <header class="RenuevaTuCasa-banner__wrapper" style="background-image:url(<?php echo $destacada;?>)">
       <div class="letter">
           <p>RENUEVA</p>
           <p class="title"> TU CASA </p>
           <p>¡Llegó el momento de inspirarte y darle un nuevo look a casa! Decoración, estilos, colecciones exclusivas, tips e inspiración para tus espacios.</p>
       </div>
       <div class="scroll-indicator hidden-xs hidden-sm">
           <div href="#title-post" class="btn-mouse ">
               <span class="mouse-movement"></span>
           </div>
       </div>
   </header>

     <?php include(TEMPLATEPATH. '/menu.php');?>
       </section>
