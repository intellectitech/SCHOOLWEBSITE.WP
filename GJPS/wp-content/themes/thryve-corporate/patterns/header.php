<?php
/**
 * Title: Header
 * Slug: thryve-corporate/header
 * Categories: header, thryve-corporate
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"white","textColor":"black","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-black-color has-white-background-color has-text-color has-background has-link-color" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"700","letterSpacing":"-1px"}},"fontFamily":"inter-tight"} /-->

<!-- wp:group {"className":"thryve-fse-header-nav-wrapper","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group thryve-fse-header-nav-wrapper" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:navigation {"icon":"menu","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"thryve-no-mobile"} -->
<div class="wp-block-buttons thryve-no-mobile"><!-- wp:button {"className":"thryve-btn-has-arrow"} -->
<div class="wp-block-button thryve-btn-has-arrow"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'contact Us', 'thryve-corporate' ); ?> <img class="wp-image-37" style="width: 150px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow-right.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->