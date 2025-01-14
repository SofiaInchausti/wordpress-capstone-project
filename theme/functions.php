<?php

/**
 * Capstone functions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package Capstone functions
 */


/**
 * Enqueue scripts and styles.
 */

function scripts()
{
    wp_enqueue_style('capstone-project', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

}
add_action('wp_enqueue_scripts', 'scripts');


