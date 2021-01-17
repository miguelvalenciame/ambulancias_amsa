<?php

// Incluir Bootstrap CSS
function bootstrap_css()
{
    wp_enqueue_style(
        'bootstrap_css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',
        array(),
        '4.1.3'
    );
}
add_action('wp_enqueue_scripts', 'bootstrap_css');


// Incluir Bootstrap JS y dependencia popper
function bootstrap_js()
{
    wp_enqueue_script(
        'popper_js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
        array(),
        '1.14.3',
        true
    );
    wp_enqueue_script(
        'bootstrap_js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
        array('jquery', 'popper_js'),
        '4.1.3',
        true
    );
}
add_action('wp_enqueue_scripts', 'bootstrap_js');

/**
 * Register Custom Navigation Walker
 */
require_once 'class-wp-bootstrap-navwalker.php';

/**
 * Register Nav Menus
 */
function wpbasics_theme_setup()
{
    register_nav_menus(array(
        'primary' => __('Main Menu'),
        'social' => __('Social Menu')
    ));
}
add_action('after_setup_theme', 'wpbasics_theme_setup');