<?php
// Add Scripts function
function yts_add_scripts()
{
    // add main css
    wp_enqueue_style('yts-main-style',plugins_url(). '/youtubesubs/css/styles.css');
    // add main js 
    wp_enqueue_script('yts-main-script',plugins_url(). '/youtubesubs/js/main.js'); 


    // load external script
    wp_register_script('google','https://apis.google.com/js/platform.js');
    wp_enqueue_script('google');
}


// wp hooks
add_action('wp_enqueue_scripts','yts_add_scripts');
