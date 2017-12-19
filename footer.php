
			</div> <!-- end .container -->

		</div> <!-- end #main-area -->

	</div> <!-- end #page-wrap -->
	<?php if( get_field('featured_articles') ): ?>
		<div class="featured_articles">
			<div class="wrap">
				<div>
					<h3 class="section_title">
						<span class="light"><?php the_field('featured_header'); ?></span>
					</h3>
					<div class="featured_articles-wrap">
						<?php $custom_query = new WP_Query('category_name=featured-article&posts_per_page=3');
						while($custom_query->have_posts()) : $custom_query->the_post(); ?>
						<?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'article-thumb' ); ?>
						<a href="<?php the_permalink(); ?>" class="d-1of3 t-1of3 m-all article" style="background: url('<?php echo $hero['0'];?>');">
							<div class="overlay">
								<div class="article_title">
									<?php the_title(); ?>
								</div>
								<div class="button">Read Article</div>
							</div>
						</a>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); // reset the query ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
<!--footer-->

	<footer id="main-footer" style="clear:both;">

		<div class="container clearfix">
			<div id="footer-top-shadow"></div>

			<?php if ( is_active_sidebar( 'footer-area-1' ) || is_active_sidebar( 'footer-area-2' ) || is_active_sidebar( 'footer-area-3' ) || is_active_sidebar( 'footer-area-4' ) ) { ?>
				<div id="footer-widgets" class="clearfix">
					<?php
						$footer_columns_num = (int) apply_filters( 'evolution_footer_columns_num', 4 );
						for ( $i = 1; $i <= $footer_columns_num; $i++ ){
							echo '<div class="footer-widget footer-col' . $i . ( $i == $footer_columns_num ? ' last' : '' ) . '">';
								if ( is_active_sidebar( 'footer-area-' . $i ) && ! dynamic_sidebar( 'footer-area-' . $i ) ) :
								endif;
							echo '</div> <!-- end . footer-widget -->';
						}
					?>
				</div> <!-- end #footer-widgets -->
			<?php } ?>

			<p id="copyright"><?php esc_html_e('Designed by ','Evolution'); ?> <a href="http://www.elegantthemes.com" title="Premium WordPress Themes">Elegant Themes</a> | <?php esc_html_e('Powered by ','Evolution'); ?> <a href="http://www.wordpress.org">WordPress</a></p>
		</div> <!-- end .container -->
	</footer> <!-- end #main-footer -->

	<?php wp_footer(); ?>
</body>
</html>
