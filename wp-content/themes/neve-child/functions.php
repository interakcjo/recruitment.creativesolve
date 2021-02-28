<?php

if(!function_exists('neve_child_styles')) {
    function neve_child_styles() {
        $parenthandle = 'neve-style';

        $theme = wp_get_theme();

        wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
            array(),  // if the parent theme code has a dependency, copy it to here
            $theme->parent()->get('Version')
        );

        wp_enqueue_style( 'child-style', get_stylesheet_uri(),
            array( $parenthandle ),
            $theme->get('Version') // this only works if you have Version in the style header
        );

        wp_enqueue_script( 'custom-child-script', get_stylesheet_directory_uri() . '/assets/js/navigation.js' );

        wp_enqueue_style( 'custom-child-style', get_stylesheet_directory_uri() . '/assets/css/style.css' );
    }

    add_action( 'wp_enqueue_scripts', 'neve_child_styles', 100 );
}

// VARIABLES
if(!defined('CHILD_INC')) define('CHILD_INC', get_stylesheet_directory() . '/inc');
if(!defined('CHILD_PARTS')) define('CHILD_PARTS', get_stylesheet_directory() . '/custom-template-parts');
if(!defined('CHILD_URI')) define('CHILD_URI', get_stylesheet_directory_uri());
if(!defined('CHILD_IMG_URI')) define('CHILD_IMG_URI', get_stylesheet_directory_uri() . '/assets/img');

// INC FILES
require CHILD_INC . '/allow-svg.php';
require CHILD_INC . '/custom-fields.php';
require CHILD_INC . '/custom-menus.php';