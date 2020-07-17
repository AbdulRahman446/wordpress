<?php
require_once('wp-bootstrap-navwalker.php');

function add_style() {

	wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome.css', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('css', get_template_directory_uri() . '/css/main.css');

}


function add_script() {
	wp_deregister_script(jquery);
	wp_register_script(jquery, includes_url('/js/jquery/jquery.js'), false, '', true );
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap.js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
	wp_enqueue_script('main.js', get_template_directory_uri() . '/js/main.js', array(), false, true);
	wp_enqueue_script( 'wpdemo-respond', get_template_directory_uri().'/js/respond.min.js' );
	wp_script_add_data( 'wpdemo-respond', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'wpdemo-html5shiv',get_template_directory_uri().'/js/html5shiv.js');
	wp_script_add_data( 'wpdemo-html5shiv', 'conditional', 'lt IE 9' );


}
function custom_menu(){
		register_nav_menus(array(
			
			'bootstrap-menu' => 'Navigation Bar',
			'footer-menu' =>'Footer Menu' 
		));
}


function menu(){
	wp_nav_menu(array(
		'theme_location'    =>'bootstrap_menu' , 
		 'menu_class'		=>'nav navbar-nav navbar-right',
		 'container'		=> 'false',
		 'depth' 			=> 2,
		 'walker' 			=>new wp_bootstrap_navwalker() 


));
}
add_action('wp_enqueue_scripts', 'add_style');
add_action('wp_enqueue_scripts', 'add_script');
add_action('init', 'custom_menu');
