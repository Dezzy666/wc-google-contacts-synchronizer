
<?php

/**
 * General settings for the plugin.
 *
 * @author      Jan Herzan
 * @category    Admin
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function wc_gcs_setup_admin_menu() {
    add_menu_page(__('WC GCS', 'wc_google_contacts_synchronizer'), __('WC GCS', 'wc_google_contacts_synchronizer'), 'manage_options', 'wc_gcs_user_settings', 'wc_gcs_view_general_settings_page', plugin_dir_url( __FILE__ ) . '../../images/google_logo_20_20.png', 82 );
    add_submenu_page( 'wc_gcs_menu', __('User settings', 'wc_google_contacts_synchronizer'), __('User settings', 'wc_google_contacts_synchronizer'), 'wc_gcs_user_settings', 'wc_gcs_view_general_settings_page');
}
add_action( 'admin_menu', 'wc_gcs_setup_admin_menu' );

function wc_gcs_view_general_settings_page($param) {
    include 'general-settings.php';
}
