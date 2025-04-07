<?php
/**
 * Title: Footer
 * Slug: fse-boilerplate/hidden-footer
 * Inserter: no
 *
 * @package fse-boilerplate
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground-darker"}}}},"backgroundColor":"primary","textColor":"foreground-darker","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group has-foreground-darker-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:site-title {"level":0,"isLink":false,"fontSize":"small"} /-->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html( wp_date( 'Y' ) ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->


	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php esc_html_e( 'FSE-boilerplate theme', 'fse-boilerplate' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","className":"has-icon-color is-style-logos-only"} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"https://github.com/NicoMarcico/FSE-boilerplate","service":"github"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
