jQuery(document).ready(function($){

    $(document).on('click', '#ecommerce-landing-page-welcome-notice .notice-dismiss', function(){

        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'ecommerce_landing_page_dismiss_notice'
            }
        });

    });

});