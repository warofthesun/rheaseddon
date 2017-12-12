<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article class="entry post clearfix">
		<?php the_content(); ?>
	</article> <!-- end .entry -->
<?php endwhile; // end of the loop. ?>
