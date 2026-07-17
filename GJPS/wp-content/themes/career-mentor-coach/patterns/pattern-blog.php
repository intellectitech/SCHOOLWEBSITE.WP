<?php
/**
 * Title: Career Mentor Coach – Blog
 * Slug: career-mentor-coach/blog
 * Categories: career-mentor-coach-blog
 * Description: Journal/blog section with a large featured post left and three list posts right.
 */

$img    = get_template_directory_uri() . '/assets/images/';
$blog_1 = esc_url( $img . 'blog-1.jpg' );
$blog_2 = esc_url( $img . 'blog-2.jpg' );
$blog_3 = esc_url( $img . 'blog-3.jpg' );
$blog_4 = esc_url( $img . 'blog-4.jpg' );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Blog","patternName":"career-mentor-coach/blog","categories":["career-mentor-coach-blog"]},"align":"full","anchor":"blog","className":"cmc-blog-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0px"},"color":{"background":"var:preset|color|background-light"}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<section id="blog" class="wp-block-group alignfull cmc-blog-section has-background" style="background-color:var(--wp--preset--color--background-light);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0px"}}}} -->
<div class="wp-block-columns" style="padding-bottom:0px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"has-text-align-center","style":{"typography":{"fontWeight":"600","letterSpacing":"var(--wp--custom--typography--letter-spacing--label)","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}},"fontSize":"small"} -->
<p class="has-text-align-center has-text-color has-small-font-size" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--label);text-transform:uppercase"><?php esc_html_e( 'Insights', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"wp-block-heading has-text-align-center has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--heading)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading)","fontStyle":"normal","textAlign":"center","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"0px","top":"0px"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h2"} -->
<h2 class="wp-block-heading has-text-align-center has-fraunces-font-family has-heading-h2-font-size has-text-color has-heading-h-2-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:var(--wp--custom--typography--line-height--heading);text-transform:capitalize"><?php esc_html_e( 'Career notes for', 'career-mentor-coach' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-light-color"><?php esc_html_e( 'your next move', 'career-mentor-coach' ); ?></mark></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"60px"}},"border":{"width":"0px","style":"none"}}} -->
<div class="wp-block-columns alignwide" style="border-style:none;border-width:0px"><!-- wp:column {"verticalAlignment":"top","width":"53%","style":{"spacing":{"blockGap":"0","padding":{"top":"60px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:60px;flex-basis:53%"><!-- wp:group {"className":"blog-feat-image-wrap","style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group blog-feat-image-wrap" style="min-height:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo $blog_1; ?>" alt="" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:16px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)"><?php esc_html_e( 'CAREER ', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)"><?php esc_html_e( ' • APR 09, 2026 ', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"wp-block-heading has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-sm)","fontStyle":"normal","fontSize":"26px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}}} -->
<h3 class="wp-block-heading has-fraunces-font-family has-heading-h2-font-size has-text-color" style="color:var(--wp--preset--color--heading-text);margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:26px;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-sm);line-height:var(--wp--custom--typography--line-height--card-title)"><?php esc_html_e( "Career Clarity Made Easy: Beginner's Guide", 'career-mentor-coach' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","lineHeight":"var(--wp--custom--typography--line-height--standard)","fontStyle":"normal","fontWeight":"400","letterSpacing":"0.4px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontFamily":"inter"} -->
<p class="has-text-color has-inter-font-family" style="color:var(--wp--preset--color--paragraph-text);margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:var(--wp--preset--font-size--medium);font-style:normal;font-weight:400;letter-spacing:0.4px;line-height:var(--wp--custom--typography--line-height--standard)"><?php esc_html_e( 'Begin by auditing your strongest proof, choosing a clear direction, and turning your story into language decision makers can understand quickly.', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"47%","style":{"spacing":{"blockGap":"0","padding":{"top":"60px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:60px;flex-basis:47%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"24px"},"padding":{"top":"24px","bottom":"24px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:24px;padding-bottom:24px"><!-- wp:column {"width":"65%"} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)"><?php esc_html_e( 'STRATEGY ', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)"><?php esc_html_e( ' • APR 09, 2026 ', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-sm)","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-text-color has-fraunces-font-family" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-size:24px;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-sm);line-height:var(--wp--custom--typography--line-height--card-title)"><?php esc_html_e( 'How to Turn Experience Into a Strong Career Story', 'career-mentor-coach' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","lineHeight":"var(--wp--custom--typography--line-height--body-loose)","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--medium);font-weight:400;line-height:var(--wp--custom--typography--line-height--body-loose)"><?php esc_html_e( 'A practical framework for turning scattered responsibilities into a clear, credible professional narrative.', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"width":"200px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $blog_2; ?>" alt="" style="border-radius:12px;object-fit:cover;width:200px;height:120px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"24px"},"padding":{"top":"24px","bottom":"24px","left":"0px","right":"0px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:24px;padding-right:0px;padding-bottom:24px;padding-left:0px"><!-- wp:column {"width":"65%"} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)"><?php esc_html_e( 'LINKEDIN ', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)"><?php esc_html_e( ' • APR 09, 2026 ', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-sm)","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h5","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-text-color has-fraunces-font-family has-heading-h-5-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-sm);line-height:var(--wp--custom--typography--line-height--card-title)"><?php esc_html_e( 'LinkedIn Updates Recruiters Actually Understand', 'career-mentor-coach' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","lineHeight":"var(--wp--custom--typography--line-height--body-loose)","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--medium);font-weight:400;line-height:var(--wp--custom--typography--line-height--body-loose)"><?php esc_html_e( 'Simple profile changes that make your direction, strengths, and proof easier to scan.', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"width":"200px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $blog_3; ?>" alt="" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;object-fit:cover;width:200px;height:120px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"24px"},"padding":{"top":"24px","bottom":"24px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:24px;padding-bottom:24px"><!-- wp:column {"width":"68%"} -->
<div class="wp-block-column" style="flex-basis:68%"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)"><?php esc_html_e( 'INTERVIEWS ', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)"><?php esc_html_e( ' • APR 09, 2026 ', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-sm)","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h5","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-text-color has-fraunces-font-family has-heading-h-5-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-sm);line-height:var(--wp--custom--typography--line-height--card-title)"><?php esc_html_e( 'Interview Answers That Show Business Impact', 'career-mentor-coach' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","lineHeight":"var(--wp--custom--typography--line-height--body-loose)","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--medium);font-weight:400;line-height:var(--wp--custom--typography--line-height--body-loose)"><?php esc_html_e( 'How to structure examples around context, action, outcome, and decision quality.', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"width":"200px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $blog_4; ?>" alt="" style="border-radius:12px;object-fit:cover;width:200px;height:120px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
