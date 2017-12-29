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
	<div class="d-1of2 t-1of2 m-all last-col">

		<?php

// check if the repeater field has rows of data
if( have_rows('video_clips') ):

 	// loop through the rows of data
    while ( have_rows('video_clips') ) : the_row();


				// get iframe HTML
				$iframe = get_sub_field('video_link');


				// use preg_match to find iframe src
				preg_match('/src="(.+?)"/', $iframe, $matches);
				$src = $matches[1];


				// add extra params to iframe src
				$params = array(
				'showinfo'    => 0,
				'hd'        => 1,
				'autohide'    => 1,
				'rel' => 0
				);

				$new_src = add_query_arg($params, $src);

				$iframe = str_replace($src, $new_src, $iframe);


				// add extra attributes to iframe html
				$attributes = 'showinfo=0';

				$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);


				// echo $iframe
				echo $iframe;

				the_sub_field('video_title');

    endwhile;

else :

    // no rows found

endif;

?>

	</div>
</div> <!-- end #content_area -->

<?php get_footer(); ?>
