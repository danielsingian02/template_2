<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    wp_head();
    ?>
</head>
    <header class="template_2_head">
      <!-- navigation menu -->

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

  <nav class="navbar navbar-light bg-light">
  <div class="container-header clear">
  <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
if ( has_custom_logo() ) {
    echo '<img class="header_logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}
          ?>
          </a>
  </div>
</nav>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="template_2_header_menu">
      
        <?php wp_nav_menu('primary'); ?>
       
        </div>

    </div>
  </div>
</nav>
    </header>

    