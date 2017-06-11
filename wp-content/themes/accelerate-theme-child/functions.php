<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

//Create custom post type
function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

// Reverse Case Studies Archive order
function reverse_archive_order( $query ){

if ( !is_admin() && $query->is_post_type_archive('case_studies') && $query->is_main_query() ) {
            $query->set('order', 'ASC');
        }
}
add_action( 'pre_get_posts', 'reverse_archive_order' );

// Narrow width only for contact page

add_filter( 'body_class','accelerate_body_classes' );
function accelerate_body_classes( $classes ) {

 
  if ( is_page( 'contact-us' ) ) {
    $classes[] = 'contact-page';
  }
    return $classes;

}

//Dynamic sidebar

function accelerate_theme_child_widget_init() {
    
    register_sidebar( array(
        'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
        'id' => 'sidebar-2',
        'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    
        register_sidebar( array(
        'name' =>__( 'Blog sidebar', 'accelerate-theme-child'),
        'id' => 'sidebar-3',
        'description' => __( 'Appears on the blog page template', 'accelerate-theme-child' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );