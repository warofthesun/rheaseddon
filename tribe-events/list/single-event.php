<!-- list - single_event -->
<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @version 4.6.3
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// The address string via tribe_get_venue_details will often be populated even when there's
// no address, so let's get the address string on its own for a couple of checks below.
$venue_address = tribe_get_address();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>
<article class="d-all t-all m-all events">

	<div class="m-all">
		<a class="event_title" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
			<?php the_title() ?>
		</a>
	</div>
	<div class="d-1of2 t-1of2 m-all ">

		<?php echo tribe_event_featured_image( null, 'article-thumb' ); ?>

	</div>
	<div class="d-1of2 t-1of2 m-all last-col article_content">
		<?php if ( $venue_details ) : ?>
			<!-- Venue Display Info -->
			<h3 class="event_location">
				<?php echo tribe_get_venue(); ?>
			</h3> <!-- .tribe-events-venue-details -->
			<!-- Schedule & Recurrence Details -->
			<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="event_date">
				<?php echo tribe_events_event_schedule_details() ?>
			</a>
		<?php endif; ?>
		<div class="article_text">
			<?php echo tribe_events_get_the_excerpt( null, wp_kses_allowed_html( 'post' ) ); ?>
			<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark"><?php esc_html_e( 'Learn More', 'the-events-calendar' ) ?></a>
		</div><!-- .tribe-events-list-event-description -->
	</div>

</article>


<?php
do_action( 'tribe_events_after_the_content' );
