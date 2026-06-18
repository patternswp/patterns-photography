<?php
/**
 * Title: Copyright
 * Slug: patterns-photography/copyright
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Dynamic copyright text
 *
 * @package    Patterns_Photography
 * @subpackage Patterns_Photography/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"x-small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-default-color has-text-color has-link-color has-x-small-font-size">
    
<!-- wp:paragraph {"placeholder":"<?php esc_attr_e( 'Dynamic copyright text', 'patterns-photography' ); ?>","metadata":{"bindings":{"content":{"source":"patterns-photography/copyright","args":{"key":"copyright"}}}}} -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '. All Rights Reserved', 'patterns-photography' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->