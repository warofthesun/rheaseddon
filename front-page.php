<!--front page-->
<?php get_header(); ?>
<div id="content_area" class="clearfix fullwidth">

	<div id="main_content">

		<?php //get_template_part('loop','home'); ?>

		<?php if( get_field('quote_slider') ): ?>
			<div class="quote_slider-wrap">
			<article>
				<h3 class="section_title">
					<span><?php the_field('quote_header'); ?></span>
				</h3>
				<div class="quote_slider">
					<?php echo do_shortcode('[text-slider]'); ?>
				</div>
			</article>
			</div>
		<?php endif; ?>
		<?php if( get_field('about_dr_seddon') ): ?>
			<article class="d-all t-all m-all about_dr_seddon">
				<div class="d-1of2 t-1of2 m-all article_content">
					<div>
						<h3 class="article_title">
							<span><?php the_field('title'); ?></span>
						</h3>
						<div class="article_text">
							<?php the_field('text'); ?>
						</div>
						<div>
							<?php if( get_field('about_read_more') ): ?>
								<a href="<?php the_field('about_read_more_link'); ?>" class="button"><?php the_field('about_read_more_text'); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="d-1of2 t-1of2 m-all last-col">
					<?php
					    $attachment_id = get_field('image');
					    $size = "article-thumb"; // (thumbnail, medium, large, full or custom size)
					    $image = wp_get_attachment_image_src( $attachment_id, $size );
					    // url = $image[0];
					    // width = $image[1];
					    // height = $image[2];
					  ?>
					  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
					    <img class="article_image" alt="Image of <?php the_title(); ?>" src="<?php echo $image[0]; ?>" />
					  </a>
				</div>
			</article>
		<?php endif; ?>

	</div> <!-- end #main_content -->

</div> <!-- end #content_area -->

<?php get_footer(); ?>
