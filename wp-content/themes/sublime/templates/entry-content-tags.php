<?php
/**
 * Entry Content / Tags
 *
 * @package sublime
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Exit if disabled via Customizer
if ( is_single() && ! sublime_get_mod( 'blog_single_tags', true ) )
	return;

$text = sublime_get_mod( 'blog_single_tags_text', '' );
the_tags( '<div class="post-tags clearfix"><div class="inner">'. esc_html( $text ),', ','</div></div>' );


