<!--page-sidebar-->
<?php
/*
Template Name: Press Page
*/
?>
<?php get_header(); ?>


<div id="content_area" class="clearfix fullwidth">
	<div class="d-2of3 t-2of3 m-all">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article class="post clearfix">


				<?php

					// check if the flexible content field has rows of data
					if( have_rows('press') ): ?>


					<?php

							 // loop through the rows of data
							while ( have_rows('press') ) : the_row();
									if( get_row_layout() == 'tv' ): ?>

										<h2 class="press_section">TV</h2>

										<?php
										//create a repeater loop
												 // check if the repeater field has rows of data
													if( have_rows('press_tv') ):

												// loop through the rows of data ?>
												<ul class="press_tv">
													<?php
															while ( have_rows('press_tv') ) : the_row(); ?>
															<li>
																<?php the_sub_field('press_item'); ?>: <a href="http://<?php the_sub_field('press_item_url'); ?>" target="_blank"><?php the_sub_field('press_item_link'); ?></a>
															</li>

														 <?php

													 endwhile; ?>
												 </ul>

													 <?php

													else :

													 // no rows found

												 endif; ?>

											 <?php elseif( get_row_layout() == 'radio' ): ?>
												 <h2 class="press_section">Radio</h2>

												 <?php
			 										//create a repeater loop
			 												 // check if the repeater field has rows of data
			 													if( have_rows('press_radio') ):

			 												// loop through the rows of data ?>
			 												<ul class="press_radio">
			 													<?php
			 															while ( have_rows('press_radio') ) : the_row(); ?>
			 															<li>
			 																<?php the_sub_field('press_item'); ?>: <a href="http://<?php the_sub_field('press_item_url'); ?>" target="_blank"><?php the_sub_field('press_item_link'); ?></a>
			 															</li>

			 														 <?php

			 													 endwhile;
														 ?>
			 												 </ul>


			 													 <?php

			 													else :

			 													 // no rows found

			 												 endif; ?>

														 <?php elseif( get_row_layout() == 'print' ): ?>
															 <h2 class="press_section">Print</h2>

															 <?php
																//create a repeater loop
																		 // check if the repeater field has rows of data
																			if( have_rows('press_print') ):

																		// loop through the rows of data ?>
																		<ul class="press_print">
																			<?php
																					while ( have_rows('press_print') ) : the_row(); ?>
																					<li>
																						<?php the_sub_field('press_item'); ?>: <a href="http://<?php the_sub_field('press_item_url'); ?>" target="_blank"><?php the_sub_field('press_item_link'); ?></a>
																					</li>

																				 <?php

																			 endwhile;
																	 ?>
																		 </ul>


																			 <?php

																			else :

																			 // no rows found

																		 endif; ?>

																	 <?php elseif( get_row_layout() == 'book_reviews' ): ?>
																		 <h2 class="press_section">Book Reviews</h2>

																		 <?php
																			//create a repeater loop
																					 // check if the repeater field has rows of data
																						if( have_rows('press_book_reviews') ):

																					// loop through the rows of data ?>
																					<ul class="press_book_reviews">
																						<?php
																								while ( have_rows('press_book_reviews') ) : the_row(); ?>
																								<li>
																									<?php the_sub_field('press_item'); ?>: <a href="http://<?php the_sub_field('press_item_url'); ?>" target="_blank"><?php the_sub_field('press_item_link'); ?></a>
																								</li>

																							 <?php

																						 endwhile;
																				 ?>
																					 </ul>


																						 <?php

																						else :

																						 // no rows found

																					 endif; ?>

																				 <?php elseif( get_row_layout() == 'content_area' ): ?>
																					 <h2 class="press_section"><?php the_sub_field('press_content_area_title'); ?></h2>
																					 <?php the_sub_field('press_content_area'); ?>

																					 <?php
																						//create a repeater loop
																								 // check if the repeater field has rows of data
																									if( have_rows('press_book_reviews') ):

																								// loop through the rows of data ?>
																								<ul class="press_book_reviews">
																									<?php
																											while ( have_rows('press_book_reviews') ) : the_row(); ?>
																											<li>
																												<?php the_sub_field('press_item'); ?>: <a href="http://<?php the_sub_field('press_item_url'); ?>" target="_blank"><?php the_sub_field('press_item_link'); ?></a>
																											</li>

																										 <?php

																									 endwhile;
																							 ?>
																								 </ul>


																									 <?php

																									else :

																									 // no rows found

																								 endif;

																								endif;

																						endwhile;

																				else :

																						// no layouts found

																				endif;

																			?>

			</article> <!-- end .entry -->

	</div> <!-- end #main_content -->
	<div class="d-1of3 t-1of3 m-all last-col">


		<?php endwhile; // end of the loop. ?>

	</div>
</div> <!-- end #content_area -->

<?php get_footer(); ?>
