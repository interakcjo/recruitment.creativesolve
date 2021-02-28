<?php

// This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'menu-1' => esc_html__( 'Menu główne', 'neve-child' ),
    )
);

// Add title to menu item anchors
if(!function_exists('menu_item_anchors_title')) {
    function menu_item_anchors_title ( $items, $args ) {
        // loop
        foreach( $items as $item ) {
            $item->attr_title = $item->title;
        }

        return $items;
    }
    add_filter ( 'wp_nav_menu_objects', 'menu_item_anchors_title', 10, 2 );
}

// Simple function to check if menu exists and display them
if(!function_exists('display_custom_theme_menu')) {
    function display_custom_theme_menu($location) {
        $theme_location = $location;
        $theme_locations = get_nav_menu_locations();
        $menu_obj = get_term( $theme_locations[$theme_location], 'nav_menu' );
        $menu_slug = $menu_obj->slug;

        if(has_nav_menu($theme_location)) {
            wp_nav_menu(
                array(
                    'theme_location' => $theme_location,
                    'menu_id'        => uniqid() . '-' . $menu_slug,
                    'menu_class'     => 'menu menu-' . $menu_slug,
                    'container'      => false,
                )
            );
        }
    }
}