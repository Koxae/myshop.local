<?php
// Add Getstart admin notice
function hover_boards_admin_notice() { 
   $hover_boards_meta = get_option( 'hover_boards_admin_notice' );

       if( !$hover_boards_meta ){
       if( is_network_admin() ){
            return;
        } if( ! current_user_can( 'manage_options' ) ){
            return;
        }if ( isset($_GET['page']) && $_GET['page'] === 'hover-boards-info' ) {
            return;
        } ?>
        <div class="notice notice-success is-dismissible welcome-notice">
            <div class="notice-row">
                <div class="notice-text">
                    <p class="welcome-text1"><?php esc_html_e( '🎉 Welcome to VW Themes,', 'hover-boards' ); ?></p>
                    <p class="welcome-text2"><?php esc_html_e( 'You are now using the Hover Boards, a beautifully designed theme to kickstart your website.', 'hover-boards' ); ?></p>
                    <p class="welcome-text3"><?php esc_html_e( 'To help you get started quickly, use the options below:', 'hover-boards' ); ?></p>

                    <span class="import-btn">
                        <a href="javascript:void(0);" id="install-activate-button" class="button admin-button info-button">
                           <?php echo __('GET STARTED', 'hover-boards'); ?>
                        </a>
                        <script type="text/javascript">
                            document.getElementById('install-activate-button').addEventListener('click', function () {
                                const hover_boards_button = this;
                                const hover_boards_redirectUrl = '<?php echo esc_url(admin_url("themes.php?page=hover-boards-info")); ?>';
                                // First, check if plugin is already active
                                jQuery.post(ajaxurl, { action: 'check_plugin_activation' }, function (response) {
                                    if (response.success && response.data.active) {
                                        // Plugin already active — just redirect
                                        window.location.href = hover_boards_redirectUrl;
                                    } else {
                                        // Show Installing & Activating only if not already active
                                        hover_boards_button.textContent = 'Installing & Activating...';

                                        jQuery.post(ajaxurl, {
                                            action: 'install_and_activate_required_plugin',
                                            nonce: '<?php echo wp_create_nonce("install_activate_nonce"); ?>'
                                        }, function (response) {
                                            if (response.success) {
                                                window.location.href = hover_boards_redirectUrl;
                                            } else {
                                                alert('Failed to activate the plugin.');
                                                hover_boards_button.textContent = 'Try Again';
                                            }
                                        });
                                    }
                                });
                            });
                        </script>
                    </span>

                    <span class="demo-btn">
                        <a href="https://www.vwthemes.net/hover-boards/" class="button button-primary" target="_blank">
                            <?php esc_html_e( 'VIEW DEMO', 'hover-boards' ); ?>
                        </a>
                    </span>

                    <span class="upgrade-btn">
                        <a href="https://www.vwthemes.com/products/hover-boards-wordpress-theme" class="button button-primary" target="_blank">
                            <?php esc_html_e( 'UPGRADE TO PRO', 'hover-boards' ); ?>
                        </a>
                    </span>

                    <span class="bundle-btn">
                        <a href="https://www.vwthemes.com/products/wp-theme-bundle" class="button button-primary" target="_blank">
                            <?php esc_html_e( 'BUNDLE OF 500+ THEMES', 'hover-boards' ); ?>
                        </a>
                    </span>
                </div>

                <div class="notice-img1">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/arrow-notice.png' ); ?>" width="180" alt="<?php esc_attr_e( 'Hover Boards', 'hover-boards' ); ?>" />
                </div>

                <div class="notice-img2">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/bundle-notice.png' ); ?>" width="180" alt="<?php esc_attr_e( 'Hover Boards', 'hover-boards' ); ?>" />
                </div>
            </div>
        </div>
        <?php

    }?>
        <?php

    }

add_action( 'admin_notices', 'hover_boards_admin_notice' );

if( ! function_exists( 'hover_boards_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
// Admin Notice Update (PERMANENT DISMISS)
function hover_boards_update_admin_notice(){
    if ( isset( $_GET['hover_boards_admin_notice'] ) && $_GET['hover_boards_admin_notice'] == '1' ) {
        update_option( 'hover_boards_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'hover_boards_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'hover_boards_getstart_setup_options');
function hover_boards_getstart_setup_options () {
    update_option('hover_boards_admin_notice', FALSE );
}