<?php

/*
	Template Name: Custom Home Page
*/

get_header();  ?>

<div class="main">

  <?php $headerImage = get_post_thumbnail_id(); 
    $headerImageUrl = wp_get_attachment_image_src( $headerImage, 'full', false );
    $headerIMG = $headerImageUrl[0];
  ?>
  
  <header class="homepage_header" style="background-image: url('<?php echo $headerIMG ?>')">
    <div class="container">
      
      <div class="title_header">    
        <h1> 
          <?php the_field('name'); ?>
        </h1>
        <h2>
          <?php the_field('tagline'); ?>
        </h2>
      </div><!--END .title_header-->
    
    </div><!-- END .container -->
  </header><!--END .homepage_header"-->

  <div class="container clearfix">


    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <?php endwhile; // end the loop?>

     
    <div class="title_holder">
      <h2 class="strikethrough">
       <span><?php the_field('section_title_2'); ?></span>
      </h2> <!--END .section_title-->
    </div> <!--END .title_holder-->

    <!-- ABOUT PARAGRAPH -->
    <div class="about_paragraph">
      <?php the_content(); ?>
    </div><!--END .about_paragraph-->

    <!-- PORTFOLIO PIECES -->
    <div class="title_holder">
      <h2 class="strikethrough">
        <span><?php the_field('section_title_1'); ?></span>
      </h2> <!--END .section_title-->
    </div> <!--END .title_holder-->

    <?php $portfolioPosts = new WP_Query(array(
      'post_type' => 'portfolio', //portfolio pieces
      'posts_per_page' => 3,
      "order" => 'DESC',
      "orderby" => 'meta_value_num'
    )); ?>

    <section class="project_area clearfix" id="project_area">
      <?php if($portfolioPosts->have_posts()) while($portfolioPosts->have_posts()) : $portfolioPosts ->the_post(); ?>
        <section class="project_box clearfix">
          
          <div class="project_image">
            <a href="<?php echo get_permalink(); ?>">
              <div class="overlay"></div>
              <?php the_post_thumbnail('home_project_piece'); ?>
            </a> 
          </div> <!--END project_image-->
          
          <div class="project_info">
            <h2 class="project_title clearfix"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="short_desc"><?php the_field('short_description'); ?></p>
            <p class="link_button clearfix"><a href="<?php the_field('live_demo'); ?>" target="_blank">live demo</a></p>
          </div><!-- END .project_info -->
       
        </section><!--END .project_box-->
      <?php endwhile; //end custom loop ?>
      <?php wp_reset_postdata(); ?>
    </section><!--END .project_area-->
   


  </div> <!-- END .container -->
</div> <!-- END .main -->

<?php get_footer(); ?>