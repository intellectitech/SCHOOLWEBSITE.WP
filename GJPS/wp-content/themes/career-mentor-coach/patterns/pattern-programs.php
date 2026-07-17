<?php
/**
 * Title: Career Mentor Coach – Programs
 * Slug: career-mentor-coach/programs
 * Categories: career-mentor-coach-programs
 * Description: Programs section with header and three program rows, each with image, duration badge, title, description, features list, and CTA button.
 */

$img       = get_template_directory_uri() . '/assets/images/';
$program_1 = esc_url( $img . 'program-career-clarity.webp' );
$program_2 = esc_url( $img . 'program-executive-growth.webp' );
$program_3 = esc_url( $img . 'program-interview-accelerator.webp' );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Career Mentor Coach – Programs","categories":["career-mentor-coach-programs"],"patternName":"career-mentor-coach/programs","description":"Programs section with header and three program rows, each with image, duration badge, title, description, features list, and CTA button."},"align":"full","anchor":"programs","className":"cmc-programs-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0"}},"backgroundColor":"background-light","layout":{"type":"constrained","wideSize":"1200px"}} -->
<section id="programs" class="wp-block-group alignfull cmc-programs-section has-background-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"padding":{"bottom":"60px"}}}} -->
<div class="wp-block-columns" style="padding-bottom:60px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"var(--wp--custom--typography--letter-spacing--label)","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--label);text-transform:uppercase"><?php esc_html_e( 'Programs', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"wp-block-heading has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--heading-tight)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading)","fontStyle":"normal","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h2"} -->
<h2 class="wp-block-heading has-fraunces-font-family has-heading-h2-font-size has-text-color has-heading-h-2-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:var(--wp--custom--typography--line-height--heading-tight);text-transform:capitalize">Choose the path that<br>matches <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-light-color">your goal</mark></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"320px"},"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body)","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"large"} -->
<p class="has-text-color has-large-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-weight:400;line-height:var(--wp--custom--typography--line-height--body)"><?php esc_html_e( 'Explore guided programs designed for career clarity, executive growth, interview confidence, and professional positioning.', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"24px"},"padding":{"top":"24px","bottom":"24px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:24px;padding-bottom:24px"><!-- wp:column {"verticalAlignment":"center","width":"2%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:2%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|muted-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-weight:500"><?php esc_html_e( '01', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:image {"width":"160px","height":"160px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $program_1; ?>" alt="" style="border-radius:12px;object-fit:cover;width:160px;height:160px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"68%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:68%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"7px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-weight:600;letter-spacing:2px"><?php esc_html_e( '10 WEEKS', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-sm)","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h5","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-text-color has-fraunces-font-family has-heading-h-5-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-sm);line-height:var(--wp--custom--typography--line-height--card-title)"><?php esc_html_e( 'Career Clarity Sprint', 'career-mentor-coach' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body-loose)","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"medium"} -->
<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-weight:400;line-height:var(--wp--custom--typography--line-height--body-loose)"><?php esc_html_e( 'For professionals deciding what to pursue next and how to explain their value clearly.', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--label)"><?php esc_html_e( 'Career audit  •  Positioning  •  Weekly actions', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"13%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:13%"><!-- wp:paragraph {"className":"has-text-align-left has-primary-dark-color has-text-color has-link-color","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|primary-dark"}}}},"textColor":"primary-dark","fontSize":"medium"} -->
<p class="has-text-align-left has-primary-dark-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Book Strategy Call', 'career-mentor-coach' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"24px"},"padding":{"top":"24px","bottom":"24px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:24px;padding-bottom:24px"><!-- wp:column {"verticalAlignment":"center","width":"2%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:2%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|muted-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-weight:500"><?php esc_html_e( '02', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:image {"width":"160px","height":"160px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $program_2; ?>" alt="" style="border-radius:12px;object-fit:cover;width:160px;height:160px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"68%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:68%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"7px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xs-small)","fontWeight":"600","letterSpacing":"2px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-weight:600;letter-spacing:2px"><?php esc_html_e( '8 WEEKS', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-sm)","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h5","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-text-color has-fraunces-font-family has-heading-h-5-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-sm);line-height:var(--wp--custom--typography--line-height--card-title)"><?php esc_html_e( 'Executive Growth Coaching', 'career-mentor-coach' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body-loose)","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"medium"} -->
<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-weight:400;line-height:var(--wp--custom--typography--line-height--body-loose)"><?php esc_html_e( 'For managers, founders, and specialists building leadership presence and strategic communication.', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--label)"><?php esc_html_e( 'Leadership presence  •  Messaging  •  Decision rhythm', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"13%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:13%"><!-- wp:paragraph {"className":"has-text-align-left has-primary-dark-color has-text-color has-link-color","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|primary-dark"}}}},"textColor":"primary-dark","fontSize":"medium"} -->
<p class="has-text-align-left has-primary-dark-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Book Strategy Call', 'career-mentor-coach' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"24px"},"padding":{"top":"24px","bottom":"24px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:24px;padding-bottom:24px"><!-- wp:column {"verticalAlignment":"center","width":"2%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:2%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|muted-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-weight:500"><?php esc_html_e( '03', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:image {"width":"160px","height":"160px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $program_3; ?>" alt="" style="border-radius:12px;object-fit:cover;width:160px;height:160px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"68%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:68%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"7px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xs-small)","fontWeight":"600","letterSpacing":"2px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-weight:600;letter-spacing:2px"><?php esc_html_e( '6 WEEKS', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-sm)","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h5","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-text-color has-fraunces-font-family has-heading-h-5-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-sm);line-height:var(--wp--custom--typography--line-height--card-title)"><?php esc_html_e( 'LinkedIn & Interview Accelerator', 'career-mentor-coach' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body-loose)","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"medium"} -->
<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-weight:400;line-height:var(--wp--custom--typography--line-height--body-loose)"><?php esc_html_e( 'For job seekers who need sharper profiles, stronger stories, and confident interview delivery.', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--label)"><?php esc_html_e( 'LinkedIn refresh  •  Resume proof  •  Interview stories', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"13%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:13%"><!-- wp:paragraph {"className":"has-text-align-left has-primary-dark-color has-text-color has-link-color","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|primary-dark"}}}},"textColor":"primary-dark","fontSize":"medium"} -->
<p class="has-text-align-left has-primary-dark-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Book Strategy Call', 'career-mentor-coach' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"textColor":"heading-text","className":"is-style-outline","style":{"border":{"radius":"100px","width":"1px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}},"typography":{"fontSize":"14px","fontWeight":"500"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-heading-text-color has-text-color has-custom-font-size wp-element-button" style="border-width:1px;border-radius:100px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px;font-size:14px;font-weight:500"><?php esc_html_e( 'See all coaching programs', 'career-mentor-coach' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
