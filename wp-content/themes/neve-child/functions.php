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
    }

    add_action( 'wp_enqueue_scripts', 'neve_child_styles', 100 );
}