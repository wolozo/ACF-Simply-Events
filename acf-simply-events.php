<?php

/*
 * Plugin Name:       ACF Simply Events
 * Plugin URI:        https://github.com/wolozo/ACF-Simply-Events
 * GitHub Plugin URI: https://github.com/wolozo/ACF-Simply-Events
 * Description:       Simple Event Management with ACF Pro.
 * Version:           1.0.0
 * Author:            Wolozo
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       acf_simply_events
 * Requires WP:       4.3
 * Requires PHP:      5.3
 */

function w_se_enqueue_scripts() {
  $postType = get_post_type();
  if ( 'w_se_events' === $postType || 'w_se_locations' === $postType ) {
    wp_enqueue_script( 'google-maps',
                       'https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU&sensor=false' );
    wp_enqueue_script( 'google-jsapi', 'https://www.google.com/jsapi' );
    wp_enqueue_script( 'simply_events', plugin_dir_url( __FILE__ ) . 'assets/js/acf-simply-events.min.js' );
    wp_enqueue_style( 'simply_events', plugin_dir_url( __FILE__ ) . 'assets/css/acf-simply-events.css' );
  }
}

add_action( 'wp_enqueue_scripts', 'w_se_enqueue_scripts' );

// Include the stuff
include( plugin_dir_path( __FILE__ ) . 'inc/options.php' );
include( plugin_dir_path( __FILE__ ) . 'inc/locations.php' );
include( plugin_dir_path( __FILE__ ) . 'inc/events.php' );