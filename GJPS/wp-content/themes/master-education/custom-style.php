<?php

	$ecommerce_landing_page_custom_css = '';

	/*-------------------- First Highlight Color -------------------*/

	$ecommerce_landing_page_first_color = get_theme_mod('ecommerce_landing_page_first_color');

	if($ecommerce_landing_page_first_color != false){
		$ecommerce_landing_page_custom_css .='nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, .topbar-btn a, .more-btn a, .menu-section, .closebtn i, .myaccount-icon i, .read-more a, .feature-courses-span:after, .feature-courses-span:before, #sidebar h3, #sidebar .wp-block-search .wp-block-search__label,#footer-2,.inner-box:hover, #preloader, #sidebar label.wp-block-search__label, #sidebar .wp-block-heading, #footer .custom-about-us a.custom_read_more, #footer .widget_tag_cloud a.tag-cloud-link:hover,a.wc-block-components-checkout-return-to-cart-button,#footer .widget_tag_cloud a.tag-cloud-link:hover{';
			$ecommerce_landing_page_custom_css .='background: '.esc_attr($ecommerce_landing_page_first_color).';';
		$ecommerce_landing_page_custom_css .='}';
	}

	if($ecommerce_landing_page_first_color != false){
		$ecommerce_landing_page_custom_css .='.bradcrumbs span, #sidebar ul li::before, .post-nav-links a.post-page-numbers:hover, .woocommerce span.onsale,.woocommerce a.added_to_cart.wc-forward,#sidebar ul li::before,.wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale, .events-box:hover span.event-date, .events-box:hover span.event-location li a, .more-btn a, #comments input[type="submit"], #comments a.comment-reply-link, input[type="submit"], .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .pro-button a,.pagination span, .pagination a, #sidebar .more-button a, .wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button{';
			$ecommerce_landing_page_custom_css .='background: '.esc_attr($ecommerce_landing_page_first_color).'!important;';
		$ecommerce_landing_page_custom_css .='}';
	}

	if($ecommerce_landing_page_first_color != false){
		$ecommerce_landing_page_custom_css .='a, a:hover, .main-navigation ul ul li a:hover, .sticky .post-main-box h2:before, .main-navigation ul ul a:focus, .feature-courses span, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .grid-post-main-box:hover h2 a, .grid-post-main-box:hover .post-info span a, #sidebar ul li:hover{';
			$ecommerce_landing_page_custom_css .='color: '.esc_attr($ecommerce_landing_page_first_color).';';
		$ecommerce_landing_page_custom_css .='}';
	}

	if($ecommerce_landing_page_first_color != false){
		$ecommerce_landing_page_custom_css .='.wp-block-latest-comments__comment-meta a,.product_meta a,.wc-block-components-totals-coupon a, .woocommerce-MyAccount-content a, .events-box:hover h3 a, #footer li a:hover{';
			$ecommerce_landing_page_custom_css .='color: '.esc_attr($ecommerce_landing_page_first_color).'!important;';
		$ecommerce_landing_page_custom_css .='}';
	}

	if($ecommerce_landing_page_first_color != false){
		$ecommerce_landing_page_custom_css .='.wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale{';
			$ecommerce_landing_page_custom_css .='border-color: '.esc_attr($ecommerce_landing_page_first_color).'!important;';
		$ecommerce_landing_page_custom_css .='}';
	}

	if($ecommerce_landing_page_first_color != false){
		$ecommerce_landing_page_custom_css .='#footer .tagcloud a:hover{';
			$ecommerce_landing_page_custom_css .='border-color: '.esc_attr($ecommerce_landing_page_first_color).';';
		$ecommerce_landing_page_custom_css .='}';
	}

	if($ecommerce_landing_page_first_color != false){
		$ecommerce_landing_page_custom_css .='.home-page-header, .main-navigation ul ul{';
			$ecommerce_landing_page_custom_css .='border-bottom:2px solid '.esc_attr($ecommerce_landing_page_first_color).';';
		$ecommerce_landing_page_custom_css .='}';
	}

	if($ecommerce_landing_page_first_color != false){
		$ecommerce_landing_page_custom_css .='.main-navigation ul ul{';
			$ecommerce_landing_page_custom_css .='border-top:2px solid '.esc_attr($ecommerce_landing_page_first_color).';';
		$ecommerce_landing_page_custom_css .='}';
	}

	/*--------------------Second  Global Color -------------------*/
	$master_education_second_color = get_theme_mod('master_education_second_color');

	if($master_education_second_color != false){
		$ecommerce_landing_page_custom_css .='.home-page-header{';
			$ecommerce_landing_page_custom_css .='background: '.esc_attr($master_education_second_color).';';
		$ecommerce_landing_page_custom_css .='}';
	}

	if($master_education_second_color != false){
		$ecommerce_landing_page_custom_css .='a, .main-navigation li a:hover, .main-navigation li a:focus, .main-navigation ul ul a:focus, .main-navigation ul ul a:hover, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6{';
			$ecommerce_landing_page_custom_css .='color: '.esc_attr($master_education_second_color).';';
		$ecommerce_landing_page_custom_css .='}';
	}

	// banner background img

	$ecommerce_landing_page_banner_background_color = get_theme_mod('ecommerce_landing_page_banner_background_color');
	if($ecommerce_landing_page_banner_background_color != false){
		$ecommerce_landing_page_custom_css .='#banner{';
			$ecommerce_landing_page_custom_css .='background-color: '.esc_attr($ecommerce_landing_page_banner_background_color).';';
		$ecommerce_landing_page_custom_css .='}';
	}

	$master_education_circle_first_color = get_theme_mod('master_education_circle_first_color');

	$master_education_circle_second_color = get_theme_mod('master_education_circle_second_color');

	if($master_education_circle_first_color != false || $master_education_circle_second_color != false){
		$ecommerce_landing_page_custom_css .='#banner::after{
		background: linear-gradient(0deg, '.esc_attr($master_education_circle_first_color).' 0%, '.esc_attr($master_education_circle_second_color).' 100%);
		}';
	}

	$master_education_large_circle_first_color = get_theme_mod('master_education_large_circle_first_color');

	$master_education_large_circle_second_color = get_theme_mod('master_education_large_circle_second_color');

	if($master_education_large_circle_first_color != false || $master_education_large_circle_second_color != false){
		$ecommerce_landing_page_custom_css .='#banner::before{
		background: linear-gradient(0deg, '.esc_attr($master_education_large_circle_first_color).' 0%,'.esc_attr($master_education_large_circle_second_color).' 100%);
		}';
	}

	$master_education_large_small_img_circle_first_color = get_theme_mod('master_education_large_small_img_circle_first_color');

	$master_education_large_small_img_circle_second_color = get_theme_mod('master_education_large_small_img_circle_second_color');

	if($master_education_large_small_img_circle_first_color != false || $master_education_large_small_img_circle_second_color != false){
		$ecommerce_landing_page_custom_css .='.banner-image1 img{
		background: linear-gradient(0deg, '.esc_attr($master_education_large_small_img_circle_first_color).' 0%,'.esc_attr($master_education_large_small_img_circle_second_color).' 100%);
		}';
	}
	// Hover on featured image //
	$master_education_show_featured = get_theme_mod( 'master_education_featured_image_hide_show', 1 );
	$master_education_hover_effect  = get_theme_mod( 'master_education_featured_image_hover', 'none' );

	if ( $master_education_show_featured && $master_education_hover_effect !== 'none' ) {

		$ecommerce_landing_page_custom_css .= '
		.ecommerce-landing-page-featured-image img{
			transition: all 0.4s ease;
		}';

		if ( $master_education_hover_effect === 'zoom-in' ) {
			$ecommerce_landing_page_custom_css .= '
			.ecommerce-landing-page-featured-image:hover img{
				transform: scale(1.2);
			}';
		}

		if ( $master_education_hover_effect === 'zoom-out' ) {
			$ecommerce_landing_page_custom_css .= '
			.ecommerce-landing-page-featured-image img{
				transform: scale(1.2);
			}
			.ecommerce-landing-page-featured-image:hover img{
				transform: scale(1);
			}';
		}

		if ( $master_education_hover_effect === 'grayscale' ) {
			$ecommerce_landing_page_custom_css .= '
			.ecommerce-landing-page-featured-image img{
				filter: grayscale(100%);
			}
			.ecommerce-landing-page-featured-image:hover img{
				filter: grayscale(0);
			}';
		}

		if ( $master_education_hover_effect === 'sepia' ) {
			$ecommerce_landing_page_custom_css .= '
			.ecommerce-landing-page-featured-image:hover img{
				filter: sepia(100%);
			}';
		}

		if ( $master_education_hover_effect === 'blur' ) {
			$ecommerce_landing_page_custom_css .= '
			.ecommerce-landing-page-featured-image:hover img{
				filter: blur(3px);
			}';
		}

		if ( $master_education_hover_effect === 'bright' ) {
			$ecommerce_landing_page_custom_css .= '
			.ecommerce-landing-page-featured-image:hover img{
				filter: brightness(1.3);
			}';
		}

		if ( $master_education_hover_effect === 'translate' ) {
			$ecommerce_landing_page_custom_css .= '
			.ecommerce-landing-page-featured-image:hover img{
				transform: translateY(-10px);
			}';
		}
	}

