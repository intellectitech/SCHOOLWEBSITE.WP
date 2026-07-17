<?php
/**
 * Title: Career Mentor Coach – Words From Coach
 * Slug: career-mentor-coach/words-from-coach
 * Categories: career-mentor-coach-words-from-coach
 * Description: Full-width dark pull-quote with quote icon, large quote, and avatar attribution.
 */

$img        = get_template_directory_uri() . '/assets/images/';
$icon_quote = esc_url( $img . 'quote.png' );
$avatar     = esc_url( $img . 'avatar-4.jpg' );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Words From Coach","patternName":"career-mentor-coach/words-from-coach","categories":["career-mentor-coach-words-from-coach"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"primary-dark","layout":{"type":"constrained","contentSize":"760px"}} -->
<section class="wp-block-group alignfull has-primary-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"sizeSlug":"full","align":"center","className":"is-resized","style":{"opacity":0.35}} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo $icon_quote; ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1.45","fontStyle":"normal","letterSpacing":"0em","fontSize":"var(--wp--preset--font-size--xx-large)"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|white"}},"fontFamily":"fraunces"} -->
<p class="has-text-align-center has-text-color has-fraunces-font-family" style="color:var(--wp--preset--color--white);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xx-large);font-style:normal;font-weight:500;letter-spacing:0em;line-height:var(--wp--custom--typography--line-height--button)"><?php esc_html_e( '"Career growth is not about louder self-promotion. It is about clarity, proof, and a plan you can repeat every week."', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"12px","margin":{"top":"0","bottom":"0"},"padding":{"top":"30px"}},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:0px;margin-top:0;margin-bottom:0;padding-top:30px"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"0"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;min-height:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"width":"52px","height":"52px","scale":"cover","sizeSlug":"full","className":"is-resized","style":{"border":{"radius":"99px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $avatar; ?>" alt="<?php esc_attr_e( 'Sarah Whitman', 'career-mentor-coach' ); ?>" style="border-radius:99px;object-fit:cover;width:52px;height:52px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|white"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--white);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-weight:500"><?php esc_html_e( 'Maya Hart, CPCC · Founder', 'career-mentor-coach' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
