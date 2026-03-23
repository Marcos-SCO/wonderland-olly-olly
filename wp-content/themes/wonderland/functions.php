<?php

if (!defined('ABSPATH')) {
    exit;
}

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');

add_post_type_support('page', 'excerpt');

// Composer Autoload
include_once('vendor/autoload.php');

// Functions
include_once('functions/index.php');


function wonderland_register_menus()
{
    register_nav_menus([
        'primary' => __('Navigation Menu', 'wonderland'),
    ]);
}
add_action('after_setup_theme', 'wonderland_register_menus');