<?php
/**
 * Title: Career Mentor Coach – About
 * Slug: career-mentor-coach/about
 * Categories: career-mentor-coach-about
 * Description: About section with two-column layout — coach portrait left, bio and stats right.
 */

$about_img = esc_url( get_template_directory_uri() . '/assets/images/about-career-coach.webp' );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"About","categories":["career-mentor-coach-about"],"patternName":"career-mentor-coach/about"},"align":"full","anchor":"about","className":"cmc-about-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0"},"color":{"background":"var:preset|color|background-light"}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<section id="about" class="wp-block-group alignfull cmc-about-section has-background" style="background-color:var(--wp--preset--color--background-light);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"60px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo $about_img; ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"30px"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0px","padding":{"bottom":"0px"}},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:0px;margin-top:0;margin-bottom:0;padding-bottom:0px"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.5px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:1.5px;text-transform:uppercase"><?php esc_html_e( 'About Me', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"wp-block-heading has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--heading-wide)","letterSpacing":"0.5px","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h2"} -->
<h2 class="wp-block-heading has-fraunces-font-family has-heading-h2-font-size has-text-color has-heading-h-2-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:0.5px;line-height:var(--wp--custom--typography--line-height--heading-wide)"><?php esc_html_e( "Hi, I'm Maya —", 'career-mentor-coach' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"className":"wp-block-heading has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--heading-snug)","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary-light","fontSize":"heading-h2"} -->
<h2 class="wp-block-heading has-fraunces-font-family has-heading-h2-font-size has-primary-light-color has-text-color has-heading-h-2-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--heading-snug)"><?php esc_html_e( 'Your Career Mentor.', 'career-mentor-coach' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--large)","lineHeight":"var(--wp--custom--typography--line-height--body-relaxed)","fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontFamily":"inter"} -->
<p class="has-text-color has-inter-font-family" style="color:var(--wp--preset--color--paragraph-text);margin-top:var(--wp--preset--spacing--30);margin-bottom:0;font-size:var(--wp--preset--font-size--large);font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--body-relaxed)"><?php esc_html_e( "For more than a decade I have helped ambitious professionals turn scattered experience into focused career stories, practical action plans, and confident next-step decisions.", 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"var:preset|spacing|30","bottom":"0"}},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:0px;margin-top:var(--wp--preset--spacing--30);margin-bottom:0"><!-- wp:group {"style":{"border":{"radius":"99px","color":"var:preset|color|border","width":"1px","style":"solid"},"color":{"background":"var:preset|color|background-dark"},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"14px","right":"14px"},"blockGap":"6px"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:99px;background-color:var(--wp--preset--color--background-dark);min-height:0px;padding-top:3px;padding-right:14px;padding-bottom:3px;padding-left:14px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-size:12px;font-weight:600"><?php esc_html_e( '✓', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-weight:500"><?php esc_html_e( 'Career Strategist', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"99px","color":"var:preset|color|border","width":"1px","style":"solid"},"color":{"background":"var:preset|color|background-dark"},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"14px","right":"14px"},"blockGap":"6px"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:99px;background-color:var(--wp--preset--color--background-dark);min-height:0px;padding-top:3px;padding-right:14px;padding-bottom:3px;padding-left:14px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-size:12px;font-weight:600"><?php esc_html_e( '✓', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-weight:500"><?php esc_html_e( 'Executive Mentor', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"99px","color":"var:preset|color|border","width":"1px","style":"solid"},"color":{"background":"var:preset|color|background-dark"},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"14px","right":"14px"},"blockGap":"6px"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:99px;background-color:var(--wp--preset--color--background-dark);min-height:0px;padding-top:3px;padding-right:14px;padding-bottom:3px;padding-left:14px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-size:12px;font-weight:600"><?php esc_html_e( '✓', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-weight:500"><?php esc_html_e( 'Interview Coach', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"24px","bottom":"24px"},"padding":{"top":"0px","bottom":"0px"}},"border":{"radius":"8px","style":"solid","width":"1px"}},"borderColor":"border"} -->
<div class="wp-block-columns has-border-color has-border-border-color" style="border-style:solid;border-width:1px;border-radius:8px;margin-top:24px;margin-bottom:24px;padding-top:0px;padding-bottom:0px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"4px"},"border":{"right":{"color":"var:preset|color|border","width":"1px","style":"solid"},"top":[],"bottom":[],"left":[],"radius":{"topLeft":"8px","bottomLeft":"8px"}},"color":{"background":"var:preset|color|white"}}} -->
<div class="wp-block-column is-vertically-aligned-center has-background" style="border-top-left-radius:8px;border-bottom-left-radius:8px;border-right-color:var(--wp--preset--color--border);border-right-style:solid;border-right-width:1px;background-color:var(--wp--preset--color--white);padding-top:18px;padding-right:var(--wp--preset--spacing--30);padding-bottom:18px;padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-text"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-link-color has-fraunces-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e( '10+', 'career-mentor-coach' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"400","lineHeight":"var(--wp--custom--typography--line-height--button)","letterSpacing":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-weight:400;letter-spacing:0px;line-height:var(--wp--custom--typography--line-height--button)"><?php esc_html_e( 'Years mentoring', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"4px"},"border":{"right":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"color":{"background":"var:preset|color|white"}}} -->
<div class="wp-block-column has-background" style="border-right-color:var(--wp--preset--color--border);border-right-style:solid;border-right-width:1px;background-color:var(--wp--preset--color--white);padding-top:18px;padding-right:var(--wp--preset--spacing--30);padding-bottom:18px;padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-text"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-link-color has-fraunces-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e( '1.2k', 'career-mentor-coach' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"400","lineHeight":"var(--wp--custom--typography--line-height--button)","letterSpacing":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-weight:400;letter-spacing:0px;line-height:var(--wp--custom--typography--line-height--button)"><?php esc_html_e( 'Professionals', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"4px"},"border":{"right":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"color":{"background":"var:preset|color|white"}}} -->
<div class="wp-block-column has-background" style="border-right-color:var(--wp--preset--color--border);border-right-style:solid;border-right-width:1px;background-color:var(--wp--preset--color--white);padding-top:18px;padding-right:var(--wp--preset--spacing--30);padding-bottom:18px;padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-text"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-link-color has-fraunces-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e( '94%', 'career-mentor-coach' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"400","lineHeight":"var(--wp--custom--typography--line-height--button)","letterSpacing":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-weight:400;letter-spacing:0px;line-height:var(--wp--custom--typography--line-height--button)"><?php esc_html_e( 'Reach next-step goals', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"4px"},"border":{"right":{"color":"var:preset|color|border","width":"0","style":"solid"},"top":[],"bottom":[],"left":[],"radius":{"topRight":"8px","bottomRight":"8px"}},"color":{"background":"var:preset|color|white"}}} -->
<div class="wp-block-column has-background" style="border-top-right-radius:8px;border-bottom-right-radius:8px;border-right-color:var(--wp--preset--color--border);border-right-style:solid;border-right-width:0;background-color:var(--wp--preset--color--white);padding-top:18px;padding-right:var(--wp--preset--spacing--30);padding-bottom:18px;padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-text"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-text","fontFamily":"fraunces"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-link-color has-fraunces-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e( '32', 'career-mentor-coach' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"400","lineHeight":"var(--wp--custom--typography--line-height--button)","letterSpacing":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-weight:400;letter-spacing:0px;line-height:var(--wp--custom--typography--line-height--button)"><?php esc_html_e( 'Industries Served', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"12px","margin":{"top":"0px","bottom":"0"},"padding":{"top":"16px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;min-height:0px;margin-top:0px;margin-bottom:0;padding-top:16px"><!-- wp:group {"style":{"spacing":{"blockGap":"12px"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="min-height:0px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--heading-h6)","fontWeight":"600","letterSpacing":"0px","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--heading-h6);font-style:normal;font-weight:600;letter-spacing:0px"><?php esc_html_e( 'Maya Hart, CPCC', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-weight:400"><?php esc_html_e( 'Founder · Career Mentor', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"600","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-xs)","textDecoration":"none"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-size:14px;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-xs);text-decoration:none"><?php esc_html_e( 'Read More', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
