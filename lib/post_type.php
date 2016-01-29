<?php
function mult_post_type() {

$labels = array(
'name'                  => _x( 'Мультфильмы', 'Post Type General Name', 'text_domain' ),
'singular_name'         => _x( 'Мультфильмы', 'Post Type Singular Name', 'text_domain' ),
'menu_name'             => __( 'Мультфильмы', 'text_domain' ),
'name_admin_bar'        => __( 'Мультфильмы', 'text_domain' ),
'archives'              => __( 'Item Archives', 'text_domain' ),
'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
'all_items'             => __( 'Все мультфильмы', 'text_domain' ),
'add_new_item'          => __( 'Добавить новый мультфильм', 'text_domain' ),
'add_new'               => __( 'Добавить', 'text_domain' ),
'new_item'              => __( 'New Item', 'text_domain' ),
'edit_item'             => __( 'Edit Item', 'text_domain' ),
'update_item'           => __( 'Обновить', 'text_domain' ),
'view_item'             => __( 'View Item', 'text_domain' ),
'search_items'          => __( 'Найти', 'text_domain' ),
'not_found'             => __( 'Не найдено', 'text_domain' ),
'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
'featured_image'        => __( 'Миниатюра', 'text_domain' ),
'set_featured_image'    => __( 'Установить миниатюру', 'text_domain' ),
'remove_featured_image' => __( 'Удалить миниатюру', 'text_domain' ),
'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
'items_list'            => __( 'Items list', 'text_domain' ),
'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
);
$args = array(
'label'                 => __( 'Мультфильмы', 'text_domain' ),
'description'           => __( 'Каталог мультфильмов', 'text_domain' ),
'labels'                => $labels,
'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
'taxonomies'            => array( 'category', 'post_tag' ),
'hierarchical'          => false,
'public'                => true,
'show_ui'               => true,
'show_in_menu'          => true,
'menu_position'         => 5,
'show_in_admin_bar'     => true,
'show_in_nav_menus'     => true,
'can_export'            => true,
'has_archive'           => true,
'exclude_from_search'   => false,
'publicly_queryable'    => true,
'capability_type'       => 'page',
'menu_icon'             => 'dashicons-format-video',
);
	register_post_type( 'multfilms', $args );

}
add_action( 'init', 'mult_post_type', 0 );

function games_post_type() {

	$labels = array(
		'name'                  => _x( 'Игры', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Игры', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Игры', 'text_domain' ),
		'name_admin_bar'        => __( 'Игры', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Все игры', 'text_domain' ),
		'add_new_item'          => __( 'Добавить новую игру', 'text_domain' ),
		'add_new'               => __( 'Добавить', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Обновить', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'search_items'          => __( 'Найти', 'text_domain' ),
		'not_found'             => __( 'Не найдено', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Миниатюра', 'text_domain' ),
		'set_featured_image'    => __( 'Установить миниатюру', 'text_domain' ),
		'remove_featured_image' => __( 'Удалить миниатюру', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Игры', 'text_domain' ),
		'description'           => __( 'Каталог игор на Xbox', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'             => 'dashicons-controls-play',

	);
	register_post_type( 'games', $args );

}
add_action( 'init', 'games_post_type', 0 );