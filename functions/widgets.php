<?php
/**
 *
 * Widgets
 *
 * @since  1.0.0
 *
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) { die; }


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Contato', 'neat' ),
		'id'            => 'footer_contato',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Form', 'neat' ),
		'id'            => 'footer_form',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer NewsLetter', 'neat' ),
		'id'            => 'footer_newsletter',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'widgets_init' );
