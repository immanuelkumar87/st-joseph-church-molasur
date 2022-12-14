<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>St-Joseph</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Gallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:500i&amp;display=swap">
    <!-- gallery section -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500i,700,800" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,900" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendor/swiper/swiper-bundle.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/costom_style.css">
    <!-- Favicon-->
    <!-- <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/img/favicon.png"> -->
    <?php wp_head(); ?>
  </head>
  <body class="scrollspy-example" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" tabindex="0">
  	<!-- social link -->
  	<div class="social">
<div class="container">
  <div class="row">
    <div class="col-sm-10" style="text-align: left;" >
    	 <ul class="social-network social-circle">
    	<li>
    	<a href="#" class="icomail" title="gmail"><i class="fas fa-envelope"></i></a></li>
		<span class="elementor-icon-list-text">sjcmolasur@gmail.com</span>&nbsp;&nbsp;
       &nbsp;&nbsp;
		<li><a href="#" class="icomobile" title="Mobile"><i aria-hidden="true" class="fas fa-mobile-alt"></i></a></li>
	<span class="elementor-icon-list-text"> +91 80  25539985</span></ul>
	 </div>
    <div class="col-sm-2" style="text-align: right;">
<!-- &nbsp;&nbsp;&nbsp;&nbsp; -->
         <ul class="social-network social-circle">
          <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#" class="icoyoutube" title="Youtube"><i class="fab fa-youtube"></i></a></li>
        </ul>
 </div>
  </div>
</div></div>

  	<!-- banner section -->
  	<div class="banner" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/molasurbanner.jpg)">
   </div>
  	<!-- banner section  end-->
  	<!-- menu section -->

<div class="mainmenu">
	<nav class="navbar navbar-expand-md">
<div class="container">
	 <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        </div>
	</nav>
</div>

    </header>
