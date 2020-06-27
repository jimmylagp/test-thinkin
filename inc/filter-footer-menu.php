<?php
/**
 * Add custom class to menu item
 *
 * @param [array] $classes
 * @param [object] $item
 * @param [object] $args
 * @return void
 */
function special_footer_item_class($classes, $item, $args) {
    if (in_array('menu-item', $classes) && 'footer_menu' === $args->theme_location && $item->menu_item_parent === '0') {
        $classes[] = 'footer__nav-option';
    }

    return $classes;
}
add_filter('nav_menu_css_class' , 'special_footer_item_class' , 10 , 3);

/**
 * Add custom class to menu link
 *
 * @param [array] $atts
 * @param [object] $item
 * @param [onject] $args
 * @return void
 */
function add_footer_link_atts($atts, $item, $args) {
    if ('footer_menu' === $args->theme_location && $item->menu_item_parent === '0') {
        $atts['class'] = "footer__nav-link";
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_footer_link_atts', 10, 3);