<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article class="entry post clearfix">
		<!--h1 class="main_title"--><!--?php the_title(); ?></h1-->

		<?php if (get_option('evolution_page_thumbnails') == 'on') { ?>
			<?php
				$thumb = '';
				$width = apply_filters( 'evolution_single_image_width', 203 );
				$height = apply_filters( 'evolution_single_image_height', 203 );
				$classtext = 'post-thumb';
				$titletext = get_the_title();
				$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,false,'Single');
				$thumb = $thumbnail["thumb"];
			?>

			<?php if($thumb <> '') { ?>
				<div class="single-thumbnail">
					<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
					<span class="post-overlay"></span>
				</div> 	<!-- end .single-thumbnail -->
			<?php } ?>
		<?php } ?>

		<?php the_content(); ?>
		<?php
		//create a repeater loop
				 // check if the repeater field has rows of data
					if( have_rows('speaking_topics') ): ?>
						<div class="speaking_topics">
							<?php
							// loop through the rows of data
							while ( have_rows('speaking_topics') ) : the_row(); ?>
							<div class="speaking_topic">
							<div class="d-1of2 t-all m-all">
								<h3 class="title"><?php the_sub_field('topic_title'); ?></h3>
								<?php the_sub_field('topic_description'); ?>
							</div>
							<div class="d-1of2 t-all m-all gallery_video">
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
							echo $iframe; ?>

									 </div>
								 </div>
									 
						 <?php

					 endwhile; ?>

						</div>
						<?php
					else :

					 // no rows found

					endif;
					?>

	</article> <!-- end .entry -->
<?php endwhile; // end of the loop. ?>
