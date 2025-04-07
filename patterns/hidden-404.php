<?php
/**
 * Title: 404
 * Slug: fse-boilerplate/hidden-404
 * Inserter: no
 *
 * @package fse-boilerplate
 * @since 1.0.0
 */

?>
<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<h1 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--50)">
	<?php esc_html_e( 'Page not found', 'fse-boilerplate' ); ?>
</h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'fse-boilerplate' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'Search form label', 'fse-boilerplate' ); ?>","showLabel":false,"buttonText":"<?php echo esc_html_x( 'Search', 'Search form submit button text', 'fse-boilerplate' ); ?>"} /-->
