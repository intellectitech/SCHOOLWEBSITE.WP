<?php
/**
 * @package Ecommerce Landing Page 
 * Setup the WordPress core custom header feature.
 *
 * @uses ecommerce_landing_page_header_style()
*/
function ecommerce_landing_page_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'ecommerce_landing_page_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 70,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'ecommerce_landing_page_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'ecommerce_landing_page_custom_header_setup' );

if ( ! function_exists( 'ecommerce_landing_page_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see ecommerce_landing_page_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'ecommerce_landing_page_header_style' );

function ecommerce_landing_page_header_style() {
	$ecommerce_landing_page_header_image = get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/header-img.png';
	$ecommerce_landing_page_custom_css = "
        .box-image .single-page-img{
			background-image: url('" . esc_url($ecommerce_landing_page_header_image) . "' ) !important;
			background-repeat: no-repeat;
	        background-position: center center;
	        background-size: cover !important;
	        height: 300px;
		}";
	   	wp_add_inline_style( 'ecommerce-landing-page-basic-style', $ecommerce_landing_page_custom_css );
}
endif;