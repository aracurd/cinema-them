<?php
//Подключенные скрипты
require_once( 'lib/pagination.php' );
require_once ('lib/post_type.php');
require_once ('lib/wp_bootstrap_navwalker.php');
require_once ('lib/filds.php');
//


add_theme_support( 'post-thumbnails' ); // для всех типов постов


if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'menus' );
}

// Load jQuery
if ( ! is_admin() ) {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', ( "https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ), false, '1.9.1' );
	wp_enqueue_script( 'jquery' );
}

// Clean up the <head>
function removeHeadLinks() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
}

add_action( 'init', 'removeHeadLinks' );
remove_action( 'wp_head', 'wp_generator' );

// Declare sidebar widget zone
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar( array(
		'name'          => 'Sidebar Widgets',
		'id'            => 'sidebar-widgets',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	) );
}

/*Миниатюра*/
add_image_size( 'poster-size', 255, 375, true );

function enqueue_scripts () {
	global $wp_scripts;
	wp_register_script('html5-shim', 'http:html5shim.googlecode.com/svn/trunk/html5.js');
	wp_register_script('html5-respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js');
	wp_enqueue_script('html5-shim');
	wp_enqueue_script('html5-respond');
	$wp_scripts->add_data( 'html5-shim', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'html5-respond', 'conditional', 'lt IE 9' );
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'3.3.4',true);
	wp_enqueue_script('GoTop', get_template_directory_uri().'/js/GoTop.js', array(),'1',true);
	wp_enqueue_script('GoTop', get_template_directory_uri().'/js/YouRespons.js', array(),'1',true);


}
add_action('wp_enqueue_scripts', 'enqueue_scripts');