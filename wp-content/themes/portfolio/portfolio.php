<?php 
//Template Name: Portfolio
 ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
    		<?php 
    			$portfolioArgument = array("post_type" => "portfolio");
    			$portfolioQuery = new WP_Query($portfolioArgument);
    			if($portfolioQuery->have_posts()){
    				while($portfolioQuery->have_posts()){
    					$portfolioQuery->the_post();
    					?>
    					<h1><?php the_title(); ?></h1>
    					<?php
    				}
    			}

    		 ?>
    </div> <!--/.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>