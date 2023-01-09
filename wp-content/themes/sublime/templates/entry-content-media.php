<?php
/**
 * Entry Content / Media
 *
 * @package sublime
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// // Exit if disabled via Customizer
if ( is_single() && ! sublime_get_mod( 'blog_single_media', true ) )
	return;

$html = $cls = '';

switch ( get_post_format() ) {
	case 'gallery':
		$icon = 'post-gallery';
		$size = 'sublime-post-standard';

		if ( is_single() )
			$size = 'sublime-post-single';

		if ( empty( $images ) )
			break;

		wp_enqueue_script( 'slick' );
		$html = '<div class="blog-gallery">';
  
		foreach ( $images as $image ) {
			$html .= sprintf(
				'<li><img src="%s" alt="%s"></li>',
				esc_url( $image['url'] ),
				esc_attr__( 'Image', 'sublime' )
			);
		}
		$html .= '</div>';
		break;
	case 'video':
		$icon = 'post-video';
		if ( ! $video )
			break;

		if ( filter_var( $video, FILTER_VALIDATE_URL ) ) {
			// If URL: show oEmbed HTML
			if ( $oembed = @wp_oembed_get( $video ) )
				$html .= $oembed;
		} else {
			// If embed code: just display
			$html .= $video;
		}
		break;
	default:
		$icon = 'post-standard"';
		$size = 'sublime-post-standard';

		if ( is_single() )
			$size = 'sublime-post-single';

		if ( is_page_template( 'templates/page-blog-grid.php' ) )
			$size = 'sublime-post-grid';

		$thumb = get_the_post_thumbnail( get_the_ID(), $size );
		if ( empty( $thumb ) )
			return;

		if ( is_single() ) {
			$html .= $thumb;
		} else {
			$html .= '<a href="'. esc_url( get_permalink() ) .'">';
			$html .= $thumb;
			$html .= '</a>';
		}
}

if ( sublime_get_mod( 'blog_custom_date', false ) ) {
	$html .= '<div class="post-date-custom"><span class="day">'.get_the_date("d").'</span><span class="month">'.get_the_date("M").'</span></div>';
}

if ( $html )
	printf( '<div class="post-media %2$s clearfix">%1$s</div>', $html, $cls );
