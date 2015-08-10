<?php
/*
 * Plugin Name: Spidoche simple boilerplate oop
 * Plugin URI: http://spidoche.com
 * Description: Object Oriented Programming version of spidoche simple boilerplate a starter point to create a simple option page plugin with textfield, checkbox, image upload, etc.
 * Version: 0.1
 * Author: SPIDOCHE
 * Author URI: http://spidoche.com

 * USAGE : replace prefix_oop_ , PREFIX_OOP_ and Prefix_oop_ to your unique plugin id

 */


// SECURITY
defined( 'ABSPATH' ) or die( 'Nothing to see here.' );


// DEFINE CONSTANTS
define( 'PREFIX_OOP_VERSION', '0.1');
define( 'PREFIX_OOP_PATH', plugin_dir_path(__FILE__) );
define( 'PREFIX_OOP_URL', plugins_url( '', __FILE__) ); // use plugin_dir_url(__FILE__) to include the last slash
define( 'PREFIX_OOP_BASENAME', dirname( plugin_basename( __FILE__ ) ) );


// INCLUDE OPTIONS CLASS
require_once(PREFIX_OOP_PATH.'/admin/options.php');

// INIT CLASS
new Prefix_oop_options;

?>
