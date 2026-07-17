<?php
/**
 * Title: Articles
 * Slug: thryve-corporate-dark/articles
 * Categories: thryve-corporate-dark
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"Articles","patternName":"thryve-corporate-dark/articles","categories":["thryve-corporate-dark"]},"className":"thryve-responsive-spacing","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"secondary-bg","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group thryve-responsive-spacing has-secondary-bg-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"thryve-section-title-wrapper","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group thryve-section-title-wrapper" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"className":"is-style-default thryve-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.2","fontSize":"45px","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center is-style-default thryve-heading has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:45px;font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html__( 'Latest Blogs and Articles', 'thryve-corporate-dark' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"750px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center"> <?php echo esc_html__( 'Mauris posuere metus auctor morbi facilisis volutpat aliquam venenatis', 'thryve-corporate-dark' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"height":"300px","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}}} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"23px"}}} /-->

<!-- wp:post-excerpt {"excerptLength":14} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php echo esc_html__( 'No results found.', 'thryve-corporate-dark' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->