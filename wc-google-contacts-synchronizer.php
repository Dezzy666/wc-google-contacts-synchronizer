<?php
/*
Plugin Name: Woocommerce google contacts synchronizer
Plugin URI:  https://developer.wordpress.org/plugins/wc-google-contacts-sycnhornizer/
Description: Plugin for symchronizing your woocommerce accounts with google contacts.
Version:     1.0.0
Author:      Jan Herzan
Author URI:  https://jan.herzan.eu/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wc_google_contacts_synchronizer
Domain Path: /languages
*/

require_once '/vendor/autoload.php';

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'PLUGIN_ABSPATH', dirname( __FILE__ ) . '/' );

