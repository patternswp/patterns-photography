<?php
/**
 * Title: Section Title 1
 * Slug: patterns-photography/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Photography
 * @subpackage Patterns_Photography/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","className":"has-base-color"} -->
<h2 class="wp-block-heading has-text-align-left has-base-color"><?php esc_html_e( 'Services', 'patterns-photography' ); ?></h2>
<!-- /wp:heading -->


<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"quaternary","fontSize":"small"} -->
<p class="has-text-align-left has-quaternary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:300"><?php esc_html_e( 'We Envision Design &amp; Develop Digital Digital Experience that create possibility in an ever changing world.', 'patterns-photography' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
