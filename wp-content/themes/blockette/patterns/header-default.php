<?php
/**
 * Title: Default Header (simple)
 * Slug: blockette/header-default
 * Categories: blockette-header
 * Block Types: core/template-part
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var(--wp--custom--h-spacing, 2.375rem)","left":"var(--wp--custom--h-spacing, 2.375rem)"}}},"backgroundColor":"background","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group has-background-background-color has-background"
	style="padding-right:var(--wp--custom--h-spacing, 2.375rem);padding-left:var(--wp--custom--h-spacing, 2.375rem)">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:site-logo {"width":40} /-->

		<!-- wp:site-title {"className":"is-style-blockette-text-shadow","fontSize":"large"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0vw"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small"} -->
	<div class="wp-block-group has-small-font-size">

		<!-- wp:pattern {"slug":"blockette/dummy-navigation"} /-->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
