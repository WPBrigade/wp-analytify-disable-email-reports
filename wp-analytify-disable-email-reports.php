<?php

/**
 * Plugin Name: Analytif Disable Email Reports
 * Description: Disable the Analytify's emails reports.
 * Version: 1.0.0
 * Author: Analytify
 * Author URI: http://www.analytify.io/
 * Text Domain: wpa-disable-emails-reports
 *
 * @package
 * @category Core
 * @author Analytify
 */


 // Defining constants
 define( 'WPB_PLUGIN_VERSION', '1.0.0' );


 add_action( 'plugins_loaded', 'wpa_disable_emails_reports', 15 );

 /**
 * Initializing plugin.
 *
 * @since 1.0.0
 */
 function wpa_disable_emails_reports() {
	if ( ! class_exists( 'WP_Analytify' ) ) {
		return;
	}

	$email_options = get_option('wp-analytify-email');
	$email_options['disable_email_reports'] = "on";

	update_option( 'wp-analytify-email', $email_options );
 }