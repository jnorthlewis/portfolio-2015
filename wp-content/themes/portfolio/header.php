<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- FAVICON -->

  <!-- GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|PT+Sans+Narrow:700' rel='stylesheet' type='text/css' />

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
  

  <nav class="main_nav">
    <h2 class="logo"><?php bloginfo( 'name' ); ?> </h2>
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </nav>

</header><!-- header.top -->

