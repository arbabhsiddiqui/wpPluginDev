<?php
/*
Plugin Name: Youtube Sub Counter        
Plugin URI: https://aework.in
Description: Count youtube subs
Version: 0.1.0
Author: Arbab Hussain   
Author URI: https://github.com/arbabhsiddiqui
*/


// exit if directly access
if (!defined('ABSPATH')) {
    exit;
}



// load css and js 
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

// load class
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');


// register widget
function register_youtubesubs(){
    register_widget('Youtube_Sub_Widget');
}

// Hook in function
add_action('widgets_init','register_youtubesubs');
