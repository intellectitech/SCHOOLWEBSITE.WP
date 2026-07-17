<?php
/**
 * Title: Career Mentor Coach – 404
 * Slug: career-mentor-coach/404
 * Categories: career-mentor-coach-error-404
 * Description: Full-screen 404 error page with heading, message, and back-to-home button.
 */

$home_url = esc_url( home_url( '/' ) );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"404 Page","patternName":"career-mentor-coach/404","categories":["career-mentor-coach-error-404"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary-dark","layout":{"type":"constrained","wideSize":"800px"}} -->
<section class="wp-block-group alignfull has-primary-dark-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"className":"wp-block-heading has-text-align-center has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--heading)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading)","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white","fontSize":"heading-h2"} -->
<h1 class="wp-block-heading has-text-align-center has-fraunces-font-family has-heading-h2-font-size has-white-color has-text-color has-heading-h-2-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:var(--wp--custom--typography--line-height--heading)"><?php esc_html_e( '404 – Page Not Found', 'career-mentor-coach' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-text-align-center has-inter-font-family","style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body)","letterSpacing":"0px","fontStyle":"normal","fontWeight":"400","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white","fontSize":"large"} -->
<p class="has-text-align-center has-inter-font-family has-white-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;letter-spacing:0px;line-height:var(--wp--custom--typography--line-height--body)"><?php esc_html_e( 'The page could not be found. Head back to the homepage to continue exploring coaching programs and career resources.', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><!-- wp:button {"backgroundColor":"white","textColor":"primary","className":"is-style-fill","style":{"border":{"radius":"99px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"28px","right":"28px"}},"typography":{"fontSize":"var(--wp--preset--font-size--medium)","fontWeight":"600","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-xs)"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background has-custom-font-size wp-element-button" href="<?php echo $home_url; ?>" style="border-radius:99px;padding-top:13px;padding-right:28px;padding-bottom:13px;padding-left:28px;font-size:var(--wp--preset--font-size--medium);font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-xs)"><?php esc_html_e( 'Back To Homepage', 'career-mentor-coach' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
