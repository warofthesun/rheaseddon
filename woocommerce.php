<!--woocommerce-->
<?php get_header(); ?>

<div id="content_area" class="clearfix woocommerce-page">
	<div class="woo">
		<!--?php get_template_part('includes/breadcrumbs','index'); ?-->
		<div class="woo-product-area">
		<?php woocommerce_content(); ?>
		</div>
	</div> <!-- end #main_content -->
</div> <!-- end #content_area -->

<?php get_footer(); ?>
