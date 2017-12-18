
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
					<div style="float:left;">
						<?php global $post; // required
						$args = array('numberposts'=>3, 'category_name'=>featured-article, 'order'=>'ASC');
						$custom_posts = get_posts($args);
						foreach($custom_posts as $post) : setup_postdata($post); ?>
						<div class="d-1of3 t-1of3 m-all article">
							<img class="article_image" src="http://localhost:8200/wp-content/uploads/2017/12/on-the-steps-1-964x723.jpeg">
							<div class="article_title">
								Title
							</div>
							<div class="article_text">
								Brief description
							</div>
						</div>
						<?php endforeach; ?>
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
