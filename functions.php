<?php
// require_once( 'hooks-example/export_wp_filters.php');
/**
 * Proper way to enqueue scripts and styles
 */
function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	//echo get_stylesheet_uri() . '<br>';
	// echo get_template_directory_uri();
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

/**
*
* Header hook and action
*
**/

function kick_in_header() {

	echo '<div class="my-header-hook">';
	echo '<a href="' . get_home_url() . '" class="button button-primary u-pull-right">Button By Hooking</a>';
	echo '</div>';
} 

add_action( 'wp_head', 'kick_in_header', 10 );


/**
*
* Footer hook and action
*
**/

function kick_in_footer() {

	echo '<div class="my-footer-hook">';
	echo '<h5 class="u-pull-right">This Footer coming from function.php. Copyright' . date('Y') . ' &copy;</h5>';
	echo '</div>';

}

add_action( 'wp_footer', 'kick_in_footer', 10 );

/**
*
* First Do Action
*
**/



function my_table_function( $arg1, $arg2 ) {
	
	echo $arg1;
	echo $arg2;

}


add_action( 'my_table_action', 'my_table_function', 10, 2 );

/**
*
* First filter - controlling the excerpt_length
*
**/

function my_custom_excerpt_length( $length ) {

	return 20;
}

add_filter( 'excerpt_length', 'my_custom_excerpt_length', 999 );
































