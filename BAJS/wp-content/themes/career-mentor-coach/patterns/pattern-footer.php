<?php
/**
 * Title: Career Mentor Coach â€“ Footer
 * Slug: career-mentor-coach/footer
 * Categories: career-mentor-coach-footer
 * Description: Footer with brand blurb, CTA button, three navigation columns, and a bottom bar with social links.
 * Area: footer
 * Block Types: core/template-part/footer
 */

$img        = get_template_directory_uri() . '/assets/images/';
$logo_url   = esc_url( $img . rawurlencode( 'career-mentor-logo.png' ) );
?>
<!-- wp:group {"metadata":{"name":"Career Mentor Coach â€“ Footer","categories":["career-mentor-coach-footer"],"patternName":"career-mentor-coach/footer","description":"Footer with brand blurb, CTA button, three navigation columns, and a bottom bar with social links."},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0"},"color":{"background":"var:preset|color|white"}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--white);padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"},"padding":{"bottom":"32px"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}}}} -->
<div class="wp-block-columns alignwide" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-bottom:32px"><!-- wp:column {"width":"38%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:0px"><!-- wp:group {"style":{"border":{"radius":"50%"},"spacing":{"padding":{"top":"8px","right":"9px","bottom":"8px","left":"9px"},"blockGap":"0"},"dimensions":{"minHeight":"0px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:50%;min-height:0px;padding-top:8px;padding-right:9px;padding-bottom:8px;padding-left:9px"><!-- wp:image {"width":"20px","height":"20px","scale":"contain","focalPoint":{"x":0.39,"y":0.12},"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"0px","top":"-5px"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-top:-5px;margin-bottom:0px"><img src="<?php echo $logo_url; ?>" alt="Career Mentor Coach Logo" style="object-fit:contain;object-position:39% 12%;width:20px;height:20px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtypography\u002d\u002dline-height\u002d\u002dcard-title)","letterSpacing":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtypography\u002d\u002dletter-spacing\u002d\u002dheading-xs)","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"x-large","fontFamily":"fraunces"} -->
<p class="has-text-color has-fraunces-font-family has-x-large-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-xs);line-height:var(--wp--custom--typography--line-height--card-title)"><?php esc_html_e( 'Career Mentor Coach', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","lineHeight":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtypography\u002d\u002dline-height\u002d\u002dbody-loose)","fontWeight":"400","fontStyle":"normal","letterSpacing":"0.2px"},"spacing":{"margin":{"top":"10px","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontFamily":"inter"} -->
<p class="has-text-color has-inter-font-family" style="color:var(--wp--preset--color--paragraph-text);margin-top:10px;margin-bottom:0;font-size:15px;font-style:normal;font-weight:400;letter-spacing:0.2px;line-height:var(--wp--custom--typography--line-height--body-loose)"><?php esc_html_e( 'Build a clearer career direction with practical mentoring for positioning, interviews, leadership communication, and next-step growth.', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"12px","margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"rating-stars-text footer-rating-stars","style":{"typography":{"fontSize":"16px","fontWeight":"700","letterSpacing":"1.8px","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary-light"} -->
<p class="rating-stars-text footer-rating-stars has-primary-light-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:16px;font-weight:700;letter-spacing:1.8px;line-height:1">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"600","fontStyle":"normal"},"spacing":{"margin":{"top":"6px","bottom":"0"}}},"textColor":"heading-text"} -->
<p class="has-heading-text-color has-text-color" style="margin-top:6px;margin-bottom:0;font-size:var(--wp--preset--font-size--medium);font-style:normal;font-weight:600">4.9/5</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal","letterSpacing":"0.3px","fontSize":"14px"},"spacing":{"margin":{"top":"3px","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontFamily":"inter"} -->
<p class="has-text-color has-inter-font-family" style="color:var(--wp--preset--color--paragraph-text);margin-top:3px;margin-bottom:0;font-size:14px;font-style:normal;font-weight:400;letter-spacing:0.3px"><?php esc_html_e( 'Trusted by 1,200+ professionals worldwide', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","letterSpacing":"0.3px","textTransform":"capitalize","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}},"fontSize":"medium"} -->
<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-style:normal;font-weight:500;letter-spacing:0.3px;text-transform:capitalize"><?php esc_html_e( 'Explore', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontSize":"14px"},"color":{"text":"var:preset|color|paragraph-text"},"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"Home","url":"#"} /-->
<!-- wp:navigation-link {"label":"About","url":"#"} /-->
<!-- wp:navigation-link {"label":"Programs","url":"#"} /-->
<!-- wp:navigation-link {"label":"Blog","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","letterSpacing":"0.3px","textTransform":"capitalize","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}},"fontSize":"medium"} -->
<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-style:normal;font-weight:500;letter-spacing:0.3px;text-transform:capitalize"><?php esc_html_e( 'Work with me', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontSize":"14px"},"color":{"text":"var:preset|color|paragraph-text"},"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"Free Consultation","url":"#"} /-->
<!-- wp:navigation-link {"label":"Programs","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","textTransform":"capitalize","fontStyle":"normal","letterSpacing":"0.3px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}},"fontSize":"medium"} -->
<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-style:normal;font-weight:500;letter-spacing:0.3px;text-transform:capitalize"><?php esc_html_e( 'Company', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontSize":"14px"},"color":{"text":"var:preset|color|paragraph-text"},"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"Privacy","url":"#"} /-->
<!-- wp:navigation-link {"label":"Terms","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"24px"},"blockGap":"0","margin":{"top":"0px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0;padding-top:24px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|muted-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted-text);margin-top:0;margin-bottom:0;font-size:14px;font-weight:400"><?php echo esc_html( 'Â© ' . date( 'Y' ) . ' Career Mentor Coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)"},"color":{"text":"var:preset|color|muted-text"},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"Instagram","url":"#"} /-->
<!-- wp:navigation-link {"label":"Twitter","url":"#"} /-->
<!-- wp:navigation-link {"label":"YouTube","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
