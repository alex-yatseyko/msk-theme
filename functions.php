<?php

include_once( get_stylesheet_directory() .'/helpers/breadcrumbs.php');
include_once( get_stylesheet_directory() .'/helpers/custom_post_types.php');
include_once( get_stylesheet_directory() .'/helpers/change_default_post_name.php');
include_once( get_stylesheet_directory() .'/helpers/count_views.php');


// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/* Register Menu */
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}

/* Styles */

add_action( 'wp_enqueue_scripts', 'mskStyles' );

function mskStyles() {
    wp_enqueue_style( 'cmc', get_stylesheet_directory_uri() . '/css/cmc.css');
    wp_enqueue_style( 'cmc-media', get_stylesheet_directory_uri() . '/css/media_cmc.css');
    wp_enqueue_style( 'add-style', get_stylesheet_directory_uri() . '/css/add_styles.css');
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/slider.js', array(), '1.0.0', true );
}

register_nav_menus(
    array(
    'primary-menu' => __( 'Главное меню' ),
    'secondary-menu' => __( 'Secondary Menu' )
    )
);

// Excerpt limitation
function get_excerpt(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 180);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.'... <a class="msk-readmore" href="'.get_the_permalink().'">Подробнее</a>';
    return $excerpt;
}


// Category class

// function add_category_parent_css($css_classes, $category, $depth, $args){
//     if($args['has_children']){
//         $css_classes[] = 'has_children';
//     }
//     return $css_classes;
// }

// add_filter( 'category_css_class', 'add_category_parent_css', 10, 4);