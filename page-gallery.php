<!--page_gallery-->
<?php
/*
Template Name: Gallery Page
*/
?>
<?php get_header(); ?>


<div id="content_area" class="clearfix fullwidth">
	<div id="main_content">
		hey
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
											            <li>
											                <a href="<?php echo $image['url']; ?>">
											                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
											                </a>
											                <p><?php echo $image['caption']; ?></p>
											            </li>
											        <?php endforeach; ?>
											    </ul>
											<?php endif; ?>
				         <?php       //

				        elseif( get_row_layout() == 'videos' ):

				        	//create a repeater loop
				               // check if the repeater field has rows of data
				                if( have_rows('video_clips') ):

				 	            // loop through the rows of data
				                    while ( have_rows('video_clips') ) : the_row(); ?>

				                           // display a sub field value
				                          <div><?php the_sub_field('video_clip'); ?></div>
				                           <div><?php the_sub_field('video_title'); ?></div>
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

there
		<?php endwhile; // end of the loop. ?>
	</div> <!-- end #main_content -->
</div> <!-- end #content_area -->

<?php get_footer(); ?>
