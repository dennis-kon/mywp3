jQuery(document).ready(function($) {
    $(document).on('click', '.theme-about-notice .notice-dismiss', function() {
        var $notice = $(this).closest('.theme-about-notice');
        $.post(themeAdminNotice.ajax_url, {
            action: themeAdminNotice.action,
            nonce:  themeAdminNotice.nonce
        }, function() {
            $notice.slideUp(200, function() {
                $notice.remove();
            });
        });
    });
});