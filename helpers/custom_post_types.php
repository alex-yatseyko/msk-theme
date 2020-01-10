<?php
	/**
	 * Post Type: Услуги.
	 */

function cptui_register_my_cpts_service() {


	$labels = [
		"name" => __( "Услуги", "MSK" ),
		"singular_name" => __( "Услуга", "MSK" ),
	];

	$args = [
		"label" => __( "Услуги", "MSK" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "service", "with_front" => true ],
		"query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "menu_icon" => 'dashicons-admin-tools'
	];

	register_post_type( "service", $args );
}

add_action( 'init', 'cptui_register_my_cpts_service' );


	/**
	 * Post Type: Проекты.
	 */


function cptui_register_my_cpts_project() {

	$labels = [
		"name" => __( "Проекты", "MSK" ),
		"singular_name" => __( "Проект", "MSK" ),
	];

	$args = [
        "label" => __( "Проекты", "MSK" ),
        "menu_icon" => 'dashicons-admin-home',
        'taxonomies'  => array( 'category' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "project", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", /*"editor", "thumbnail", */'custom-fields' ],
	];

	register_post_type( "project", $args );
}

add_action( 'init', 'cptui_register_my_cpts_project' );

/* Projects fields */

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5de302ecbd3e7',
        'title' => 'Поля проектов',
        'fields' => array(
            array(
                'key' => 'field_5e01496eda0e4',
                'label' => 'Обложка/город',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5de302f5d9c7f',
                'label' => 'Обложка',
                'name' => 'cover',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '33',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5de3033c35d86',
                'label' => 'Город',
                'name' => 'city',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '66',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e01497bda0e5',
                'label' => 'Заказчик/текст до слайдера',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e01468f44181',
                'label' => 'Название заказчика + текст до слайдера',
                'name' => 'nazvanie_zakazchika',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e01469a44182',
                'label' => 'Лого заказчика',
                'name' => 'logo_zakazchika',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5e01498dda0e6',
                'label' => 'Слайдер',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e0146ba694ad',
                'label' => 'Фото для слайдера',
                'name' => 'foto_dlya_slajdera',
                'type' => 'gallery',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'min' => 1,
                'max' => 20,
                'insert' => 'append',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'project',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));
    
    endif;



    // function create_portfolio_taxonomies() {
    //     $labels = array(
    //         'name'              => _x( 'Categories', 'taxonomy general name' ),
    //         'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
    //         'search_items'      => __( 'Search Categories' ),
    //         'all_items'         => __( 'All Categories' ),
    //         'parent_item'       => __( 'Parent Category' ),
    //         'parent_item_colon' => __( 'Parent Category:' ),
    //         'edit_item'         => __( 'Edit Category' ),
    //         'update_item'       => __( 'Update Category' ),
    //         'add_new_item'      => __( 'Add New Category' ),
    //         'new_item_name'     => __( 'New Category Name' ),
    //         'menu_name'         => __( 'Categories' ),
    //     );
    
    //     $args = array(
    //         'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
    //         'labels'            => $labels,
    //         'show_ui'           => true,
    //         'show_admin_column' => true,
    //         'query_var'         => true,
    //         'rewrite'           => array( 'slug' => 'categories' ),
    //     );
    
    //     register_taxonomy( 'portfolio_categories', array( 'project' ), $args );
    // }
    // add_action( 'init', 'create_portfolio_taxonomies', 0 );