<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content_single">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="flexslider">
            <ul class="slides">
          <?php while(has_sub_field('images')) :  ?>
              <li>
                <?php $image = get_sub_field('image'); ?> 
                <img src="<?php echo $image ['sizes']['single_piece']; ?>" alt="<?php echo $image['title']; ?>">
              </li>
          <?php endwhile; //end images loop ?>
            </ul>
        </div>

        <h2 class="single_project_title"><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <p class="link_button clearfix"><a href="<?php the_field('live_demo'); ?>" target="_blank">live demo</a></p>
        <p class="link_button clearfix"><a href="<?php the_field('github'); ?>" target="_blank">github</a></p>
        
        <!-- <div class="skills">
          <?php $skills = get_the_terms($post->ID, 'skills used', '', ''); ?>
          <?php foreach ($skills as $skill) {
            echo "<span class='skill'>" . $skill->name . "</span>";
          } ?>
        </div> -->
        
        <div id="nav-below" class="navigation clearfix">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- END .content_single-->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>