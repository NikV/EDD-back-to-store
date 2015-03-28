<?php
/**
 * Plugin Name: EDD Back to store
 */

/**
 * Add the link after the reciept table
 */
function after_purchase_form() {
	echo '<a href="' . esc_url( edd_get_option('back_to_store_link') ) . '">Continue shopping?</a>';
}
add_action('edd_payment_receipt_after_table', 'after_purchase_form');

function back_to_store_options( $settings ) {
	$back_to_store_settings = array(
		array(
			'id' => 'back_to_store_option_heading',
			'name' => '<strong>' . 'Back to Store Settings' . '</strong>',
			'desc' => 'Where should the continue shopping page lead to? (URL)',
			'type' => 'header',

		),
		array(
			'id' => 'back_to_store_link',
			'name' => __( 'Back to store link', 'edd' ),
			'desc' => __( 'Enter a url for continue shopping', 'edd' ),
			'type' => 'text',
			'size' => 'regular'

		),
	);

	return array_merge($settings, $back_to_store_settings);

}
add_filter('edd_settings_extensions', 'back_to_store_options');