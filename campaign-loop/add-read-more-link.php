<?php

/**
 * Add a Read More link to the campaigns in the campaign grid.
 *
 * Note: This is designed to be used for cases where you want a Read More link
 * as well as a Donate button. If you only want a Read More link, you can just use
 * the "button" parameter for the campaigns shortcode. Example:
 *
 * [campaigns button="details"]
 *
 * @see     https://www.wpcharitable.com/documentation/the-campaigns-shortcode/
 *
 * @param   Charitable_Campaign $campaign
 * @return  void
 */
function ed_add_read_more_link_to_campaigns( $campaign ) {
	printf( __( '<a href="%s">Read More</a>', 'your-namespace' ), get_permalink( $campaign->ID ) );
}

add_action( 'charitable_campaign_content_loop_after', 'ed_add_read_more_link_to_campaigns', 5 );
