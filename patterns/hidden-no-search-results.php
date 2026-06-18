<?php
/**
 * Title: No Search Result
 * Slug: patterns-photography/hidden-no-search-results
 * Inserter: no
 *
 * @package    Patterns_Photography
 * @subpackage Patterns_Photography/patterns
 * @since      1.0.0
 */

?>
<!-- wp:paragraph -->
<p>
<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'patterns-photography' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'patterns-photography' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'patterns-photography' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'patterns-photography' ); ?>","buttonUseIcon":true} /-->
