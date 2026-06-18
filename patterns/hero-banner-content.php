<?php
/**
 * Title: Hero Banner Content
 * Slug: patterns-photography/hero-banner-content
 * Categories: featured
 * Description: A layout that displays a title, content, and button group, suited for showcasing a hero banner.
 *
 * @package    Patterns_Photography
 * @subpackage Patterns_Photography/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"metadata":{"name":"Hero content"},"verticalAlignment":"bottom","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'The art of making memories', 'patterns-photography' ); ?> </h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"default","fontSize":"small"} -->
<p class="has-default-color has-text-color has-small-font-size"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.', 'patterns-photography' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
    
<!-- wp:paragraph {"align":"right","className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small"} -->
<p class="has-text-align-right pwp-txt-dec-non has-link-color has-small-font-size"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-photography' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small"} -->
<p class="has-text-align-right pwp-txt-dec-non has-link-color has-small-font-size"><a href="<?php echo esc_url( 'tel:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-photography' ); ?></a></p>
<!-- /wp:paragraph -->


</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->