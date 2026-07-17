<?php
/**
 * Title: Articles
 * Slug: thryve-corporate/articles
 * Categories: thryve-corporate
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"Articles"},"className":"thryve-responsive-spacing","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"100px","bottom":"100px","left":"20px","right":"20px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group thryve-responsive-spacing" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px"><!-- wp:group {"className":"thryve-section-title-wrapper","style":{"spacing":{"padding":{"bottom":"80px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group thryve-section-title-wrapper" style="padding-bottom:80px"><!-- wp:heading {"textAlign":"left","className":"is-style-default thryve-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.2","fontSize":"45px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
<h2 class="wp-block-heading has-text-align-left is-style-default thryve-heading" style="margin-top:0;margin-bottom:0;font-size:45px;font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html__( 'Latest News', 'thryve-corporate' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"645px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<p class="has-text-align-left"><?php echo esc_html__( 'Ad condimentum pharetra habitant leo eu gravida dignissim parturient lorem curae bibendum vivamus donec libero rutrum elementum euismod etiam et ipsum class sagittis', 'thryve-corporate' ); ?></p>
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
<p><?php echo esc_html__( 'No results', 'thryve-corporate' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->