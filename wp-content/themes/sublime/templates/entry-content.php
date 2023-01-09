<?php
/**
 * Entry Content
 *
 * @package sublime
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
	<div class="post-content-archive-wrap clearfix">
		<?php get_template_part( 'templates/entry-content-media' ); ?>

		<div class="post-content-wrap">
			<?php
			$blocks = sublime_blog_entry_layout_blocks();

			foreach ( $blocks as $block ) :
				if ( 'title' == $block ) {
					get_template_part( 'templates/entry-content-title' );
				} elseif ( 'meta' == $block ) {
					get_template_part( 'templates/entry-content-meta' );
				} elseif ( 'excerpt_content' == $block ) {
					get_template_part( 'templates/entry-content-body' );
				} elseif ( 'readmore' == $block ) {
					get_template_part( 'templates/entry-content-readmore' );
				}
			endforeach;
			?>
		</div><!-- /.post-content-wrap -->
	</div><!-- /.post-content-archive-wrap -->
</article><!-- /.hentry -->