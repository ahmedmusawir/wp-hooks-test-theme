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

/**
 * ----------------------------------------------------------------------------------------
 * 5.0 - Display meta information for a specific post.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'alpha_post_meta' ) ) {
	function alpha_post_meta() {
		echo '<ul class="list-inline entry-meta">';

		if ( get_post_type() === 'post' ) {
			// If the post is sticky, mark it.
			if ( is_sticky() ) {
				echo '<li class="meta-featured-post"><i class="fa fa-thumb-tack"></i> ' . __( 'Sticky', 'alpha' ) . ' </li>';
			}

			// Get the post author.
			printf(
				'<li class="meta-author"><a href="%1$s" rel="author">%2$s</a></li>',
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);

			// Get the date.
			echo '<li class="meta-date"> ' . get_the_date() . ' </li>';

			// The categories.
			$category_list = get_the_category_list( ', ' );
			if ( $category_list ) {
				echo '<li class="meta-categories"> ' . $category_list . ' </li>';
			}

			// The tags.
			$tag_list = get_the_tag_list( '', ', ' );
			if ( $tag_list ) {
				echo '<li class="meta-tags"> ' . $tag_list . ' </li>';
			}

			// Comments link.
			if ( comments_open() ) :
				echo '<li>';
				echo '<span class="meta-reply">';
				comments_popup_link( __( 'Leave a comment', 'alpha' ), __( 'One comment so far', 'alpha' ), __( 'View all % comments', 'alpha' ) );
				echo '</span>';
				echo '</li>';
			endif;

			// Edit link.
			if ( is_user_logged_in() ) {
				echo '<li>';
				edit_post_link( __( 'Edit', 'alpha' ), '<span class="meta-edit">', '</span>' );
				echo '</li>';
			}
		}
	}
}

/**
 * ----------------------------------------------------------------------------------------
 * 6.0 - Display navigation to the next/previous set of posts.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'alpha_paging_nav' ) ) {
	function alpha_paging_nav() { ?>
		<ul>
			<?php 
				if ( get_previous_posts_link() ) : ?>
				<li class="next">
					<?php previous_posts_link( __( 'Newer Posts &rarr;', 'alpha' ) ); ?>
				</li>
				<?php endif;
			 ?>
			<?php 
				if ( get_next_posts_link() ) : ?>
				<li class="previous">
					<?php next_posts_link( __( '&larr; Older Posts', 'alpha' ) ); ?>
				</li>
				<?php endif;
			 ?>
		</ul> <?php
	}
}

/**
 * ----------------------------------------------------------------------------------------
 * 7.0 - Register the widget areas.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'alpha_widget_init' ) ) {
	function alpha_widget_init() {
		if ( function_exists( 'register_sidebar' ) ) {
			register_sidebar(
				array(
					'name' => __( 'Main Widget Area', 'alpha' ),
					'id' => 'sidebar-1',
					'description' => __( 'Appears on posts and pages.', 'alpha' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);

			register_sidebar(
				array(
					'name' => __( 'Footer Widget Area', 'alpha' ),
					'id' => 'sidebar-2',
					'description' => __( 'Appears on the footer.', 'alpha' ),
					'before_widget' => '<div id="%1$s" class="widget col-sm-3 %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
		}
	}

	add_action( 'widgets_init', 'alpha_widget_init' );
}































