<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');
// Required for Foundation to work properly
require_once('library/foundation.php');
// Register all navigation menus
require_once('library/navigation.php');
// Add menu walker
require_once('library/menu-walker.php');
// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');
// Return entry meta information for posts
require_once('library/entry-meta.php');
// Enqueue scripts
require_once('library/enqueue-scripts.php');
// Add theme support
require_once('library/theme-support.php');
// Add Header image
require_once('library/custom-header.php');
// Charger mes actions perso
require_once('library/actions.php');

// Définir mes GLOBAL
// define("PARTS","PARTS/");

add_action( 'wp_ajax_Addlist', 'Addlist' );
add_action( 'wp_ajax_nopriv_Addlist', 'Addlist' );
add_action( 'wp_ajax_Addvolume', 'Addvolume' );
add_action( 'wp_ajax_nopriv_Addvolume', 'Addvolume' );

function Addlist() {

    global $current_user, $wpdb;

    $IDUser = $current_user->data->ID;
    $IDIssue = $_POST['param'];

    $insert = $wpdb->insert($wpdb->prefix.'_issue', array('ID' => $IDIssue, 'User_ID' => $IDUser));
    echo $insert;

	die();
}
function Addvolume() {

    global $current_user, $wpdb;

    $IDUser = $current_user->data->ID;
    $IDVolume = $_POST['param'];

    //$wpdb->show_errors();
    $insert = $wpdb->insert($wpdb->prefix.'_volume', array('ID' => $IDVolume, 'User_ID' => $IDUser));

    echo $insert;

	die();
}
add_filter( 'show_admin_bar', '__return_false' );
