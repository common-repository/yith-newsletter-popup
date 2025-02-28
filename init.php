<?php
/**
 * Plugin Name: YITH Newsletter Popup
 * Plugin URI: https://yithemes.com/themes/plugins/yith-newsletter-popup/
 * Description: YITH Newsletter Popup gives you the ability to have a floating popup with a newsletter form in any theme. It also supports WooCommerce products.
 * Version: 1.0.7
 * Author: YITHEMES
 * Author URI: https://yithemes.com/
 * Requires at least: 3.5
 * Tested up to: 5.5.x
 *
 * Text Domain: yith-newsletter-popup
 * Domain Path: /languages/
 *
 * @author Your Inspiration Themes
 * @package YITH Newsletter Popup
 * @version 1.0.7
 */

/**  Copyright 2013  Your Inspiration Themes  (email : plugins@yithemes.com)
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License, version 2, as
 *  published by the Free Software Foundation.
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

/* Include common functions */
if (!defined('YITH_FUNCTIONS')) {
    require_once('yit-common/yit-functions.php');
} //!defined('YITH_FUNCTIONS')

load_plugin_textdomain('yith-newsletter-popup', false, dirname(plugin_basename(__FILE__)) . '/languages/');
define('YITH_NEWSLETTER_POPUP', true);
define('YITH_NEWSLETTER_POPUP_URL', plugin_dir_url(__FILE__));
define('YITH_NEWSLETTER_POPUP_DIR', plugin_dir_path(__FILE__));

// Load required classes and functions
require_once('functions.yith-newsletter-popup.php');
require_once('yith-newsletter-popup-options.php');
require_once('class.yith-newsletter-popup-admin.php');
require_once('class.yith-newsletter-popup-frontend.php');
require_once('class.yith-newsletter-popup.php');

// Let's start the game!
global $yith_newsletter_popup;
$yith_newsletter_popup = new YITH_Newsletter_Popup();
