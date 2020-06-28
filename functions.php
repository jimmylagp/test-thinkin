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
        'primary_menu' => __('Primary menu', 'thinkin-smart'),
        'footer_menu'  => __('Footer menu', 'thinkin-smart'),
    ));
}
add_action('after_setup_theme', 'theme_register_nav_menu', 0);

/**
 * Incs
 */
require get_template_directory().'/inc/filter-main-menu.php';
require get_template_directory().'/inc/filter-footer-menu.php';

/**
 * AJAX End point
 */
function packages_function() {
	$packages = $_POST['packages'];
	if (isset($packages) && $packages != "" && $packages != NULL) {
		update_field('global_stickers', $packages, 'option');
	}

	return $packages;
 }
add_action( 'wp_ajax_nopriv_packages_function',  'packages_function' );
add_action( 'wp_ajax_packages_function','packages_function' );

// Phone format
function phoneFormat($number) {
	if(ctype_digit($number) && strlen($number) == 10) {
  	    $number = substr($number, 0, 3) .' '. substr($number, 3, 3) .' '. substr($number, 6, 4);
	} else {
		if(ctype_digit($number) && strlen($number) == 7) {
			$number = substr($number, 0, 2) .' '. substr($number, 2, 5);
		}
	}
	return $number;
}