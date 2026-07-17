<?php
/**
 * Title: Career Mentor Coach – Site Header
 * Slug: career-mentor-coach/header
 * Description: Sticky header with logo, primary navigation, and CTA button.
 * Categories: career-mentor-coach-header
 * Area: header
 * Block Types: core/template-part/header
 */

$header_logo = esc_url( get_template_directory_uri() . '/assets/images/career-mentor-logo.png' );
?>
<!-- wp:group {"tagName":"header","metadata":{"name":"Career Mentor Coach – Site Header","patternName":"career-mentor-coach/header","description":"Sticky header with logo, primary navigation, and CTA button.","categories":["career-mentor-coach-header"]},"align":"full","className":"site-header","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"20px","right":"20px"}},"border":{"bottom":{"color":"color-mix(in oklab, var(--wp--preset--color--border) 60%, transparent)","style":"solid","width":"1px"}}},"backgroundColor":"white","layout":{"type":"constrained","wideSize":"1200px"}} -->
<header class="wp-block-group alignfull site-header has-white-background-color has-background" style="border-bottom-color:color-mix(in oklab, var(--wp--preset--color--border) 60%, transparent);border-bottom-style:solid;border-bottom-width:1px;padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px"><!-- wp:html -->
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'career-mentor-coach' ); ?></a>
<!-- /wp:html -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"0px","right":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"50%"},"spacing":{"padding":{"top":"8px","right":"9px","bottom":"8px","left":"9px"},"blockGap":"0"},"dimensions":{"minHeight":"0px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:50%;min-height:0px;padding-top:8px;padding-right:9px;padding-bottom:8px;padding-left:9px"><!-- wp:image {"width":"20px","height":"20px","scale":"contain","focalPoint":{"x":0.39,"y":0.12},"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"0px","top":"-5px"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-top:-5px;margin-bottom:0px"><img src="<?php echo $header_logo; ?>" alt="Career Mentor Coach Logo" style="object-fit:contain;object-position:39% 12%;width:20px;height:20px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:site-title {"level":0,"style":{"typography":{"fontSize":"19px","fontWeight":"600","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-sm)","textDecoration":"none"},"color":{"text":"var:preset|color|heading-text"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"muted-text","className":"header-nav","style":{"spacing":{"blockGap":"32px"},"typography":{"fontSize":"14px","fontWeight":"400","textDecoration":"none"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
<!-- wp:navigation-link {"label":"Home","url":"/","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","url":"#about","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Free Consultation","url":"#free-consultation","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Programs","url":"#programs","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","url":"#blog","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"white","className":"is-style-fill","style":{"border":{"radius":"99px"},"spacing":{"padding":{"top":"11px","bottom":"11px","left":"22px","right":"22px"}},"typography":{"fontSize":"14px","fontWeight":"600","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-xs)"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" href="#cta" style="border-radius:99px;padding-top:11px;padding-right:22px;padding-bottom:11px;padding-left:22px;font-size:14px;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-xs)"><?php esc_html_e( 'Book a call', 'career-mentor-coach' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
