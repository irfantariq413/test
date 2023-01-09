<?php
/**
 * Entry Content / Title
 *
 * @package sublime
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Exit if not defined
if ( ! ( $title = get_the_title() ) )
	return;

$html = $sticky = '';
if ( is_sticky() && is_home() && ! is_paged() )
	$sticky = '<span class="sticky-post"><i class="elegant-icon_pushpin"></i></span>';

if ( is_single() ) {
	if ( sublime_get_mod( 'blog_single_title', false ) ) {
		$html = '<h1 class="post-title">%1$s</h1>';
	} else { $html = ''; }
} else {
	$html .= '%3$s<h2 class="post-title"><a href="%2$s" rel="bookmark">%1$s</a></h2>';
}

printf( $html, $title, esc_url( get_permalink() ), $sticky );