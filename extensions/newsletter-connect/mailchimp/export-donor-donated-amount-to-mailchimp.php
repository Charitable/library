<?php
/**
 * Export the donor donated amounts to Mailchimp or any other related newsletter platform.
 * This example allows you to fetch the current donor amount and 
 * the total lifetime donation by the current donor and updates a 
 * a merge field in Mailchimp.
 *
 * You will need to have two list field created in your List settings
 * in mailchimp. In your MailChimp dashboard, go to
 * Lists and click on the list you are adding subscribers to.
 *
 * Next, under the Settings menu, click on "List fields and *|MERGE|* tags".
 *
 * On the following screen, click on Add a Field and then define
 * your two new field and take note of the merge field label.
 * Make sure that the field chosen choose corresponds
 * to the one in the code snippet below (i.e. MMERGE15 and MMERGE22).
 *
 * @see https://mailchimp.com/help/manage-list-and-signup-form-fields/
 *
 * For explantion of the code, read the blog post below:
 * @see https://thehapyone.com/wordpress-charitable-plugin-export-donor-amount-to-mail-chimp/
 */
function ed_charitable_add_mailchimp_merge_field_data( $data, $user ) {
 
if ( array_key_exists( 'donor_id', $user ) ) {
$donor = new Charitable_Donor( $user['donor_id'] );
$donation = $donor->get_last_donation();
 
$most_recent_donation = $donation->get_total_donation_amount( true );
$lifetime_value = $donor->get_user()->get_total_donated();
$data['merge_fields']['MMERGE15'] = $most_recent_donation;
$data['merge_fields']['MMERGE22'] = $lifetime_value ;
}
return $data;
}

add_filter( 'charitable_newsletter_connect_mailchimp_subscriber_data', 'ed_charitable_add_mailchimp_merge_field_data', 10, 2 );
