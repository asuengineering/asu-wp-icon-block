<?php
/**
 * Plugin Name:     The Icon Block - ASU Awesome
 * Plugin URI:      https://github.com/asuengineering
 * Description:     Adds the ASU Awesome icon library as an extension of The Icon Block by Nick Diego.
 * Author:          ASU Engineering
 * Author URI:      https://github.com/asuengineering/asu-wp-icon-block
 * Version:         0.0.1
 *
 * Requires Plugins: icon-block
 *
 * @package         asu-wp-icon-block
 * Text Domain:     asu-wp-icon-block
 *
 * GitHub Plugin URI: https://github.com/asuengineering/asu-wp-icon-block
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Variable for root directory of this plugin.
define( 'ASUWP_ICONS', plugin_dir_path( __FILE__ ) );


/**
 * Plugin dependency for The Icon Block is set within the header of this file.
 * No further checks needed. =)
 */
add_action( 'enqueue_block_editor_assets', 'pitchfork_register_tib_asu_icons' );
function pitchfork_register_tib_asu_icons() {

	wp_enqueue_script ( 'tib_asu_icons', plugin_dir_url( __FILE__ ) . '/dist/js/register-asu-icons.js', array( 'wp-i18n', 'wp-hooks', 'wp-dom' ), null, true);

}
