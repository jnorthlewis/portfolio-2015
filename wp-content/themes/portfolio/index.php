<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <?php get_sidebar(); ?>

    <div class="content_blog">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--END .content_blog_index -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>