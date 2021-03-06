<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="posts clearfix">
		<!-- ADDING A FEATURE IMAGE -->
		<?php the_post_thumbnail( $size, $attr ); ?> 
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="clearfix">
			
			<h2 class="entry_title clearfix">
	        	<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
	          	<?php the_title(); ?></a>
      		</h2>
      		<p class="post_date"><?php echo get_the_date('F j, Y'); ?></p>

			<section class="entry-content clearfix">
				<!-- CLIPPING BLOG POSTS. SETTINGS ARE IN FUNCTION.PHP -->
				<?php the_excerpt(); ?>
				<?php wp_link_pages( array(
		          'before' => '<div class="page-link"> Pages:',
		          'after' => '</div>'
		        )); ?>
			</section><!-- .entry-content -->

			<footer class="blog_post_footer">
				
				<!-- CATEGORY BUTTON -->
				<!-- <p class="categoryButton"><?php the_category(', '); ?></p> -->
				
				<!-- LIKE BUTTON --> 
				<?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>

		        <!-- <p><?php comments_popup_link('Respond to this post &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?></p> -->
		        <!-- <p class="editButton"><?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p> -->
			</footer>

		</article><!-- #post-## -->
		<?php comments_template( '', true ); ?>
	</div><!--END .posts-->

<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
