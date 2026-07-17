<?php
/**
 * Title: Footer
 * Slug: thryve-corporate/footer
 * Categories: footer, thryve-corporate
 * Block Types: core/template-part/footer
 * Description: A footer section with a colophon and 4 columns.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"20px","left":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-white-color has-black-background-color has-text-color has-background has-link-color" style="padding-right:20px;padding-left:20px"><!-- wp:group {"className":"footer-wrapper wow animate__animated animate__fadeInUp","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group footer-wrapper wow animate__animated animate__fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-bottom:80px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"700","letterSpacing":"-1px"}},"fontFamily":"inter-tight"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|20"},"padding":{"bottom":"var:preset|spacing|20","top":"0"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-base-2-color has-text-color has-link-color has-small-font-size" style="border-bottom-style:none;border-bottom-width:0px;margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--20);padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Natoque dictum lorem sagittis in pretium pharetra cras suscipit sed taciti platea quisque integer quam auctor commodo ullamcorper maximus pede dolor', 'thryve-corporate' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"margin":{"bottom":"0"}}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-base-2-color has-text-color has-link-color has-small-font-size" style="margin-bottom:0"><?php echo esc_html__( 'Email: Example@example.com', 'thryve-corporate' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-base-2-color has-text-color has-link-color has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Phone: +01-123-4567-123', 'thryve-corporate' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"16px","textTransform":"uppercase"},"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html__( 'About', 'thryve-corporate' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:navigation {"textColor":"base-2","overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"About"} -->
<!-- wp:navigation-link {"label":"Team","url":"#"} /-->

<!-- wp:navigation-link {"label":"History","url":"#"} /-->

<!-- wp:navigation-link {"label":"Careers","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"16px","textTransform":"uppercase"},"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html__( 'Quick Links', 'thryve-corporate' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-base-2-color has-text-color has-link-color"><!-- wp:navigation {"ref":3,"overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"Social Media"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"16px","textTransform":"uppercase"},"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html__( 'Privacy', 'thryve-corporate' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:navigation {"textColor":"base-2","overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"Privacy"} -->
<!-- wp:navigation-link {"label":"Privacy Policy","url":"#"} /-->

<!-- wp:navigation-link {"label":"Terms and Conditions","url":"#"} /-->

<!-- wp:navigation-link {"label":"Contact Us","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"border":{"top":{"color":"#303030","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="border-top-color:#303030;border-top-width:1px;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-text-align-center has-base-2-color has-text-color has-link-color has-small-font-size">
		<?php echo esc_html__( 'Designed with', 'thryve-corporate' ); ?> <a href="https://wordpress.org" rel="nofollow"><?php echo esc_html__( 'WordPress', 'thryve-corporate' ); ?></a>		</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->