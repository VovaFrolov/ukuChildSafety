<?php

add_filter('show_admin_bar', '__return_false'); // Відключити адмінпанель
function enqueue_custom_style()
{
    wp_enqueue_style('bootstrap-reboot_css', get_template_directory_uri() . '/css/bootstrap-reboot.css');
    wp_enqueue_style('common_css', get_template_directory_uri() . '/css/common.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_style');

function enqueue_custom_script()
{
    wp_enqueue_script('smoothscroll_js', get_template_directory_uri() . '/js/SmoothScroll.js', array('jquery'), true);
    wp_enqueue_script('script_js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), true);
}

add_action('get_footer', 'enqueue_custom_script');



/*Theme Settings*/
function theme_setup()
{
    add_theme_support('custom-logo');
    register_nav_menu('primary', 'Primary menu');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_setup');


/*ACF OPRIONS*/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
