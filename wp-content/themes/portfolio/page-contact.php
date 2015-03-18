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
      
      <div class="contact_main clearfix">
        <div class="contact_description">
          <?php the_content(); ?>
        </div><!--END .contact_description-->
        
        <div class="contact_form">
          <?php the_field('contact_form') ?>
        </div><!--END .contact_form-->
      </div> <!--END .contact_main-->

    <?php endwhile; // end the loop?>
  </div> <!-- END .container -->
</div> <!-- END .main -->

<?php get_footer(); ?>