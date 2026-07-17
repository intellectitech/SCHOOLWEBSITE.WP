<?php
/**
 * Title: Banner
 * Slug: thryve-corporate/featured-banner
 * Categories: banner, thryve-corporate, about-us
 * Description: A hero section with a title, a paragraph, a CTA button, and an image.
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner.jpg","id":51,"dimRatio":70,"overlayColor":"base","isUserOverlayColor":true,"minHeight":450,"contentPosition":"top center","sizeSlug":"full","metadata":{"name":"Featured Banner"},"className":"responsive-image","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"20px","left":"20px","top":"20px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-center responsive-image" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:0px;padding-left:20px;min-height:450px"><img class="wp-block-cover__image-background wp-image-51 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" id="main-header" style="padding-right:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"white","textColor":"black","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-black-color has-white-background-color has-text-color has-background has-link-color" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"style":{"typography":{"fontSize":"28px"}}} /-->

<!-- wp:group {"className":"thryve-fse-header-nav-wrapper","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group thryve-fse-header-nav-wrapper" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:navigation {"ref":3,"icon":"menu","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"thryve-no-mobile"} -->
<div class="wp-block-buttons thryve-no-mobile"><!-- wp:button {"className":"thryve-btn-has-arrow"} -->
<div class="wp-block-button thryve-btn-has-arrow"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'contact Us', 'thryve-corporate' ); ?> <img class="wp-image-37" style="width: 150px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow-right.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wow animate__animated animate__fadeInUp thryve-hero-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"130px","bottom":"300px","right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"1020px"}} -->
<div class="wp-block-group wow animate__animated animate__fadeInUp thryve-hero-content" style="margin-top:0;margin-bottom:0;padding-top:130px;padding-right:0;padding-bottom:300px;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"6px"}}}} -->
<p class="has-text-align-center" style="margin-bottom:6px"><?php echo esc_html__( 'Expert Guidance For Sustainable Growth', 'thryve-corporate' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-default thryve-heading","style":{"typography":{"fontSize":"76px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.1"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white"} -->
<h1 class="wp-block-heading has-text-align-center is-style-default thryve-heading has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:76px;font-style:normal;font-weight:500;line-height:1.1"><?php echo esc_html__( 'Boost Your Business with Expert Consulting.', 'thryve-corporate' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40"}}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.', 'thryve-corporate' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px"},"blockGap":{"top":"10px","left":"20px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:20px"><!-- wp:button {"backgroundColor":"white","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"left":"50px","right":"50px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-white-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="padding-right:50px;padding-left:50px"><?php echo esc_html__( 'Read more', 'thryve-corporate' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->