<?php
/*
Plugin name: Kontek
Plugin URI: http://charwebs.com/kontek
Description: Kontek replacement parts ordering plugin. 
Author: William Kroes
Author URI: http://charwebs.com
Version 1.0

Kontek is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Kontek is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Kontek. If not, see http://charwebs.com/kontek.
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'KONTEK_VERSION', '1.0.0' );
define( 'KONTEK__MINIMUM_WP_VERSION', '4.0' );
define( 'KONTEK__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

register_activation_hook( __FILE__, array( 'Kontek', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'Kontek', 'plugin_deactivation' ) );
register_uninstall_hook(__FILE__, 'Kontek', array('plugin_uninstall') );

require_once( KONTEK__PLUGIN_DIR . 'class.kontek.php' );

add_action( 'init', array( 'Kontek', 'init' ) );





