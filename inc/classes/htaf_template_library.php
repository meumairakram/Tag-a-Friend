<?php 

class htaf_template_libraries {


    function __construct() {

    }

    public function stream_template($template_path = '',$vars = array()) {
        extract($vars);
        ob_start();
        $template_path = PLUGIN_DIR.'/inc/views/'.$template_path;
        require_once($template_path);
        $data = ob_get_clean();

        echo $data;


    }


    public function get_template($template_path = '',$vars = array()) {
        extract($vars);
        ob_start();
        $template_path = PLUGIN_DIR.'/inc/views/'.$template_path;
        require_once($template_path);
        $data = ob_get_clean();

        return $data;


    }



}
