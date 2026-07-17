<?php
/**
 * Getting Started
 *
 */

if( ! function_exists( 'flex_education_getting_started_menu' ) ) :
/**
 * Adding Getting Started Page in admin menu
 */
function flex_education_getting_started_menu(){

	add_theme_page(
		__( 'Get Started', 'flex-education' ),
		__( 'Getting Started', 'flex-education' ),
		'manage_options',
		'flex-education-getting-started',
		'flex_education_getting_started_page'
	);
}
endif;
add_action( 'admin_menu', 'flex_education_getting_started_menu' );

if( ! function_exists( 'flex_education_getting_started_admin_scripts' ) ) :
/**
 * Load Getting Started styles in the admin
 */
function flex_education_getting_started_admin_scripts(){
    wp_enqueue_style( 'flex-education-getting-started', get_template_directory_uri() . '/inc/dashboard/css/getting-started.css', false);
    wp_enqueue_script( 'updates' );
    // Admin notice code START
	wp_register_script('flex-education-notice', esc_url(get_stylesheet_directory_uri()) . '/inc/dashboard/js/notice.js', array('jquery'), time(), true);
	wp_enqueue_script('flex-education-notice');
	// Admin notice code END
}
endif;
add_action( 'admin_enqueue_scripts', 'flex_education_getting_started_admin_scripts' );

if( ! function_exists( 'flex_education_getting_started_page' ) ) :
/**
 * Callback function for admin page.
*/
function flex_education_getting_started_page(){ ?>
	<div class="wrap getting-started">
		<h2 class="notices"></h2>
		<div class="flex-dashboard-container">
			<div class="inner-tab-box">
				<?php require get_theme_file_path() . '/inc/dashboard/tabs/start-dashboard.php'; ?>
			</div>
		</div><!-- flex-container -->
	</div><!-- .getting-started -->
	<?php
}
endif;

/**
 * Banner Notice
 */
function flex_education_admin_notice_activation() {

    // Don't show if dismissed
    if ( get_option( 'flex_education_admin_notice', false ) ) {
        return;
    }

    $flex_education_screen  = get_current_screen();
    global $pagenow;

    if (
        $pagenow === 'themes.php' &&
        isset($_GET['page']) &&
        $_GET['page'] === 'flex-education-getting-started'
    ) {
        return;
    }

    if ( ! $flex_education_screen ) {
        return;
    }
    ?>  
    <div id="flex-education-welcome-notice" class="notice is-dismissible notice-getstarted-flex" data-notice="get-start">
        <div class="inner-notice">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/inc/dashboard/images/responsive-img.png'); ?>" />
            
            <div class="inner-content">
                <h2><?php esc_html_e('🎉 Thank you for activating the ', 'flex-education'); ?><span><?php echo esc_html( wp_get_theme()->get( 'Name' ) ); ?></span></h2>
                
                <p><?php esc_html_e('Get started quickly by importing the demo content or explore more powerful options below.', 'flex-education'); ?></p>
                
				<div class="notice-button">
                <?php $flex_template_is_imported = get_option('flex_template_is_imported'); ?>
                <div class="notice-button">
                    <?php if ( !$flex_template_is_imported ) { ?>
                        <a href="javascript:void(0);" 
                        id="install-activate-getstarted" 
                        class="button admin-button info-button">
                            <?php esc_html_e('Import Demo', 'flex-education'); ?>
                        </a>
                    <?php } else { ?>
                        <a href="<?php echo esc_url(home_url()); ?>" 
                        target="_blank"
                        id="install-activate-getstarted" 
                        class="button admin-button info-button">
                            <?php esc_html_e('View Site', 'flex-education'); ?>
                        </a>
                    <?php } ?>
                </div>

					<script type="text/javascript">
					document.addEventListener('DOMContentLoaded', function () {
						const btn = document.getElementById('install-activate-getstarted');
						if (!btn) return;

						btn.addEventListener('click', function () {
							const button = this;
							const redirectUrl = '<?php echo esc_url(admin_url("admin.php?page=fleximp-template-importer")); ?>';

							jQuery.post(ajaxurl, { action: 'check_flex_import_activation' }, function (response) {

								if (response.success && response.data.active) {
									window.location.href = redirectUrl;
								} else {
									button.textContent = 'Installing & Activating...';

									jQuery.post(ajaxurl, {
										action: 'install_and_activate_flex_import_plugin_lite',
										nonce: '<?php echo wp_create_nonce("install_activate_nonce"); ?>'
									}, function (response) {

										if (response.success) {
											window.location.href = redirectUrl;
										} else {
											alert('Failed to activate the plugin.');
											button.textContent = 'Try Again';
										}

									});
								}

							});
						});
					});
					</script>

					<a href="<?php echo esc_url( FLEX_EDUCATION_BUY_NOW ); ?>" target="_blank" class="button admin-button buy-now-button">
						<?php echo __('Upgrade Pro', 'flex-education'); ?>
					</a>

					<a href="<?php echo esc_url( FLEX_EDUCATION_LIVE_DEMO ); ?>" target="_blank" class="button admin-button bundle-button">
						<?php echo __('Live Demo', 'flex-education'); ?>
					</a>

					<a href="<?php echo esc_url( FLEX_EDUCATION_DOCUMENTATION ); ?>" target="_blank" class="button admin-button bundle-button">
						<?php echo __('Documentation', 'flex-education'); ?>
					</a>

				</div>
                <p><?php esc_html_e('Build faster. Look better. Go Pro with Flex!', 'flex-education'); ?></p>
            </div>
        </div>
    </div>

    <?php
}


