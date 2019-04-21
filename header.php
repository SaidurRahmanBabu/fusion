<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

  <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->

          <a href="index.html" class="navbar-brand">

            <?php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              if ( has_custom_logo() ) {
                 ?>
                  <img src="<?php echo esc_url($logo[0]); ?>">
                 <?php     
              } 
              else {
                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
              }
            ?>
            
          </a>    

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            
            <!-- main menu -->
            <?php get_template_part('template-part/common/main-menu'); ?>

          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      <?php get_template_part('template-part/common/hero'); ?>
      <!-- Hero Area End -->

    </header>