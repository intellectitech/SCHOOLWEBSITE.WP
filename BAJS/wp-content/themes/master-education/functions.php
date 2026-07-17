<?php
	if ( ! function_exists( 'master_education_setup' ) ) :

	function master_education_setup() {
		$GLOBALS['content_width'] = apply_filters( 'master_education_content_width', 640 );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );

		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff'
		) );

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
	add_editor_style( array( 'assets/css/editor-style.css', master_education_font_url() ) );
}
    endif;
	add_action( 'after_setup_theme', 'master_education_setup' );

	

	/* Theme Font URL */
	function master_education_font_url() {
		$font_family   = array(
			'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
			'Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800',
			'Dancing+Script:wght@400..700',
			'Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900'
		);
		$query_args = array(
				'family' => implode( '|', $font_family ),
				'display' => 'swap',
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
		if ( function_exists( 'ecommerce_landing_page_wptt_get_webfont_url' ) ) {
				return ecommerce_landing_page_wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
		}
		return esc_url_raw( $fonts_url );
	}

	add_action( 'wp_enqueue_scripts', 'master_education_enqueue_styles' );
	function master_education_enqueue_styles() {
		wp_enqueue_style( 'master-education-font', master_education_font_url(), array() );
    	$parent_style = 'ecommerce-landing-page-basic-style'; // Style handle of parent theme.

		wp_enqueue_style( 'master-education-bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css' );
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'master-education-style', get_stylesheet_uri(), array( $parent_style ) );
		require get_theme_file_path( '/custom-style.php' );
		wp_add_inline_style( 'master-education-style',$ecommerce_landing_page_custom_css );
		require get_parent_theme_file_path( '/custom-style.php' );
		wp_add_inline_style( 'ecommerce-landing-page-basic-style',$ecommerce_landing_page_custom_css );
		wp_enqueue_style( 'master-education-block-style', get_theme_file_uri('/assets/css/blocks.css') );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	add_action( 'init', 'master_education_remove_parent_function');
	function master_education_remove_parent_function() {
		remove_action( 'admin_notices', 'ecommerce_landing_page_activation_notice' );
		remove_action( 'admin_menu', 'ecommerce_landing_page_gettingstarted' );
	}

	function master_education_my_child_customizer_remove_banner() {
		wp_add_inline_script(
			'customize-controls',
			"
			jQuery(function($){
				function removeBanner() {
					$('.vw-bundle-banner').remove();
				}

				removeBanner();
				setInterval(removeBanner, 500);
			});
			"
		);
	}
	add_action( 'customize_controls_enqueue_scripts', 'master_education_my_child_customizer_remove_banner', 999 );

	add_action( 'customize_register', 'master_education_customize_register', 11 );
	function master_education_customize_register($wp_customize) {
		global $wp_customize;
		$wp_customize->remove_section( 'ecommerce_landing_page_go_pro' );
		$wp_customize->remove_section( 'ecommerce_landing_page_get_started_link' );
		$wp_customize->remove_setting( 'ecommerce_landing_page_cart_icon' );
		$wp_customize->remove_control( 'ecommerce_landing_page_cart_icon' );
		$wp_customize->remove_setting( 'ecommerce_landing_page_show_hide_product' );
		$wp_customize->remove_control( 'ecommerce_landing_page_show_hide_product' );
		$wp_customize->remove_setting( 'ecommerce_landing_page_product_small_text' );
		$wp_customize->remove_control( 'ecommerce_landing_page_product_small_text' );
		$wp_customize->remove_setting( 'ecommerce_landing_page_product_category' );
		$wp_customize->remove_control( 'ecommerce_landing_page_product_category' );
		$wp_customize->remove_setting( 'master_education_tagline_title1' );
		$wp_customize->remove_control( 'master_education_tagline_title1' );
		$wp_customize->remove_setting( 'ecommerce_landing_page_show_hide_cart' );
		$wp_customize->remove_control( 'ecommerce_landing_page_show_hide_cart' );

	  	$wp_customize->add_setting( 'master_education_second_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	  	));
	  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'master_education_second_color', array(
	  		'label' => __('Second Color', 'master-education'),
		    'description' => __('It will change the highlight color in one click.', 'master-education'),
		    'section' => 'ecommerce_landing_page_global_typography',
		    'settings' => 'master_education_second_color',
		    'priority' => 11,
	  	)));

		$wp_customize->add_setting('master_education_top_myaccount_icon_url',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw'
		));

		$wp_customize->add_control('master_education_top_myaccount_icon_url',array(
			'label'	=> esc_html__( 'Add Icon URL', 'master-education' ),
			'section'	=> 'ecommerce_landing_page_topbar_section',
			'setting'	=> 'master_education_top_myaccount_icon_url',
			'type'	=> 'url'
		));

		// banner
		$wp_customize->add_setting('master_education_tagline_title1',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('master_education_tagline_title1',array(
			'label'	=> __('Banner Small Heading','master-education'),
			'section'	=> 'ecommerce_landing_page_banner',
			'type'		=> 'text',
			'priority'  => 23,
		));

		$wp_customize->add_setting('master_education_banner_image',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'master_education_banner_image',array(
	      'label' => __('Banner Image','master-education'),
	      'description' => __('Image size (300px x 200px)','master-education'),
	      'section' => 'ecommerce_landing_page_banner',
	      'priority' => 29,
		)));

		$wp_customize->add_setting('master_education_banner_image1',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'master_education_banner_image1',array(
	      'label' => __('Banner Image2','master-education'),
	      'description' => __('Image size (300px x 200px)','master-education'),
	      'section' => 'ecommerce_landing_page_banner',
	      'priority' => 30,
		)));

		$wp_customize->add_setting('master_education_banner_image2',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'master_education_banner_image2',array(
	      'label' => __('Banner Image3','master-education'),
	      'description' => __('Image size (300px x 200px)','master-education'),
	      'section' => 'ecommerce_landing_page_banner',
	      'priority' => 31,
		)));

		$wp_customize->add_setting('master_education_banner_image3',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'master_education_banner_image3',array(
	      'label' => __('Banner Image4','master-education'),
	      'description' => __('Image size (300px x 200px)','master-education'),
	      'section' => 'ecommerce_landing_page_banner',
	      'priority' => 32,
		)));

		$wp_customize->add_setting( 'master_education_circle_first_color', array(
		    'default' => '#452C74',
		    'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'master_education_circle_first_color', array(
			'label' => __('Small Circle First Color Option', 'master-education'),
		    'section' => 'ecommerce_landing_page_banner',
		    'settings' => 'master_education_circle_first_color',
		    'priority' => 33,
		)));

		$wp_customize->add_setting( 'master_education_circle_second_color', array(
		    'default' => '#624B87',
		    'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'master_education_circle_second_color', array(
			'label' => __('Small Circle Second Color Option', 'master-education'),
		    'section' => 'ecommerce_landing_page_banner',
		    'settings' => 'master_education_circle_second_color',
		    'priority' => 34,
		)));

		$wp_customize->add_setting( 'master_education_large_circle_first_color', array(
		    'default' => '#422770',
		    'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'master_education_large_circle_first_color', array(
			'label' => __('Large Circle First Color Option', 'master-education'),
		    'section' => 'ecommerce_landing_page_banner',
		    'settings' => 'master_education_large_circle_first_color',
		    'priority' => 35,
		)));

		$wp_customize->add_setting( 'master_education_large_circle_second_color', array(
		    'default' => '#543A7C',
		    'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'master_education_large_circle_second_color', array(
			'label' => __('Large Circle Second Color Option', 'master-education'),
		    'section' => 'ecommerce_landing_page_banner',
		    'settings' => 'master_education_large_circle_second_color',
		    'priority' => 36,
		)));

		$wp_customize->add_setting( 'master_education_large_small_img_circle_first_color', array(
		    'default' => '#422770',
		    'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'master_education_large_small_img_circle_first_color', array(
			'label' => __('Banner Image Border First Color Option', 'master-education'),
		    'section' => 'ecommerce_landing_page_banner',
		    'settings' => 'master_education_large_small_img_circle_first_color',
		    'priority' => 37,
		)));

		$wp_customize->add_setting( 'master_education_large_small_img_circle_second_color', array(
		    'default' => '#543A7C',
		    'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'master_education_large_small_img_circle_second_color', array(
			'label' => __('Banner Image Border second Color Option', 'master-education'),
		    'section' => 'ecommerce_landing_page_banner',
		    'settings' => 'master_education_large_small_img_circle_second_color',
		    'priority' => 38,
		)));

		// About Section
		$wp_customize->add_section('master_education_about_section' , array(
	  		'title' => esc_html__( 'About Section', 'master-education' ),
			'panel' => 'ecommerce_landing_page_panel_id',
			'priority' => 50,
		) );

		$wp_customize->add_setting('master_education_about_sub_title',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('master_education_about_sub_title',array(
			'label'	=> esc_html__( 'About Sub-Heading', 'master-education' ),
			'section'	=> 'master_education_about_section',
			'type'		=> 'text',
			'input_attrs' => array(
		      'placeholder' => __( 'About Us', 'master-education' ),
		    ),
		));

		$wp_customize->add_setting('master_education_about_main_title',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('master_education_about_main_title',array(
			'label'	=> esc_html__( 'About Heading', 'master-education' ),
			'section'	=> 'master_education_about_section',
			'type'		=> 'text',
			'input_attrs' => array(
		      'placeholder' => __( 'Know About Histudy Learning Platform', 'master-education' ),
		    ),
		));

		$wp_customize->add_setting('master_education_about_desc_text',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('master_education_about_desc_text',array(
			'label'	=>esc_html__( 'About Content', 'master-education' ),
			'section'	=> 'master_education_about_section',
			'type'		=> 'text',
			'input_attrs' => array(
		      'placeholder' => __( 'Lorem Ipsum is simply dummy...', 'master-education' ),
		    ),
		));

		for($master_education_i=1; $master_education_i<=2; $master_education_i++) {

			$wp_customize->add_setting('master_education_about_bottom_box_icon' .$master_education_i ,array(
				'default'	=> 'fa-solid fa-heart',
				'sanitize_callback'	=> 'sanitize_text_field'
			));
			$wp_customize->add_control(new Ecommerce_Landing_Page_Fontawesome_Icon_Chooser(
				$wp_customize,'master_education_about_bottom_box_icon' .$master_education_i ,array(
				'label'	=> __('Add Icon','ecommerce-landing-page'),
				'transport' => 'refresh',
				'section'	=> 'master_education_about_section',
				'setting'	=> 'master_education_about_bottom_box_icon' .$master_education_i ,
				'type'		=> 'icon'
			)));

			$wp_customize->add_setting('master_education_about_bottom_title' .$master_education_i ,array(
				'default'	=> '',
				'sanitize_callback'	=> 'sanitize_text_field'
			));
			$wp_customize->add_control('master_education_about_bottom_title' .$master_education_i ,array(
				'label'	=>esc_html__( 'About Bottom Heading', 'master-education' ),
				'section'	=> 'master_education_about_section',
				'type'		=> 'text',
				'input_attrs' => array(
				'placeholder' => __( 'Flexible Classes', 'master-education' ),
				),
			));

			$wp_customize->add_setting('master_education_about_bottom_desc' .$master_education_i ,array(
				'default'	=> '',
				'sanitize_callback'	=> 'sanitize_text_field'
			));
			$wp_customize->add_control('master_education_about_bottom_desc' .$master_education_i ,array(
				'label'	=>esc_html__( 'About Bottom Content', 'master-education' ),
				'section'	=> 'master_education_about_section',
				'type'		=> 'text',
				'input_attrs' => array(
				'placeholder' => __( 'It is a long established fact that a reader...', 'master-education' ),
				),
			));

		}
		
		$wp_customize->add_setting('master_education_about_img1',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'master_education_about_img1',array(
	      'label' => __('About Image1','master-education'),
	      'description' => __('Image size (270px × 300px)','master-education'),
	      'section' => 'master_education_about_section',
		)));

		$wp_customize->add_setting('master_education_about_img2',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'master_education_about_img2',array(
	      'label' => __('About Image2','master-education'),
	      'description' => __('Image size (270px × 220px)','master-education'),
	      'section' => 'master_education_about_section',
		)));

		$wp_customize->add_setting('master_education_about_img3',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'master_education_about_img3',array(
	      'label' => __('About Image3','master-education'),
	      'description' => __('Image size (330px × 340px)','master-education'),
	      'section' => 'master_education_about_section',
		)));

	}

	add_action( 'customize_register', 'master_education_typography_customize_register', 12 );
	function master_education_typography_customize_register( $wp_customize ) {
		$wp_customize->remove_control( 'ecommerce_landing_page_second_color' );
	}

	// Remove TGM
	function master_education_remove_tgmpa_action() {
		remove_action( 'tgmpa_register', 'ecommerce_landing_page_register_recommended_plugins' );
	}
	add_action( 'after_setup_theme', 'master_education_remove_tgmpa_action', 20 );

	/**
	 * Enqueue block editor style
	 */
	function master_education_block_editor_styles() {
		wp_enqueue_style( 'master-education-font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
	}
	add_action( 'enqueue_block_editor_assets', 'master_education_block_editor_styles' );

	/* Theme Widgets Setup */

	function master_education_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Footer Navigation 1', 'master-education' ),
			'description'   => __( 'Appears on footer 1', 'master-education' ),
			'id'            => 'footer-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Navigation 2', 'master-education' ),
			'description'   => __( 'Appears on footer 2', 'master-education' ),
			'id'            => 'footer-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Navigation 3', 'master-education' ),
			'description'   => __( 'Appears on footer 3', 'master-education' ),
			'id'            => 'footer-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Navigation 4', 'master-education' ),
			'description'   => __( 'Appears on footer 4', 'master-education' ),
			'id'            => 'footer-4',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	add_action( 'widgets_init', 'master_education_widgets_init' );

