<?php
/*
* Plugin Name: My Card Box
* Description: Card Personalisation Software For My Card Box
* Author: Frank Astin
* Version: 0.1
* Text Domain: my-card-box
*/

//Load WP Modular Framework

if ( is_readable(  __DIR__ . '/vendor/autoload.php' ) ) {
	require __DIR__ . '/vendor/autoload.php';
}
include plugin_dir_path( __FILE__ ) . '/wp_modular/wp_modular.php';
new WP_Modular();
//include plugin_dir_path( __FILE__ ) . '/tcpdf/tcpdf.php';
include plugin_dir_path( __FILE__ ) . '/virtual-keyboard/virtual-keyboard.php';
include plugin_dir_path( __FILE__ ) . '/post-types/rnd-notification.php';
