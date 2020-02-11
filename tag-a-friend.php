<?php

/****
* Plugin Name:  Tag A Friend for Woocommerce
* Plugin URI:   https://github.com/meumairakram/Tag-a-Friend
* Description:  A Unique and versatile plugin to provide tag able products in which people can invite other people and recommend them products from your woo commerce store.
* Version:      1.0
* Author:       Umair Akram & Hasnain Khalid
* Author URI:   #
* License:      GPL 2
****/

// defining constants

define('PLUGIN_DIR',dirname(__FILE__));

// Activation Hooks
 if(!function_exists('upfb_check_uploading_directory')) {
    function htaf_register_activation_hook() {
        
    }
}
register_activation_hook(__FILE__,'htaf_register_activation_hook');


// Include Essential Classes
require_once(PLUGIN_DIR.'/inc/classes/htaf_template_library.php');


class htaf_init_plugin {



    public function __construct() {

        add_action('admin_menu',array($this,'add_menu_pages'));

    }

    // Admin Init
    public function add_menu_pages() {
        

        add_menu_page( 'Tag a Friend Settings', 'Tag a Friend','read', 'tag-a-friend',array($this,'main_menu_page'));
        

    }

    public function main_menu_page() {
        $template = new htaf_template_libraries();
        $args['plugin_title'] = 'TAG A FRIEND';

        $template->stream_template('admin_pages/main_conf_page.php',$args);

    }


}




// Initializing Plugin object
new htaf_init_plugin();