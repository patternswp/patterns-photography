<?php
/**
 * Title: Card 4
 * Slug: patterns-photography/card-4
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Photography
 * @subpackage Patterns_Photography/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"style":"solid","width":"1px"},"spacing":{"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"backgroundColor":"secondary","textColor":"default","borderColor":"quinary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-quinary-border-color has-default-color has-secondary-background-color has-text-color has-background has-link-color"
    style="border-style:solid;border-width:1px">
    
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":5} -->
<h5 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Package Deluxe', 'patterns-photography' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( '$69', 'patterns-photography' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"
        style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:list {"className":"is-style-checkmark-list","fontSize":"small"} -->
<ul class="wp-block-list is-style-checkmark-list has-small-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Lorem ipsum dolor sit amet', 'patterns-photography' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Lorem ipsum dolor sit amet', 'patterns-photography' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Lorem ipsum dolor sit amet', 'patterns-photography' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Lorem ipsum dolor sit amet', 'patterns-photography' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Lorem ipsum dolor sit amet', 'patterns-photography' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Lorem ipsum dolor sit amet', 'patterns-photography' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"
        style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
        <!-- wp:button {"textColor":"default","className":"is-style-button-outline-secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"borderColor":"default"} -->
        <div class="wp-block-button is-style-button-outline-secondary"><a
                class="wp-block-button__link has-default-color has-text-color has-link-color has-border-color has-default-border-color wp-element-button"><?php esc_html_e( 'Purchase Now', 'patterns-photography' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->