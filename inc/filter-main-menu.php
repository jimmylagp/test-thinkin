<?php
/**
 * Add custom class for submenu
 *
 * @param [array] $classes
 * @param [object] $args
 * @param [object] $depth
 * @return void
 */
function nav_menu_submenu_class($classes, $args, $depth) {
    if (in_array('sub-menu', $classes) && 'primary_menu' === $args->theme_location) {
        $classes[] = 'header__nav-sub';
    }

    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'nav_menu_submenu_class', 10, 3);

/**
 * Add custom class to menu item
 *
 * @param [array] $classes
 * @param [object] $item
 * @param [object] $args
 * @return void
 */
function special_nav_class($classes, $item, $args) {
    if (in_array('menu-item', $classes) && 'primary_menu' === $args->theme_location && $item->menu_item_parent === '0') {
        $classes[] = 'header__nav-option';
    } elseif ('primary_menu' === $args->theme_location) {
        $classes[] = 'header__nav-option';
    }

    if (in_array('menu-item-has-children', $classes) && 'primary_menu' === $args->theme_location) {
        $classes[] = 'header__nav-option--has-children';
    }

    if (in_array('menu-item', $classes) && 'primary_menu' === $args->theme_location && $item->menu_item_parent !== '0') {
        $classes[] = 'header__nav-option--child';
    }

    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 3);

/**
 * Add custom class to menu link
 *
 * @param [array] $atts
 * @param [object] $item
 * @param [onject] $args
 * @return void
 */
function add_link_atts($atts, $item, $args) {
    if ('primary_menu' === $args->theme_location && $item->menu_item_parent === '0') {
        $atts['class'] = "header__nav-link";
    } elseif ('primary_menu' === $args->theme_location) {
        $atts['class'] = "header__nav-sub-link";
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_link_atts', 10, 3);

/**
 * Filtering menu link
 *
 * @param [object] $args
 * @param [object] $item
 * @param [object] $depth
 * @return void
function nav_menu_item_filter($args, $item, $depth) {
    $args->link_before = '';
    $args->link_after  = '';
    $args->before = '';

    if (in_array('menu-item-has-children', $item->classes) && $args->theme_location == 'primary_menu' && $item->menu_item_parent === '0') {
        $args->link_after  = '<svg xmlns="http://www.w3.org/2000/svg" class="main-menu__submenu-icon" width="18" height="18" viewBox="0 0 18 18"><path fill="#ff5f5e" fill-rule="evenodd" d="M13.083 6L8.99 10.071l-4.07-4.07-.919.92 4.987 4.986L14 6.922z"/></svg>';
        //var_dump($args);
    }

    if (in_array('menu-item-has-children', $item->classes) && $args->theme_location == 'mobile_menu' && $item->menu_item_parent === '0') {
        $args->before = '<button type="button" class="mobile-menu__arrow-btn"><svg class="mobile-menu__arrow" xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10"><path fill="#FF5F5E" fill-rule="evenodd" d="M.95 8.958c.267.27.705.27.973.002l7.096-7.055 7.055 7.054c.269.27.705.27.974 0 .27-.268.27-.704 0-.973L9.506.446C9.373.31 9.196.242 9.02.242c-.177 0-.352.067-.485.201L.953 7.984c-.27.27-.27.705-.003.974"/></svg></button>';
    }

    return $args;
}
add_filter('nav_menu_item_args', 'nav_menu_item_filter', 901, 3);
 **/