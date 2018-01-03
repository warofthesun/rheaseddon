<!--page_gallery-->
<?php
/*
Template Name: Gallery Page
*/
?>
<?php get_header(); ?>


<div id="content_area" class="clearfix fullwidth">
	<div id="main_content">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<?php

				// check if the flexible content field has rows of data
				if( have_rows('flexible_gallery') ):

				     // loop through the rows of data
				    while ( have_rows('flexible_gallery') ) : the_row();

				        if( get_row_layout() == 'images' ):

				        	//display the gallery
				                $images = get_sub_field('image_gallery');
				                //create a loop to display the gallery images:https://www.advancedcustomfields.com/resources/gallery/
												if( $images ): ?>
													<ul>
															<?php foreach( $images as $image ): ?>
																	<li class="d-1of3 t-1of3 m-1of2 gallery_image">
																			<a rel="gallery" href="<?php echo $image['url']; ?>">
																					 <img src="<?php echo $image['sizes']['article-thumb']; ?>" alt="<?php echo $image['caption']; ?>" width="100%"/>
																			</a>
																	</li>
															<?php endforeach; ?>
													</ul>
											<?php endif; ?>
				         <?php

				        elseif( get_row_layout() == 'videos' ):

				        	//create a repeater loop
				               // check if the repeater field has rows of data
				                if( have_rows('video_clips') ):

				 	            // loop through the rows of data
				                    while ( have_rows('video_clips') ) : the_row(); ?>

														<div class="d-1of2 t-all m-all gallery_video">
														<?php
														// get iframe HTML
														$iframe = get_sub_field('video_clip');


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
														echo $iframe; ?>
				                           <div><?php the_sub_field('video_title'); ?></div>
																 </div>
													 <?php

				                    endwhile;

				                else :

				                 // no rows found

				                endif;
				        endif;

				    endwhile;

				else :

				    // no layouts found

				endif;

				?>
		<?php endwhile; // end of the loop. ?>
	</div> <!-- end #main_content -->
</div> <!-- end #content_area -->

<?php get_footer(); ?>
