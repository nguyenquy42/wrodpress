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