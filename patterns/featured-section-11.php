<?php
/**
 * Title: Featured Section 11
 * Slug: patterns-photography/featured-section-11
 * Categories: call-to-action, contact, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Photography
 * @subpackage Patterns_Photography/patterns
 * @since      1.0.0

 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","className":"has-base-color"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color"><?php esc_html_e( 'Get in Touch with Us', 'patterns-photography' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"quaternary","fontSize":"small"} -->
<p class="has-text-align-center has-quaternary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:300"><?php esc_html_e( 'If you need to message us, please fill out the form bellow', 'patterns-photography' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- wp:shortcode -->
 <?php esc_html_e( 'Add Contact form shortcode', 'patterns-photography' ); ?>

<!-- /wp:shortcode --></div>
<!-- /wp:group -->
