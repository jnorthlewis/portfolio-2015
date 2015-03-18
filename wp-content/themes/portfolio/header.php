<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  
  <!-- GOOGLE FONTS -->
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic' rel='stylesheet' type='text/css' />

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />

  <!-- FLEXSLIDER -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/flexslider.css" />
 
  <!-- ANIMATE.CSS -->
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" />

  <!-- SITE STYLES -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


<header class="top clearfix">
  
  <nav class="main_nav clearfix">
  <div class="navicon clearfix">
    <a href="#" class="burg"><i class="fa fa-navicon"></i></a>
  </div>
    <h2 class="logo is_hidden"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h2>
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </nav>

</header><!-- header.top -->

