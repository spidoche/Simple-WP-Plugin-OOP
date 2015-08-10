<?php
// ADD ADMIN PAGE
class Prefix_oop_options{

    public function __construct(){

        // init action
        add_action('admin_menu', array($this,'add_menu_page'));
        add_action('admin_init', array($this,'register_settings'));

    }

    public function add_menu_page() {

        add_menu_page( 'My plugin', 'My plugin menu oop', 'manage_options', 'prefix_oop_', array($this,'options_template'), '' );
        //add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );

    }

    public function options_template() {

        include( PREFIX_OOP_PATH . '/admin/options_page.php');
    }

    public function register_settings() {

        register_setting( 'prefix_oop_options', 'prefix_oop_' );

    }

} // END prefix_options


?>
