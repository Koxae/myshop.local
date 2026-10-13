jQuery(document).ready(function ($) {
    $(document).on('click', '.welcome-notice .notice-dismiss', function () {

        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'hover_boards_dismissed_notice',
            }
        });

    });
});

// Plugin – AI Content Writer plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const hover_boards_button = document.getElementById('install-activate-button');

    if (!hover_boards_button) return;

    hover_boards_button.addEventListener('click', function (e) {
        e.preventDefault();

        const hover_boards_redirectUrl = hover_boards_button.getAttribute('data-redirect');

        // Step 1: Check if plugin is already active
        const hover_boards_checkData = new FormData();
        hover_boards_checkData.append('action', 'check_plugin_activation');

        fetch(installPluginData.ajaxurl, {
            method: 'POST',
            body: hover_boards_checkData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data.active) {
                // Plugin is already active → just redirect
                window.location.href = hover_boards_redirectUrl;
            } else {
                // Not active → proceed with install + activate
                hover_boards_button.textContent = 'Installing & Activating...';

                const hover_boards_installData = new FormData();
                hover_boards_installData.append('action', 'install_and_activate_required_plugin');
                hover_boards_installData.append('_ajax_nonce', installPluginData.nonce);

                fetch(installPluginData.ajaxurl, {
                    method: 'POST',
                    body: hover_boards_installData,
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        window.location.href = hover_boards_redirectUrl;
                    } else {
                        alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                        hover_boards_button.textContent = 'Try Again';
                    }
                })
                .catch(error => {
                    alert('Request failed: ' + error.message);
                    hover_boards_button.textContent = 'Try Again';
                });
            }
        })
        .catch(error => {
            alert('Check request failed: ' + error.message);
        });
    });
});
