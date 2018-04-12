<?php

//Add scripts

function yts_add_scripts(){
    // Add main css
    wp_enqueue_style('yts-main-style', plugins_url().'/youtubesubs/css/style.css');

    // Add main js
    wp_enqueue_script('yts-main-script', plugins_url().'/youtubesubs/js/main.js');

    // Add external script "google script"
    wp_register_script('google', 'https://apis.google.com/js/platform.js');
    wp_enqueue_script('google');
}

add_action('wp_enqueue_scripts', 'yts_add_scripts');