<?php
if (!function_exists('mrty_theme_setup')):
    function mrty_theme_setup()
    {
        add_theme_support('wp-block-styles');
        add_theme_support('editor-styles');
        add_editor_style('style.css');
    }
endif;
add_action('after_setup_theme', 'mrty_theme_setup');

function mrty_theme_scripts()
{
    wp_enqueue_style('mrty-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mrty_theme_scripts');
