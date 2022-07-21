<?php


function page_load(){
    wp_enqueue_style("styles", get_template_directory_uri()."/assets/css/styles.css",array(),false,'all');
    wp_enqueue_script("scripts", get_template_directory_uri()."/assets/js/scripts.js");
}

add_action("wp_enqueue_scripts", "page_load");
