<?php

//Add title tag
add_theme_support('title-tag');

// Menu support
add_theme_support( 'menus' );

// Enable thumbnails
add_theme_support( 'post-thumbnails' );

// Enable optoins page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}

/**
 * Enqueue JS files
 *
 * @return void
 */
function theme_js() {
	if(!is_admin()) {
		wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-1.12.4.min.js', array(), null, false);
        wp_register_script('main', get_template_directory_uri().'/dist/js/main.min.js', false, '1.0.0', true);
		wp_enqueue_script(array('jquery', 'main'));
	}
}
add_action('wp_enqueue_scripts', 'theme_js');

/**
 * Enqueue CSS files
 *
 * @return void
 */
function theme_css() {
    wp_enqueue_style('main', get_template_directory_uri().'/dist/css/style.min.css', array(), '1.0');

}
add_action('wp_enqueue_scripts', 'theme_css');

/**
 * Undocumented function
 *
 * @return void
 */
function theme_register_nav_menu(){
    register_nav_menus(array(
        'primary_menu' => __('Menú Principal', 'trialap'),
        'mobile_menu' => __('Menú Móvil', 'trialap'),
        'footer_menu_1'  => __('Menú de Pie de Página 1', 'trialap'),
        'footer_menu_2'  => __('Menú de Pie de Página 2', 'trialap'),
        'footer_menu_3'  => __('Menú de Pie de Página 3', 'trialap'),
        'sitemap'  => __('Mapa del sitio', 'trialap'),
        'search'  => __('Buscador', 'trialap'),
        'error'  => __('Error 404', 'trialap'),
    ));
}
add_action('after_setup_theme', 'theme_register_nav_menu', 0);

/**
 * Incs
 */
require get_template_directory().'/inc/filter-main-menu.php';
require get_template_directory().'/inc/filter-error-menu.php';
require get_template_directory().'/inc/filter-search-menu.php';
require get_template_directory().'/inc/filter-footer-menu.php';
require get_template_directory().'/inc/filter-mobile-menu.php';

// Phone format
function phoneFormat($number) {
	if(ctype_digit($number) && strlen($number) == 10) {
  	    $number = '('. substr($number, 0, 2) .') '. substr($number, 2, 4) .' '. substr($number, 6, 4);
	} else {
		if(ctype_digit($number) && strlen($number) == 7) {
			$number = substr($number, 0, 2) .' '. substr($number, 2, 5);
		}
	}
	return $number;
}