<?php

/*
	Template Name: Custom Home Page
*/

get_header();  ?>

<div class="main">

  <?php $headerImage = get_post_thumbnail_id(); 
    $headerImageUrl = wp_get_attachment_image_src( $headerImage, 'full', true );
    $headerIMG = $headerImageUrl[0];
  ?>
  
  <header class="homepage_header" style="background-image: url('<?php echo $headerIMG ?>')">
    <div class="innerWrapper">
      
      <div class="title_header">    
        <h1> 
          <?php the_field('name'); ?>
        </h1>
        <h2>
          <?php the_field('tagline'); ?>
        </h2>
        <p class="animated pulse"><i class="fa fa-arrow-circle-o-down fa-2x"></i></p>
      </div><!--END .title_header-->
    
    </div><!--END .innerWrapper-->
  </header><!--END .homepage_header"-->

  <div class="container">


    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <?php endwhile; // end the loop?>

    <!-- === PORTFOLIO PIECES === -->
    
    <div class="title_holder">
      <h2 class="strikethrough">
        <span><?php the_field('section_title_1'); ?></span>
      </h2> <!--END .section_title-->
    </div> <!--END .title_holder-->

    <?php $portfolioPosts = new WP_Query(array(
    	'post_type' => 'portfolio', //portfolio pieces
    	'posts_per_page' => 3
    )); ?>

  	<section class="project_area clearfix" id="project_area">
      <?php if($portfolioPosts->have_posts()) while($portfolioPosts->have_posts()) : $portfolioPosts ->the_post(); ?>
    		<section class="project_box">
          <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('home_project_piece'); ?></a>
    			<h2 class="project_title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
    			<p class="short_desc"><?php the_field('short_description'); ?></p>
          <p class="demo"><a href="<?php the_field('live_demo'); ?>" target="_blank">live demo</a></p>
    		</section><!--END .project_box-->
    	<?php endwhile; //end custom loop ?>
    	<?php wp_reset_postdata(); ?>
    </section><!--END .project_area-->
     
    <div class="title_holder">
       <h2 class="strikethrough">
         <span><?php the_field('section_title_2'); ?></span>
       </h2> <!--END .section_title-->
     </div> <!--END .title_holder-->

    <!-- ABOUT PARAGRAPH -->
    <div class="about_paragraph">
      <?php the_content(); ?>
    </div><!--END .about_paragraph-->

    <section class="about_area clearfix">
      <?php if(have_posts()) while(have_posts()) : the_post(); ?>  
      <?php while(has_sub_field('skills')): ?>

    <!-- SKILLS & INTERESTS -->        
      <div class="about_info">
        <?php 
          $icon= get_sub_field('icon');
          $url = $icon['url'];
          // spit the svg onto the page
          echo file_get_contents($url);
        ?>
        <?php //pre_r($icon); ?>
        <h3><?php the_sub_field('skill_name'); ?></h3>
        <p><?php the_sub_field('skill_description') ?></p>
      </div><!--END .about_info-->
            
      <?php endwhile; ?>
      <?php endwhile; //end custom loop ?>
    </section><!--END section_about-->


  </div> <!-- END .container -->
</div> <!-- END .main -->

<?php get_footer(); ?>