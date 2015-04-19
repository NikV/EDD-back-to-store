<?php
/**
 * Plugin Name: EDD Back to store
 * Description: Allows for setting of a URL that leads user to a page where they can continue shopping
 * Author: Nikhil Vimal
 * Author URI: http://nik.techvoltz.com
 * Version: 1.0
 * Plugin URI:
 * License: GNU GPLv2+
 */


/**
 * Add the link after the reciept table
 */
function edd_back_to_store_after_purchase_form() {
	$page = get_page_by_title( 'Store' );
	$page_ID = $page->ID;

	echo '<a href="' . esc_url( get_permalink( $page_ID) ) . '">Continue shopping?</a>';


}
add_action('edd_payment_receipt_after_table', 'edd_back_to_store_after_purchase_form');