<?php
/*
Plugin Name: Youtube Subs
Description: Display youtube sub button and count
Version: 1.0.0
Author: Takunda Geraldino Chibanda
*/

// Exit if accessed directly

if(!defined('ABSPATH')){
    exit;
}

//Load scripts

require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

//Load class

require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');

// Register Widget
function register_youtubesubs(){
    register_widget('Youtube_Subs_Widget');
}

//Hook in function

add_action('widgets_init', 'register_youtubesubs');