// Customizer Pro
load_template( ABSPATH . WPINC . '/class-wp-customize-section.php' );

class Master_Education_Customize_Section_Pro extends WP_Customize_Section {
	public $type = 'master-education';
	public $pro_text = '';
	public $pro_url = '';
	public function json() {
		$json = parent::json();
		$json['pro_text'] = $this->pro_text;
		$json['pro_url']  = esc_url( $this->pro_url );
		return $json;
	}
	protected function render_template() { ?>
		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
			<h3 class="accordion-section-title">
				{{ data.title }}
				<# if ( data.pro_text && data.pro_url ) { #>
					<a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
				<# } #>
			</h3>
		</li>
	<?php }
}

final class Master_Education_Customize {
	public static function get_instance() {
		static $instance = null;
		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}
		return $instance;
	}
	private function __construct() {}
	private function setup_actions() {
		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );
		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}
	public function sections( $manager ) {
		// Register custom section types.
		$manager->register_section_type( 'Master_Education_Customize_Section_Pro' );
		
		// Register sections.
		$manager->add_section( new Master_Education_Customize_Section_Pro( $manager, 'master_education_upgrade_pro_link',
		array(
			'priority'   => 1,
			'title'    => esc_html__( 'EDUCATIONAL PRO', 'master-education' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'master-education' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/products/landing-page-wordpress-theme'),
		) ) );
	}
	public function enqueue_control_scripts() {
		wp_enqueue_script( 'master-education-customize-controls', get_stylesheet_directory_uri() . '/assets/js/customize-controls-child.js', array( 'customize-controls' ) );
		wp_enqueue_style( 'master-education-customize-controls', get_stylesheet_directory_uri() . '/assets/css/customize-controls-child.css' );
	}
}
Master_Education_Customize::get_instance();