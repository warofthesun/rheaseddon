<!--page-contact-->
<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>


<div id="content_area" class="clearfix fullwidth">
	<div class="d-1of2 t-1of2 m-all">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article class="post clearfix">




				<?php the_content(); ?>

			</article> <!-- end .entry -->
		<?php endwhile; // end of the loop. ?>
	</div> <!-- end #main_content -->
	<div class="d-1of2 t-1of2 m-all last-col">side content
	</div>
</div> <!-- end #content_area -->

<?php get_footer(); ?>
