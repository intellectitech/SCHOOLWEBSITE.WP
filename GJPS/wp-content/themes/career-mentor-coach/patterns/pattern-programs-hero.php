<?php
/**
 * Title: Career Mentor Coach - Programs Hero
 * Slug: career-mentor-coach/programs-hero
 * Categories: career-mentor-coach-programs-hero
 * Description: Programs listing hero: centered badge, large heading with mark, and subtitle paragraph.
 */

$star_icon = esc_url( get_template_directory_uri() . '/assets/images/hero.png' );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Programs Hero","categories":["career-mentor-coach-programs-hero"],"patternName":"career-mentor-coach/programs-hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"background-dark","layout":{"type":"constrained","wideSize":"1200px"}} -->
<section class="wp-block-group alignfull has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"50px","color":"var:preset|color|border","width":"1px","style":"solid"},"color":{"background":"var:preset|color|white"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"16px","right":"16px"},"blockGap":"8px"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:50px;background-color:var(--wp--preset--color--white);min-height:0px;padding-top:4px;padding-right:16px;padding-bottom:4px;padding-left:16px"><!-- wp:image {"width":"16px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"0px","top":"-8px"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-top:-8px;margin-bottom:0px"><img src="<?php echo $star_icon; ?>" alt="" style="object-fit:contain;width:16px;height:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-weight:500"><?php esc_html_e( 'Coaching programs', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"wp-block-heading has-text-align-center has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--heading-tight)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading)","textTransform":"capitalize","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h2"} -->
<h2 class="wp-block-heading has-text-align-center has-fraunces-font-family has-heading-h2-font-size has-text-color has-heading-h-2-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:var(--wp--custom--typography--line-height--heading-tight);text-transform:capitalize">A coaching path for<br><mark style="background-color:rgba(0,0,0,0);color:var(--wp--preset--color--primary)" class="has-inline-color">every career stage.</mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-text-color","style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body)","fontWeight":"400","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"large"} -->
<p class="has-text-align-center has-text-color has-large-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-weight:400;line-height:var(--wp--custom--typography--line-height--body)"><?php esc_html_e( 'From career clarity to executive presence, choose the coaching track built around your goals,', 'career-mentor-coach' ); ?> <br><?php esc_html_e( 'current role, and next professional move.', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
