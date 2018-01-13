<!--page-contact-->
<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>


<div id="content_area" class="clearfix contact fullwidth">
	<div class="d-1of2 t-1of2 m-all">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article class="post clearfix">
				<?php the_content(); ?>
			</article> <!-- end .entry -->
		<?php endwhile; // end of the loop. ?>
	</div> <!-- end #main_content -->
	<div class="d-1of2 t-1of2 m-all last-col">
		<h2 class="speaking_topic">Speaking Topics</h2>
		<?php
		//create a repeater loop
				 // check if the repeater field has rows of data
					if( have_rows('speaking_topics') ): ?>
						<div class="speaking_topics">
							<?php
							// loop through the rows of data
							while ( have_rows('speaking_topics') ) : the_row(); ?>
							<div class="speaking_topic">
								<div class="d-all t-all m-all gallery_video">
									<?php
											// get iframe HTML
											$iframe = get_sub_field('topic_video');


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
										?>

									 </div>
									 <div class="d-all t-all m-all">
		 								<h3 class="title"><?php the_sub_field('topic_title'); ?></h3>
		 							</div>
							 </div>

							 <?php endwhile; ?>

							</div>
							<?php
								else :

								 // no rows found

								endif;
							?>

	</div>
</div> <!-- end #content_area -->

<?php get_footer(); ?>
