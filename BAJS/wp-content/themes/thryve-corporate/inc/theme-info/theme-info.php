<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add Theme Info Page
 */
function thryve_corporate_add_theme_info_page() {
    add_theme_page(
        esc_html__( 'Thryve Corporate', 'thryve-corporate' ),
        esc_html__( 'Thryve Corporate', 'thryve-corporate' ),
        'manage_options',
        'thryve-corporate-info',
        'thryve_corporate_render_theme_info_page'
    );
}
add_action( 'admin_menu', 'thryve_corporate_add_theme_info_page' );


/**
 * Enqueue CSS for Theme Info Page
 */
function thryve_corporate_admin_assets( $hook ) {

    // Correct hook slug for your page
    if ( 'appearance_page_thryve-corporate-info' !== $hook ) {
        return;
    }

    wp_enqueue_style(
        'thryve-corporate-admin',
        get_template_directory_uri() . '/inc/theme-info/theme-info.css',
        array(),
        wp_get_theme()->get('Version') // better than hardcoded version
    );
}
add_action( 'admin_enqueue_scripts', 'thryve_corporate_admin_assets' );



/**
 * Render Theme Info Page
 */
function thryve_corporate_render_theme_info_page() {
    $pro_url     = 'https://thryvewp.com/themes/thryve-corporate-pro/';
    $contact_url = 'https://thryvewp.com/contact';
    $docs_url    = 'https://thryvewp.com/documentation/';
    ?>

    <div class="thryvewp-wrap">
        <div class="thryvewp-info-wrap">

            <!-- Header -->
            <div class="thryvewp-info-header">
                <h1><strong><?php esc_html_e( 'Thryve Corporate', 'thryve-corporate' ); ?></strong></h1>
                <p><?php esc_html_e( 'A modern Full Site Editing WordPress theme built for businesses, agencies, and professionals.', 'thryve-corporate' ); ?></p></br>
                <a href="<?php echo esc_url( $pro_url ); ?>" target="_blank" class="button button-primary button-hero">
                    <?php esc_html_e( 'Buy Pro', 'thryve-corporate' ); ?>
                </a>                
            </div>

            <!-- Features -->
            <div class="thryvewp-info-features">

                <div class="thryvewp-feature-box">
                    <span class="dashicons dashicons-editor-expand"></span>
                    <h3><?php esc_html_e( 'Full Site Editing', 'thryve-corporate' ); ?></h3>
                    <p><?php esc_html_e( 'Customize your entire website using Gutenberg blocks.', 'thryve-corporate' ); ?></p>
                </div>

                <div class="thryvewp-feature-box">
                    <span class="dashicons dashicons-airplane"></span>
                    <h3><?php esc_html_e( 'Fast & Lightweight', 'thryve-corporate' ); ?></h3>
                    <p><?php esc_html_e( 'Optimized for speed and performance.', 'thryve-corporate' ); ?></p>
                </div>

                <div class="thryvewp-feature-box">
                    <span class="dashicons dashicons-cart"></span>
                    <h3><?php esc_html_e( 'WooCommerce Ready', 'thryve-corporate' ); ?></h3>
                    <p><?php esc_html_e( 'Fully compatible with WooCommerce.', 'thryve-corporate' ); ?></p>
                </div>

                <div class="thryvewp-feature-box">
                    <span class="dashicons dashicons-laptop"></span>
                    <h3><?php esc_html_e( 'Responsive Design', 'thryve-corporate' ); ?></h3>
                    <p><?php esc_html_e( 'Looks perfect on all devices.', 'thryve-corporate' ); ?></p>
                </div>

            </div>
            
            <!-- Setup Guide -->
            <div class="thryvewp-setup-guide">
                <h2><?php esc_html_e( 'Getting Started Guide', 'thryve-corporate' ); ?></h2>
                <div class="thryvewp-setup-guide-list">
                    <div>
                        <h3>🏠 <?php esc_html_e( 'Setup Front Page and Post Page', 'thryve-corporate' ); ?></h3>
                        <ol>
                            <li><?php esc_html_e( 'Settings → Reading.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Select "A static page" under Your homepage displays.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Choose your Homepage and Posts page.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Click Save Changes.', 'thryve-corporate' ); ?></li>
                        </ol>
                    </div>
                    <div>
                        <h3>🖼️ <?php esc_html_e( 'Change Favicon and Site Logo', 'thryve-corporate' ); ?></h3>
                        <ol>
                            <li><?php esc_html_e( 'Go to Appearance → Customize or Appearance → Editor.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Open Site Identity.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Upload your Logo and Site Icon.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Click Publish / Save.', 'thryve-corporate' ); ?></li>
                        </ol>
                    </div>
                    <div>
                        <h3>✏️ <?php esc_html_e( 'Edit Front Page Template', 'thryve-corporate' ); ?></h3>
                        <ol>
                            <li><?php esc_html_e( 'Go to Appearance → Editor.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Open Templates → Front Page.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Edit blocks and layout as needed.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Click Save.', 'thryve-corporate' ); ?></li>
                        </ol>
                    </div>
                    <div>
                        <h3>🎨 <?php esc_html_e( 'Add Custom CSS', 'thryve-corporate' ); ?></h3>
                        <ol>
                            <li><?php esc_html_e( 'Go to Appearance → Editor', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Click Styles → Additional CSS.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Add your CSS code and save.', 'thryve-corporate' ); ?></li>
                        </ol>
                    </div>

                    <div>
                        <h3>🚀 <?php esc_html_e( 'What I Will Get on Pro Version', 'thryve-corporate' ); ?></h3>
                        <ol>
                            <li><?php esc_html_e( 'Additional Patterns & Templates.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Regular updates and compatibility checks.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Dedicated support & some customization help.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Theme setup and demo file installation.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Upcoming features and updates.', 'thryve-corporate' ); ?></li>
                        </ol>
                    </div>

                    <div>
                        <h3>🔑 <?php esc_html_e( 'How to Install Pro Version', 'thryve-corporate' ); ?></h3>
                        <ol>
                            <li><?php esc_html_e( 'After purchasing the Pro version, log in to Freemius using the username and password you received at the time of purchase.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Download the Pro version ZIP file from your Freemius account.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Go to your WordPress Dashboard → Appearance → Themes → Add New.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Click on Upload Theme and upload the downloaded ZIP file.', 'thryve-corporate' ); ?></li>
                            <li><?php esc_html_e( 'Activate the theme and enter your license key to enable Pro features.', 'thryve-corporate' ); ?></li>
                        </ol>
                    </div>

                </div>          
            </div>
            <!-- Action Buttons -->
            <div class="thryvewp-info-actions">
                 <a href="<?php echo esc_url( $pro_url ); ?>" target="_blank" class="button button-primary button-hero">
                    <?php esc_html_e( 'Buy Pro', 'thryve-corporate' ); ?>
                </a>
                
                <a href="<?php echo esc_url( $docs_url ); ?>" target="_blank" class="button button-secondary button-hero">
                    <?php esc_html_e( 'Documentation', 'thryve-corporate' ); ?>
                </a>

                <a href="<?php echo esc_url( $contact_url ); ?>" target="_blank" class="button button-primary button-hero">
                    <?php esc_html_e( 'Contact Us', 'thryve-corporate' ); ?>
                </a>
            </div>


        </div>
    </div>
<?php
}
