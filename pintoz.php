<?php
/**
 * Plugin Name:     Pintoz
 * Plugin URI:      https://funnelwheel.com/pintoz
 * Description:     Cart Boost for WooCommerce delivers mobile-first, CRO-optimized site experiences that get you more customers, that spend more and subscribe longer.
 * Author:          FunnelWheel
 * Author URI:      https://funnelwheel.com
 * Version:         0.1.0
 * Text Domain:     funnelwheel-cart-boost
 * Domain Path:     /languages
 * License:         GPLv2 or later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package         Pintoz
 */


// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

define( 'PINTOZ_FILE', __FILE__ );


// Include the main Container class.
include_once dirname( PINTOZ_FILE ) . '/includes/class-pintoz.php';

// Returns the main instance of Container.
function pintoz() {
	return \Upnrunn\Pintoz::instance();
}

// Global for backwards compatibility.
$GLOBALS['pintoz'] = pintoz();
