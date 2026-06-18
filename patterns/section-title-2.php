<?php
/**
 * Title: Section Title 2
 * Slug: patterns-photography/section-title-2
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Photography
 * @subpackage Patterns_Photography/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","className":"has-base-color"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color"><?php esc_html_e( 'We love high quality photo products', 'patterns-photography' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"quaternary","fontSize":"small"} -->
<p class="has-text-align-center has-quaternary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:300"><?php esc_html_e( 'Our Best Creation Where We Make The Photograph Alive.', 'patterns-photography' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->