<?php
/**
 * Plugin Name:       Easy My Login
 * Plugin URI:        https://wordpress.org
 * Description:       With this plugin, the default WordPress login page will change its appearance.
 * Version:           1.5.0
 * Author:            wp-qaleb.ir
 * Author URI:        http://wp-qaleb.ir
 * Text Domain:       easy_my_login
 */
 
if ( ! defined( 'WPINC' ) ) {
	die;
}
 
define( 'easy_my_login_version', '1.5.0' );
 
 
/**
 * Stores the path to TML.
 *
 * @since 2.4.4
 */
define( 'easy_my_login_path', plugin_dir_path( __FILE__ ) );

/**
 * Stores the URL to TML.
 *
 * @since 2.0
 */
define( 'easy_my_login_url',  plugin_dir_url( __FILE__ ) );
 
 
/**
 * Style.
 *
 * @since 2.0
 */
 
function add_login_stylesheet() {
    wp_register_style( 'easy-my-login-css', plugins_url( 'style.css', __FILE__ ) );
    wp_enqueue_style( 'easy-my-login-css' );
}
add_action('login_head', 'add_login_stylesheet');
