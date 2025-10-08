<?php
/**
 * Plugin Name: Current Year By Nasim
 * Plugin URI: https://wordpress.org/plugins/current-year-by-nasim/
 * Description: A simple plugin to display the current year using the [cyb_nasim] shortcode.
 * Version: 1.0.1
 * Author: Nasim Miah
 * Author URI: https://profiles.wordpress.org/muddassirnasim/
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: current-year-by-nasim
 * Requires at least: 5.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Display current year using a shortcode.
 *
 * @return string
 */
function cyb_nasim_display_current_year() {
	$current_year = date_i18n( 'Y' );
	return esc_html( $current_year );// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
add_shortcode( 'cyb_nasim', 'cyb_nasim_display_current_year' );
