<?php

/**
 * Declare:
 * Theme name.
 * Theme path.
 * "core" folder path.
 * Content width.
 */
define('THEME_URL', get_stylesheet_directory());
/**
 * Dump data.
 */

function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }

add_action( 'init', 'wpb_custom_new_menu' );

add_theme_support( 'post-thumbnails' );

function ddd($args)
{
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
    echo '<br>';
    die();
}

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function change_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/', '/ class="dropdown-menu"/', $menu);
    return $menu;
}

add_filter('wp_nav_menu', 'change_submenu_class');

add_action('admin_menu', 'add_theme_option_menu');
function add_theme_option_menu() {
    //create new top-level menu
    add_theme_page('LPTech Themes Setting', 'Theme Settings', 'administrator', 'custom-menu', 'lptech_template_admin_setting' );
    //call register settings function
    add_action( 'admin_init', 'register_lptech_menu' );
}

function register_lptech_menu() {
    //register our settings
    register_setting( 'lptech-themes-settings-group', 'new_option_name' );
    
}

function lptech_template_admin_setting() {
    include 'template-parts/theme-options.php';
}