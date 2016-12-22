<?php
/**
 * CUSTOM List View Single Event
 * This file contains one event in the list view
 *
 * Override file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 * @version  4.3
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>

<div class="row">
	<div class="small-12 medium-6 columns blog-image">
		<!-- Event Image -->
		<?php echo tribe_event_featured_image( null, 'full' ) ?>
	</div>
	<div class="small-12 medium-6 columns">
		<!-- Event Cost -->
		<?php if ( tribe_get_cost() ) : ?>
			<div class="tribe-events-event-cost">
				<span><?php echo tribe_get_cost( null, true ); ?></span>
			</div>
		<?php endif; ?>
		<!-- Event Title -->
		<?php do_action( 'tribe_events_before_the_event_title' ) ?>
		<h2 class="tribe-events-list-event-title">
			<a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
				<?php the_title() ?>
			</a>
		</h2>
		<?php do_action( 'tribe_events_after_the_event_title' ) ?>
		<!-- Event Meta -->
		<?php do_action( 'tribe_events_before_the_meta' ) ?>
		<ul class="menu simple blog-meta">
			<li><!-- Schedule & Recurrence Details -->
				<?php echo tribe_events_event_schedule_details() ?>				
			</li>
		</ul>
		<div class="tribe-events-event-meta">
			<div class="author <?php echo esc_attr( $has_venue_address ); ?>">

				<?php if ( $venue_details ) : ?>
					<!-- Venue Display Info -->
					<div class="tribe-events-venue-details">
						<?php echo implode( ', ', $venue_details ); ?>
						<?php
						if ( tribe_get_map_link() ) {
							echo tribe_get_map_link_html();
						}
						?>
					</div> <!-- .tribe-events-venue-details -->
				<?php endif; ?>

			</div>
		</div><!-- .tribe-events-event-meta -->
		<?php do_action( 'tribe_events_after_the_meta' ) ?>
		
		<!-- Event Content -->
		<?php do_action( 'tribe_events_before_the_content' ) ?>
		<div class="tribe-events-list-event-description tribe-events-content">
			<?php echo tribe_events_get_the_excerpt( null, wp_kses_allowed_html( 'post' ) ); ?>
			<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="button hollow" rel="bookmark"><?php esc_html_e( 'Find out more', 'the-events-calendar' ) ?></a>
		</div><!-- .tribe-events-list-event-description -->
		<?php
		do_action( 'tribe_events_after_the_content' ); ?>

	</div>
</div>




