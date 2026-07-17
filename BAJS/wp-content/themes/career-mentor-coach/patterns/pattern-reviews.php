<?php
/**
 * Title: Career Mentor Coach â€“ Reviews
 * Slug: career-mentor-coach/reviews
 * Categories: career-mentor-coach-reviews
 * Description: Kind words testimonials section with a stats widget header and three reviewer cards.
 */

$img = get_template_directory_uri() . '/assets/images/';

$quote_icon = esc_url( $img . 'quote.png' );
$user_2	 = esc_url( $img . rawurlencode( 'avatar-2.jpg' ) );
$user_3	 = esc_url( $img . rawurlencode( 'avatar-3.jpg' ) );
$user_4	 = esc_url( $img . rawurlencode( 'avatar-4.jpg' ) );
$user_6     = esc_url( $img . rawurlencode( 'avatar-5.jpg' ) );
$user_7     = esc_url( $img . rawurlencode( 'avatar-6.jpg' ) );
$user_8     = esc_url( $img . rawurlencode( 'avatar-1.jpg' ) );

$reviews = [
	[
		'image'   => $user_6,
		'text'    => __( 'The sessions turned scattered ideas into a focused role target and a weekly plan I could actually keep.', 'career-mentor-coach' ),
		'name'    => __( 'Maya Rahman', 'career-mentor-coach' ),
		'program' => __( 'Career Clarity Sprint', 'career-mentor-coach' ),
	],
	[
		'image'   => $user_8,
		'text'    => __( 'I learned how to explain leadership wins without sounding rehearsed. My manager conversations became clearer.', 'career-mentor-coach' ),
		'name'    => __( 'Nolan Price', 'career-mentor-coach' ),
		'program' => __( 'Executive Growth Coaching', 'career-mentor-coach' ),
	],
	[
		'image'   => $user_7,
		'text'    => __( 'Interview practice helped me answer with context, outcomes, and business impact instead of listing responsibilities.', 'career-mentor-coach' ),
		'name'    => __( 'Aisha Morgan', 'career-mentor-coach' ),
		'program' => __( 'LinkedIn & Interview Accelerator', 'career-mentor-coach' ),
	]
];
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Career Mentor Coach â€“ Reviews","categories":["career-mentor-coach-reviews"],"patternName":"career-mentor-coach/reviews","description":"Kind words testimonials section with a stats widget header and three reviewer cards."},"align":"full","className":"cmc-reviews-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"background-dark","layout":{"type":"constrained","wideSize":"1200px"}} -->
<section class="wp-block-group alignfull cmc-reviews-section has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"60px"}}}} -->
<div class="wp-block-columns" style="padding-bottom:60px"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"var(--wp--custom--typography--letter-spacing--label)","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--label);text-transform:uppercase"><?php esc_html_e( 'Client Wins', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"wp-block-heading has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--heading)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading)","fontStyle":"normal","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h2"} -->
<h2 class="wp-block-heading has-fraunces-font-family has-heading-h2-font-size has-text-color has-heading-h-2-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:var(--wp--custom--typography--line-height--heading);text-transform:capitalize"><?php esc_html_e( 'Clearer moves from', 'career-mentor-coach' ); ?><br><mark style="background-color:rgba(0,0,0,0)" class="has-inline-color has-primary-light-color"><?php esc_html_e( 'focused coaching', 'career-mentor-coach' ); ?></mark></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:group {"className":"reviews-proof-card","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"color":"var:preset|color|border","width":"1px","style":"solid"},"spacing":{"padding":{"left":"16px","right":"16px","bottom":"12px","top":"12px"},"blockGap":"12px"},"dimensions":{"minHeight":"0px"}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group reviews-proof-card has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;min-height:0px;padding-top:12px;padding-right:16px;padding-bottom:12px;padding-left:16px"><!-- wp:group {"className":"reviews-proof-avatars","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group reviews-proof-avatars"><!-- wp:image {"width":"42px","height":"42px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded","style":{"border":{"width":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0px"}}},"borderColor":"white"} -->
<figure class="wp-block-image size-full is-resized has-custom-border is-style-rounded" style="margin-top:0;margin-right:0px;margin-bottom:0"><img src="<?php echo $user_3; ?>" alt="" class="has-border-color has-white-border-color" style="border-width:2px;object-fit:cover;width:42px;height:42px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"42px","height":"42px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"999px","width":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0px","left":"-14px"}}},"borderColor":"white"} -->
<figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-right:0px;margin-bottom:0;margin-left:-14px"><img src="<?php echo $user_2; ?>" alt="" class="has-border-color has-white-border-color" style="border-width:2px;border-radius:999px;object-fit:cover;width:42px;height:42px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"42px","height":"42px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"999px","width":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0px","left":"-14px"}}},"borderColor":"white"} -->
<figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-right:0px;margin-bottom:0;margin-left:-14px"><img src="<?php echo $user_4; ?>" alt="" class="has-border-color has-white-border-color" style="border-width:2px;border-radius:999px;object-fit:cover;width:42px;height:42px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"reviews-proof-copy","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group reviews-proof-copy"><!-- wp:group {"className":"reviews-rating-row","style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group reviews-rating-row"><!-- wp:paragraph {"className":"rating-stars-text reviews-rating-stars","style":{"typography":{"fontSize":"16px","fontWeight":"700","letterSpacing":"1.5px","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary-light"} -->
<p class="rating-stars-text reviews-rating-stars has-primary-light-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:16px;font-weight:700;letter-spacing:1.5px;line-height:1">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"reviews-rating-value","style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","fontWeight":"600","fontStyle":"normal"},"spacing":{"margin":{"bottom":"0","top":"0"}}},"textColor":"heading-text"} -->
<p class="reviews-rating-value has-heading-text-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--medium);font-style:normal;font-weight:600">4.9/5</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"reviews-proof-text","style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"400","fontStyle":"normal","letterSpacing":"0.3px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontFamily":"inter"} -->
<p class="reviews-proof-text has-text-color has-inter-font-family" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-style:normal;font-weight:400;letter-spacing:0.3px"><?php esc_html_e( '1,200+ career conversations', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0">
<?php foreach ( $reviews as $r ) : ?>
<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"12px","color":"var:preset|color|border","width":"1px","style":"solid"},"color":{"background":"var:preset|color|white"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;background-color:var(--wp--preset--color--white);min-height:0px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"28px","height":"28px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo $quote_icon; ?>" alt="" style="object-fit:contain;width:28px;height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body)","fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"large","fontFamily":"fraunces"} -->
<p class="has-text-color has-fraunces-font-family has-large-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--body)"><?php echo esc_html( $r['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:16px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:0px"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $r['image']; ?>" alt="" style="border-radius:50%;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="min-height:0px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"medium"} -->
<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-weight:600;line-height:var(--wp--custom--typography--line-height--card-title)"><?php echo esc_html( $r['name'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xs-small)","fontWeight":"500","letterSpacing":"var(--wp--custom--typography--letter-spacing--badge)","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-weight:500;letter-spacing:var(--wp--custom--typography--letter-spacing--badge);text-transform:uppercase"><?php echo esc_html( $r['program'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"right","className":"rating-stars-text review-card-stars","style":{"typography":{"fontSize":"17px","fontWeight":"700","letterSpacing":"1.8px","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary-light"} -->
<p class="has-text-align-right rating-stars-text review-card-stars has-primary-light-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:17px;font-weight:700;letter-spacing:1.8px;line-height:1">★★★★★</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
