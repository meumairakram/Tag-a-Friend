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



// Activation Hooks
 if(!function_exists('upfb_check_uploading_directory')) {
    function htaf_register_activation_hook() {
        if(!file_exists(UPFB_UPLOAD_PATH)) {
            mkdir(UPFB_UPLOAD_PATH);
        }
    }
}
register_activation_hook(__FILE__,'htaf_register_activation_hook');







