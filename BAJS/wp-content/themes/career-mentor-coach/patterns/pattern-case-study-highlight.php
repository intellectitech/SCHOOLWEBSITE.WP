<?php
/**
 * Title: Career Mentor Coach - Case Study Highlight
 * Slug: career-mentor-coach/case-study-highlight
 * Categories: career-mentor-coach-results
 * Description: Before-and-after coaching result highlight with a summary image.
 */

$case_img = esc_url( get_template_directory_uri() . '/assets/images/result-2.webp' );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Case Study Highlight","patternName":"career-mentor-coach/case-study-highlight","categories":["career-mentor-coach-results"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|50","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50"}}},"backgroundColor":"white","layout":{"type":"constrained","wideSize":"1180px"}} -->
<section class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"40px","left":"64px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"46%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:46%"><!-- wp:image {"width":"540px","height":"430px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"14px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $case_img; ?>" alt="<?php esc_attr_e( 'Career coaching workspace placeholder', 'career-mentor-coach' ); ?>" style="border-radius:14px;object-fit:cover;width:540px;height:430px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"54%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:54%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"var(--wp--custom--typography--letter-spacing--label)","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--label);text-transform:uppercase"><?php esc_html_e( 'Client result', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"1.15"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontSize":"heading-h2","fontFamily":"fraunces"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-fraunces-font-family has-heading-h-2-font-size" style="margin-top:0;margin-bottom:0;font-weight:600;line-height:1.15"><?php esc_html_e( 'From unclear next step to a focused interview story.', 'career-mentor-coach' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"18px","left":"18px"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","color":"var:preset|color|border","radius":"10px"},"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"blockGap":"10px"}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-background-light-background-color has-background" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:10px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text"} -->
<p class="has-heading-text-color has-text-color" style="margin-top:0;margin-bottom:0;font-weight:700"><?php esc_html_e( 'Before', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"medium"} -->
<p class="has-paragraph-text-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:0;line-height:1.7"><?php esc_html_e( 'A scattered resume, unclear value story, and interviews that sounded task-focused.', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","color":"var:preset|color|border","radius":"10px"},"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"blockGap":"10px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:10px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text"} -->
<p class="has-heading-text-color has-text-color" style="margin-top:0;margin-bottom:0;font-weight:700"><?php esc_html_e( 'After', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"medium"} -->
<p class="has-paragraph-text-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:0;line-height:1.7"><?php esc_html_e( 'A clean positioning message, stronger examples, and a confident outcome-led story.', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
