<?php

/*
	Template Name: Contact Page
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div class="title_holder">
      	<h2 class="contact_title"><span><?php the_title(); ?></span></h2>
      </div>
      <?php the_content(); ?>
      <?php the_field('contact_form') ?>

    <?php endwhile; // end the loop?>
  </div> <!-- END .container -->
</div> <!-- END .main -->

<?php get_footer(); ?>