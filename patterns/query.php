<?php
/**
 * Title: Query
 * Slug: fse-boilerplate/query
 * Categories: posts
 * Block Types: core/post-content, core/query, core/post-title
 *
 * @package fse-boilerplate
 * @since 1.0.0
 */

?>
<!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
	<!-- wp:post-title {"level":2,"isLink":true} /-->
	<!-- wp:post-featured-image {"aspectRatio":"16/9","isLink":true} /-->
	<!-- wp:pattern {"slug":"fse-boilerplate/hidden-post-meta"} /-->
	<!-- wp:post-excerpt {"moreText":"<?php esc_html_e( 'Read more', 'fse-boilerplate' ); ?>"} /-->
	<!-- /wp:post-template -->
	<!-- wp:query-no-results -->
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'No results found.', 'fse-boilerplate' ); ?></p><!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous /-->
	<!-- wp:query-pagination-numbers /-->
	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
