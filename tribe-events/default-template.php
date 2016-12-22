<?php
/**
 * CUSTOM Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * THIS IS A CUSTOM TRIBE TEMPLATE
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header();
?>
<div class="half-hero">
    	<div class="row">
    		<div class="small-12 columns text-center">
    			<div class="centered-content"><h1>Events</h1></div>
    		</div>
    	</div>
    </div>
<div class="row" id="mainContent">

	<div class="small-12 columns">
		<?php tribe_events_before_html(); ?>
		<?php tribe_get_view(); ?>
		<?php tribe_events_after_html(); ?>
	</div>

</div>
<?php
get_footer();
