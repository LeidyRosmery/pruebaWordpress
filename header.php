    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
      <!-- <meta name="viewport" content="width=device-width"> -->
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/main.css">
      <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php wp_head(); ?>
    </head>
    <body>
      <?php $banner = wp_get_attachment_image_src(get_post_thumbnail_id(),'full'); ?>
      <?php $banner = $banner[0]; ?>

        <section class="RenuevaTuCasa-content">
            <section class="RenuevaTuCasa-banner__wrapper">
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
            </section>
      <?php include(TEMPLATEPATH. '/menu.php');?>
        </section>
    </body>
    </html>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/plugins.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/core.min.js"></script>
