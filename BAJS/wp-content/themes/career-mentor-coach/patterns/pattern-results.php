<?php
/**
 * Title: Career Mentor Coach – Results
 * Slug: career-mentor-coach/results
 * Categories: career-mentor-coach-results
 * Description: Results section with centered header and three before/after transformation cards with name, stat, and duration overlay.
 */

$img         = get_template_directory_uri() . '/assets/images/';
$transform_1 = esc_url( $img . 'result-1.webp' );
$transform_2 = esc_url( $img . 'result-2.webp' );
$transform_3 = esc_url( $img . 'result-3.webp' );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Results","categories":["career-mentor-coach-results"],"patternName":"career-mentor-coach/results"},"align":"full","className":"cmc-results-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"background-dark","layout":{"type":"constrained","wideSize":"1200px"}} -->
<section class="wp-block-group alignfull cmc-results-section has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"bottom":"60px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-bottom:60px"><!-- wp:paragraph {"className":"has-text-align-center","style":{"typography":{"fontWeight":"600","letterSpacing":"var(--wp--custom--typography--letter-spacing--label)","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}},"fontSize":"small"} -->
<p class="has-text-align-center has-text-color has-small-font-size" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--label);text-transform:uppercase"><?php esc_html_e( 'Results', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"wp-block-heading has-text-align-center has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--heading-tight)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading)","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h2"} -->
<h2 class="wp-block-heading has-text-align-center has-fraunces-font-family has-heading-h2-font-size has-text-color has-heading-h-2-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:var(--wp--custom--typography--line-height--heading-tight)"><?php esc_html_e( 'Real professionals.', 'career-mentor-coach' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-light-color"><?php esc_html_e( ' Clear next steps.', 'career-mentor-coach' ); ?></mark></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo $transform_1; ?>","dimRatio":0,"overlayColor":"heading-text","minHeight":480,"minHeightUnit":"px","contentPosition":"bottom center","templateLock":"all","sizeSlug":"full","className":"has-custom-content-position","style":{"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:16px;min-height:480px"><img class="wp-block-cover__image-background size-full" alt="" src="<?php echo $transform_1; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-heading-text-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","className":"has-text-align-left has-fraunces-font-family","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"var(--wp--preset--font-size--heading-h6)","textAlign":"left"}}} -->
<p class="has-text-align-left has-fraunces-font-family" style="font-size:var(--wp--preset--font-size--heading-h6);font-style:normal;font-weight:500"><?php esc_html_e( 'Nadia, Product Lead ', 'career-mentor-coach' ); ?><br><?php esc_html_e( 'New role, 9 weeks', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo $transform_2; ?>","dimRatio":0,"overlayColor":"heading-text","minHeight":480,"minHeightUnit":"px","contentPosition":"bottom center","templateLock":"all","sizeSlug":"full","className":"has-custom-content-position","style":{"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:16px;min-height:480px"><img class="wp-block-cover__image-background size-full" alt="" src="<?php echo $transform_2; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-heading-text-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","className":"has-text-align-left has-fraunces-font-family","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"var(--wp--preset--font-size--heading-h6)","textAlign":"left"}}} -->
<p class="has-text-align-left has-fraunces-font-family" style="font-size:var(--wp--preset--font-size--heading-h6);font-style:normal;font-weight:500"><?php esc_html_e( 'Marcus, Consultant ', 'career-mentor-coach' ); ?><br><?php esc_html_e( 'Promotion plan, 12 weeks', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo $transform_3; ?>","dimRatio":0,"overlayColor":"heading-text","minHeight":480,"minHeightUnit":"px","contentPosition":"bottom center","templateLock":"all","sizeSlug":"full","className":"has-custom-content-position","style":{"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:16px;min-height:480px"><img class="wp-block-cover__image-background size-full" alt="" src="<?php echo $transform_3; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-heading-text-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","className":"has-text-align-left has-fraunces-font-family","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"var(--wp--preset--font-size--heading-h6)","textAlign":"left"}}} -->
<p class="has-text-align-left has-fraunces-font-family" style="font-size:var(--wp--preset--font-size--heading-h6);font-style:normal;font-weight:500"><?php esc_html_e( 'Lina, Career Switcher ', 'career-mentor-coach' ); ?><br><?php esc_html_e( 'Interview ready, 4 weeks', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
