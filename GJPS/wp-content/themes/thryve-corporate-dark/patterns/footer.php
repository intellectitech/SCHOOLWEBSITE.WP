<?php
/**
 * Title: Footer
 * Slug: thryve-corporate-dark/footer
 * Categories: footer, thryve-corporate-dark
 * Block Types: core/template-part/footer
 * Description: A footer section with a colophon and 4 columns.
 */
?>
<!-- wp:group {"metadata":{"patternName":"thryve-corporate-dark/footer","name":"Footer","description":"A footer section with a colophon and 4 columns.","categories":["footer","thryve-corporate-dark"]},"align":"wide","style":{"spacing":{"padding":{"right":"20px","left":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-white-color has-black-background-color has-text-color has-background has-link-color" style="padding-right:20px;padding-left:20px"><!-- wp:group {"className":"footer-wrapper wow animate__animated animate__fadeInUp","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group footer-wrapper wow animate__animated animate__fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"700","letterSpacing":"-1px"}},"fontFamily":"inter-tight"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|20"},"padding":{"bottom":"0","top":"0"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-base-2-color has-text-color has-link-color has-small-font-size" style="border-bottom-style:none;border-bottom-width:0px;margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--20);padding-top:0;padding-bottom:0"><?php echo esc_html__( 'Natoque dictum lorem sagittis in pretium pharetra cras suscipit sed taciti platea quisque integer quam auctor commodo ullamcorper maximus pede dolor', 'thryve-corporate-dark' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"margin":{"bottom":"0"}}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-base-2-color has-text-color has-link-color has-small-font-size" style="margin-bottom:0"><?php echo esc_html__( 'Email: Example@example.com', 'thryve-corporate-dark' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-base-2-color has-text-color has-link-color has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Phone: +01-123-4567-123', 'thryve-corporate-dark' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"16px","textTransform":"uppercase"},"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html__( 'About', 'thryve-corporate-dark' ); ?></h2>
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
<h2 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html__( 'Quick Links', 'thryve-corporate-dark' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-base-2-color has-text-color has-link-color"><!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"Social Media"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"16px","textTransform":"uppercase"},"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html__( 'connect with us', 'thryve-corporate-dark' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"secondary","iconColorValue":"#070707","iconBackgroundColor":"white","iconBackgroundColorValue":"#ffffff","showLabels":true,"size":"has-small-icon-size","className":"is-style-default","layout":{"type":"flex","justifyContent":"left","orientation":"vertical","flexWrap":"wrap"}} -->
<ul class="wp-block-social-links has-small-icon-size has-visible-labels has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"#303030","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="border-top-color:#303030;border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Designed with', 'thryve-corporate-dark' ); ?> <a href="https://wordpress.org" rel="nofollow"><?php echo esc_html__( 'WordPress', 'thryve-corporate-dark' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->