/**
 * Theme Setup
 */
if ( ! function_exists( 'flex_education_admin_notice_setup' ) ) :

function flex_education_admin_notice_setup() {

    if ( is_admin() ) {
        add_action('admin_notices', 'flex_education_admin_notice_activation');
    }
}

endif;

add_action( 'after_setup_theme', 'flex_education_admin_notice_setup' );

add_action('wp_ajax_install_and_activate_flex_import_plugin_lite', 'install_and_activate_flex_import_plugin_lite');

function install_and_activate_flex_import_plugin_lite() {
    // Verify nonce for security
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'install_activate_nonce')) {
        wp_send_json_error(['message' => 'Nonce verification failed.']);
    }

    // Define plugin slugs and file paths
    $flex_education_elementor_slug = 'elementor';
    $flex_education_elementor_file = 'elementor/elementor.php';
    $flex_education_elementor_url  = 'https://downloads.wordpress.org/plugin/elementor.latest-stable.zip';

    $flex_education_flex_importer_slug = 'flex-import';
    $flex_education_flex_importer_file = 'flex-import/flex-import.php';
    $flex_education_flex_importer_url  = 'https://downloads.wordpress.org/plugin/flex-import.latest-stable.zip';

    // Include necessary WordPress files
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
    include_once ABSPATH . 'wp-admin/includes/file.php';
    include_once ABSPATH . 'wp-admin/includes/misc.php';
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

    $flex_education_upgrader = new Plugin_Upgrader(new Automatic_Upgrader_Skin());

    // Step 1: Install and activate WooCommerce if not active
    if (!is_plugin_active($flex_education_elementor_file)) {
        $flex_education_installed_plugins = get_plugins();

        if (!isset($flex_education_installed_plugins[$flex_education_elementor_file])) {
            // Install WooCommerce
            $flex_education_install_wc = $flex_education_upgrader->install($flex_education_elementor_url);
            if (is_wp_error($flex_education_install_wc)) {
                wp_send_json_error(['message' => 'WooCommerce installation failed.']);
            }
        }

        // Activate WooCommerce
        $flex_education_activate_wc = activate_plugin($flex_education_elementor_file);
        if (is_wp_error($flex_education_activate_wc)) {
            wp_send_json_error(['message' => 'WooCommerce activation failed.', 'error' => $flex_education_activate_wc->get_error_message()]);
        }
    }

    // Step 2: Install and activate Flex Importer plugin
    if (!is_plugin_active($flex_education_flex_importer_file)) {
        $flex_education_installed_plugins = get_plugins();

        if (!isset($flex_education_installed_plugins[$flex_education_flex_importer_file])) {
            // Install Flex Importer plugin
            $flex_education_install_wc_plugin = $flex_education_upgrader->install($flex_education_flex_importer_url);
            if (is_wp_error($flex_education_install_wc_plugin)) {
                wp_send_json_error(['message' => 'Flex Importer plugin installation failed.']);
            }
        }

        // Activate Flex Importer plugin
        $flex_education_activate_wc_plugin = activate_plugin($flex_education_flex_importer_file);
        if (is_wp_error($flex_education_activate_wc_plugin)) {
            wp_send_json_error(['message' => 'Flex Importer plugin activation failed.', 'error' => $flex_education_activate_wc_plugin->get_error_message()]);
        }
    }

    // Success response
    wp_send_json_success(['message' => 'WooCommerce and Flex Importer plugins are activated successfully.']);
}